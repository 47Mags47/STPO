<?php

namespace App\View\Components\Form\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Area extends Component
{
    public $name;

    public function __construct(
        public string|null $label       = null,
        public string|null $ph          = null,
        public string|null $mask        = null,
        public string|null $id          = null,
        public string|null $title       = null,
        public string|null $height      = null,
        public string|int|null $value   = null,
        public bool|null $req           = false,
        public bool|null $disabled      = false,


        string|null $name,
    ) {
        $this->id = $id ?? $name;
        $this->name = $name;

        $this->value = $value ?? getOld($name);
    }

    public function render(): View|Closure|string
    {
        return view('components.form.inputs.area');
    }
}
