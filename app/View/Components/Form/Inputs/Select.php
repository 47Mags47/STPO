<?php

namespace App\View\Components\Form\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

use function Laravel\Prompts\error;

class Select extends Component
{
    public function __construct(
        public string|null $label           = null,
        public string|null $id              = null,
        public string|null $title           = null,
        public string|int|null $select      = null,
        public bool|null $req               = false,
        public bool|null $disabled          = false,
        public bool|string|null $nullable   = false,

        public string $name,
        public array|Collection $items,
    ) {
        $this->id = $this->id ?? $this->name;
        $this->select = $this->select ?? getOld($this->name);
    }

    public function render(): View|Closure|string
    {
        return view('components.form.inputs.select');
    }
}
