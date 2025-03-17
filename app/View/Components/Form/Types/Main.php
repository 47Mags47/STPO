<?php

namespace App\View\Components\Form\Types;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Main extends Component
{
    public $action;
    public $header;
    public $sbm;

    public function __construct(
        public string|null $method,
        public string|null $enctype,
        public string|null $id,
        public bool|null $uploadFile,

        string|null $action = '',
        string|null $header = null,
        string|null $sbm = null,
    ) {
        $this->action = $action;
        $this->header = $header;
        $this->sbm = $sbm;

        $this->enctype = $enctype ?? ($uploadFile ? 'multipart/form-data' : 'application/x-www-form-urlencoded');
        $this->method = strtoupper($method ?? 'POST');
    }

    public function render(): View|Closure|string
    {

        return view('components.form.types.main');
    }
}
