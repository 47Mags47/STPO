<?php

namespace App\Http\Controllers\CSVI\Appeal;

use App\Events\CSVI\Appeal\SendMessageEvent;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\CSVI\Appeal\Appeal;
use App\Models\CSVI\Appeal\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChatController extends Controller
{
    public function index(Appeal $appeal)
    {
        return view('pages.CSVI.appeal.chat', compact('appeal'));
    }

    public function messages(Appeal $appeal)
    {
        return view('components.chat.box', [
            'messages' => $appeal->messages,
            'fileRoute' => 'appeal.chat.file',
            'fileRouteParams' => ['appeal' => $appeal],
        ])->render();
    }

    public function getFile(Request $request, Appeal $appeal)
    {
        if ($appeal->hasWorker(user()) or $appeal->sender_id === user()->id) {
            $path = storage_path('app/private/csvi/appeal/chat/');
            $full_path = $path . $appeal->id . '/' . $request->get('file-name');

            if(Storage::disk('local')->exists('csvi/appeal/chat/' . $appeal->id . '/' . $request->get('file-name')))
                return response()->file($full_path);
            if(Storage::disk('local')->exists('csvi/appeal/chat/' . $appeal->id . '/' . mb_substr($request->get('file-name'), 20)))
                return response()->file($appeal->created_at->format('YmdHis_') . $full_path);

            return abort(404, 'File Not Found');
        }

        return abort(404);
    }

    public function store(Request $request, Appeal $appeal)
    {
        if ($request->has('file'))
            $this->uploadFiles($request, $appeal);
        else {
            $request->validate([
                'message' => ['required', 'string', 'max:5000']
            ]);

            $message = Message::create([
                'appeal_id' => $appeal->id,
                'sender_id' => user()->id,
                'message' => $request->message,
            ]);

            broadcast(new SendMessageEvent($message))->toOthers();
        }

        return $this->messages($appeal);
    }

    public function uploadFiles(Request $request, Appeal $appeal)
    {
        $request->validate(['file.*' => ['max:' . env('VITE_MAX_UPLOAD_FILE_SIZE')]]);

        $path = 'csvi/appeal/chat/' . $appeal->id;
        foreach ($request->file('file') as $file) {
            $timestamp = now()->format('YmdHis_');
            $file_name = $file->getClientOriginalName();
            $file->storeAs($path, $timestamp . $file_name);

            $message = Message::create([
                'appeal_id' => $appeal->id,
                'sender_id' => user()->id,
                'message' => $file_name,
                'is_file' => true,
                'is_image' => !Validator::make(['file' => $file], ['file' => 'image'])->fails(),
            ]);

            broadcast(new SendMessageEvent($message))->toOthers();
        }
    }
}
