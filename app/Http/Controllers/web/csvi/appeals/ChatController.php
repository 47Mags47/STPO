<?php

namespace App\Http\Controllers\web\csvi\appeals;

use App\Events\SendAppealMessage;
use App\Events\User\SendAlert;
use App\Events\User\SendSystemAppealMessage;
use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Csvi\Csvi_Appeal_AppealMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ChatController
{
    private $appeal;

    private function getAppeal($id)
    {
        $this->appeal = Csvi_Appeal_Appeal::withTrashed()->whereKey($id)->first();
        return $this->appeal;
    }

    private function checkAccess($appeal_id)
    {
        $appeal = Csvi_Appeal_Appeal::withTrashed()->whereKey($appeal_id)->first();
        return auth()->user()->can('appeal-chat-access', $appeal);
    }

    public function index(Request $request)
    {
        $page_data = [
            'appeal' => $this->getAppeal($request->appeal),
            'messages' => Csvi_Appeal_AppealMessage::orderBy('created_at', 'desc')->where('appeal_id', $request->appeal)->paginate(50),
        ];
        return view('page.csvi.appeal.chat', $page_data);
    }

    public function store(Request $request)
    {
        $appeal = Csvi_Appeal_Appeal::whereKey($request->appeal)->first();
        if ($appeal->status_id == 3) {
            return back()->withErrors('Обращение закрыто');
        }

        if ($request->file('file')) {
            $request->validate(['file.*' => ['max:10240']]);

            foreach ($request->file('file') as $file) {
                $message = date('Y-m-d-H-i-s') . '_' . $file->getClientOriginalName();
                Storage::disk('appeal-chat')->putFileAs($request->appeal, $file, $message);

                $message = Csvi_Appeal_AppealMessage::create([
                    'appeal_id' => $request->appeal,
                    'sender_id' => auth()->user()->id,
                    'is_file' => true,
                    'is_image' => !Validator::make(['file' => $file], ['file' => 'image'])->fails(),
                    'message' => $message,
                ]);
            }
        } else {
            $validate = $request->validate([
                'data.message' => ['required']
            ]);

            $message = Csvi_Appeal_AppealMessage::create([
                'appeal_id' => $request->appeal,
                'sender_id' => auth()->user()->id,
                'message' => $validate['data']['message'],
            ]);
        }

        $event_from_id = auth()->user()->id == $appeal->sender_id
            ? $appeal->sender_id
            : $appeal->worker_id;

        event(new SendAlert(
            message: "Новое сообщение в чате обращения №$request->appeal",
            type: 2,
            from_id: $event_from_id,
            link: route('appeal.chat', ['appeal' => $appeal->id])
        ));

        return back();
    }

    public function download(Request $request)
    {
        $path = $request->appeal . '/' . $request->file_name;
        return Storage::disk('appeal-chat')->download($path, mb_substr($request->file_name, 20));
    }

    public function dontMath(Request $request)
    {
        $builder = Csvi_Appeal_Appeal::whereKey($request->appeal);
        $builder->update([
            'status_id' => 3,
            'worker_id' => null
        ]);
        $appeal = $builder->first();

        SendSystemAppealMessage::dispatch(
            $appeal->fresh()->id,
            'Тема обращения не соответсвует содержимому',
        );

        event(new SendAlert(
            message: "Статус обращения №$appeal->id изменен на \"Закрыто\". Тема обращения не соответсвует содержимому",
            type: 1
        ));

        return back();
    }
}
