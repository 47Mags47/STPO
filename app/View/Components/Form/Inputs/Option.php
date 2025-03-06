<?php

namespace App\View\Components\Form\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Option extends Component
{
    public $value;
    public $text;
    public string|null $title = null;

    public function __construct(
        public bool|null $selected = false,

        string|int $value,
        string $text,
    ) {
        $this->value = $value;
        $this->text = $text;

        if (mb_strlen($this->text) > 50) {
            $this->title = $this->text;
            $this->text = mb_substr($text, 0, 50) . '...';
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.form.inputs.option');
    }
}
