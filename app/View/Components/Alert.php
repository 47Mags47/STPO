<?php

namespace App\View\Components;

use App\Models\Main\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public function __construct(
        public string $message,

        public User|null $sender = null,
        public string|null $link = null
    )
    {}

    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
