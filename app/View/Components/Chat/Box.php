<?php

namespace App\View\Components\Chat;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Box extends Component
{
    public function __construct(
        public array|Collection $messages,
        public string|null $fileRoute = null,
        public array $fileRouteParams = []
    ) {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.chat.box');
    }
}
