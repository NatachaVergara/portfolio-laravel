<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * The alert type.
     *
     *
     */


    /**
     * The alert message.
     *
     * @var string
     */
    public $precios;




    /**
     * Create the component instance.
     *
     *
     * @param  string  $message
     * @return void
     */
    public function __construct($precios, )
    {

        $this->precios = $precios;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
