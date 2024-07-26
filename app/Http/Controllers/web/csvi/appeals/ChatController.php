<?php

namespace App\Http\Controllers\web\main\appeals;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use Illuminate\Http\Request;

class ChatController
{
    private $appeal;

    private function getAppeal($id){
        $this->appeal = Csvi_Appeal_Appeal::whereKey($id)->first();
        return $this->appeal;
    }

    public function index(Request $request){
        $page_data = [
            'appeal' => $this->getAppeal($request->appeal)
        ];
        return view('page.main.appeal.chat', $page_data);
    }

    public function store(Request $request){
        if ($request->file('file')) {

        }else{
            $request->validate([
                'data.message' => ['required']
            ]);
        }

    }
}
