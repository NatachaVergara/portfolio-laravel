<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Edit_Precios extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $precio;

    public function __construct($precio)
    {
        $this->precio = $precio;
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.edit_precios');
    }
}
