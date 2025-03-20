<?php

namespace App\View\Components\Form\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Text extends Component
{
    public $name;
    public $type;

    public function __construct(
        public string|null $label       = null,
        public string|null $ph          = null,
        public string|null $mask        = null,
        public string|null $id          = null,
        public string|null $title       = null,
        public string|int|null $value   = null,
        public bool|null $req           = false,
        public bool|null $disabled      = false,

        string|null $name,
        string|null $type               = 'text',
    ) {
        $this->id = $id ?? $name;
        $this->name = $name;
        $this->type = $type;

        $this->value = getOld($name) ?? $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.form.inputs.text');
    }
}
