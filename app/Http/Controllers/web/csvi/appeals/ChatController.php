<?php

namespace App\Http\Controllers\web\csvi\appeals;

use App\Events\SendAppealMessage;
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
        if (!$this->checkAccess($request->appeal)) {
            return back();
        }

        $page_data = [
            'appeal' => $this->getAppeal($request->appeal),
            'messages' => Csvi_Appeal_AppealMessage::orderBy('created_at', 'desc')->where('appeal_id', $request->appeal)->paginate(50),
        ];
        return view('page.csvi.appeal.chat', $page_data);
    }

    public function store(Request $request)
    {
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

        if($message->appeal->worker_id){
            SendAppealMessage::dispatch($message);
        }

        return back();
    }

    public function download(Request $request){
        $path = $request->appeal . '/' . $request->file_name;
        return Storage::disk('appeal-chat')->download($path, mb_substr($request->file_name, 20));
    }
}
