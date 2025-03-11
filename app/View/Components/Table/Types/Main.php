<?php

namespace App\View\Components\Table\Types;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    public $thead;
    public $tbody;

    public string $dataUrl;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|null $dataRoute = null,
        public string|null $header = null,
        public array|null $colWidth = [],
    )
    {
        $this->dataUrl = $dataRoute !== null ? route($dataRoute) : url()->current();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.types.main');
    }
}
