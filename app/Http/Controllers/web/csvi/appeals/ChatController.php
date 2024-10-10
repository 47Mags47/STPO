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

    public function index(Request $request, Csvi_Appeal_Appeal $appeal)
    {
        return view('page.csvi.appeal.chat', compact('appeal'));
    }

    public function message_store(Request $request, Csvi_Appeal_Appeal $appeal)
    {
        // dd($request->all());

        if ($request->file('file')) {
            $request->validate(['file.*' => ['max:102400']]);

            foreach ($request->file('file') as $file) {
                $message = date('Y-m-d-H-i-s') . '_' . $file->getClientOriginalName();
                Storage::disk('appeal-chat')->putFileAs($appeal->id, $file, $message);
                Csvi_Appeal_AppealMessage::create([
                    'appeal_id' => $appeal->id,
                    'sender_id' => auth()->user()->id,
                    'is_file' => true,
                    'is_image' => !Validator::make(['file' => $file], ['file' => 'image'])->fails(),
                    'message' => $message,
                ]);

                event(new SendAlert(
                    message: "В чате прислали файл " . $file->getClientOriginalName(),
                    type: 2,
                    from_id: auth()->user()->id == $appeal->sender_id ? $appeal->worker_id : $appeal->sender_id,
                    sender_id: auth()->user()->id,
                    link: route('appeal.chat', ['appeal' => $appeal->id])
                ));
            }
        } else {
            $validate = $request->validate([
                'message' => ['required']
            ]);

            Csvi_Appeal_AppealMessage::create([
                'appeal_id' => $appeal->id,
                'sender_id' => auth()->user()->id,
                'message' => $validate['message'],
            ]);

            event(new SendAlert(
                message: $validate['message'],
                type: 2,
                from_id: auth()->user()->id == $appeal->sender_id ? $appeal->worker_id : $appeal->sender_id,
                sender_id: auth()->user()->id,
                link: route('appeal.chat', ['appeal' => $appeal->id])
            ));
        }

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
