<?php

namespace App\Http\Controllers\web\csvi\appeals;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Csvi\Csvi_Appeal_AppealMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChatController
{
    private $appeal;

    private function getAppeal($id){
        $this->appeal = Csvi_Appeal_Appeal::whereKey($id)->first();
        return $this->appeal;
    }

    private function checkAccess($appeal_id){
        $appeal = Csvi_Appeal_Appeal::whereKey($appeal_id)->first();
        return auth()->user()->can('appeal-chat-access', $appeal);
    }

    public function index(Request $request){
        if(!$this->checkAccess($request->appeal)){
            return back();
        }

        $page_data = [
            'appeal' => $this->getAppeal($request->appeal),
            'messages' => Csvi_Appeal_AppealMessage::orderBy('created_at', 'desc')->where('appeal_id', $request->appeal)->paginate(50),
        ];
        // dump($page_data);
        return view('page.main.appeal.chat', $page_data);
    }

    public function store(Request $request){
        if ($request->file('file')) {
            foreach ($request->file('file') as $file) {
                $message = date('Y-m-d-H-i-s') . '_' . $file->getClientOriginalName();
                $is_file = true;
                Storage::disk('appeal-chat')->putFileAs($request->appeal, $file, $message);
            }
        }else{
            $validate = $request->validate([
                'data.message' => ['required']
            ]);
            $is_file = false;
            $message = $validate['data']['message'];
        }

        Csvi_Appeal_AppealMessage::create([
            'appeal_id' => $request->appeal,
            'sender_id' => auth()->user()->id,
            'is_file' => $is_file,
            'message' => $message,
        ]);

        return back();
    }
}
