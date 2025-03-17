<?php

namespace App\View\Components\Chat;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Message extends Component
{
    public string $fileUrl = '';

    public function __construct(
        public Model $message,
        public string|null $fileRoute = null,
        public array|null $fileRouteParams = [],
        public bool|null $own = null,
    ) {

        if ($message->is_file) {
            $this->fileUrl = Route::has($fileRoute)
                ? route($fileRoute, array_merge($fileRouteParams, ['file-name' => $message->created_at->format('YmdHis_') . $message->message]))
                : '';
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.chat.message');
    }
}
