<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Portfolio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $proyectos;

    
    public function __construct($proyectos)
    {
        $this->proyectos = $proyectos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfolio');
    }
}
