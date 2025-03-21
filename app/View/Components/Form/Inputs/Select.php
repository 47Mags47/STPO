<?php

namespace App\View\Components\Form\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

use function Laravel\Prompts\error;

class Select extends Component
{
    public $name;
    public $items;
    public $optValue;
    public $optText;

    public function __construct(
        public string|null $label           = null,
        public string|null $id              = null,
        public string|null $title           = null,
        public string|int|null $select      = null,
        public bool|null $req               = false,
        public bool|null $disabled          = false,
        public bool|string|null $nullable   = false,

        public string|null $childParam      = null,
        public string|null $childText       = null,
        public string|null $childValue      = null,

        string|null $name,
        array|Collection $items,
        string|int|null $optValue,
        string|int|null $optText,
    ) {
        $this->id = $id ?? $name;
        $this->name = $name;
        $this->items = $items;

        $this->optValue = $optValue;
        $this->optText = $optText;

        $this->select = $select ?? getOld($name);
    }

    public function render(): View|Closure|string
    {
        /* HACK Добавить проверку на заполнение */
        return view('components.form.inputs.select');
    }
}
