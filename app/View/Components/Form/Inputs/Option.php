<?php

namespace App\View\Components\Form\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Option extends Component
{
    public string|null $title = null;

    public function __construct(
        public bool|null $selected = false,

        public array|string|null $item  = null,
        public string|null $group       = null,

        public string|null $value       = null,
        public string|null $text        = null,
    ) {
        if (is_string($group) and mb_strlen($this->group) > 45) {
            $this->title = $this->group;
            $this->group = mb_substr($group, 0, 45) . '...';
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.form.inputs.option');
    }
}
