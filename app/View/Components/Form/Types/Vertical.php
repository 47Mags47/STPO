<?php

namespace App\View\Components\Form\Types;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Vertical extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool|null $hasShadow = true
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.types.vertical');
    }
}
