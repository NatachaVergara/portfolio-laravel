<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Servicios extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $precios;
    public function __construct($precios)
    {
        //
        $this->precios = $precios;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.servicios');
    }
}
