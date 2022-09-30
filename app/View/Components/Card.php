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
    public $titulo;
    public $precio;

    public $dominio;
    public $hosting;
    public $almacenamiento;
    public $telefono;


    /**
     * Create the component instance.
     *
     *
     * @param  string  $message
     * @return void
     */
    public function __construct($titulo, $precio, $dominio, $hosting, $almacenamiento, $telefono)
    {

        $this->titulo = $titulo;
        $this->precio = $precio;
        $this->dominio = $dominio;
        $this->hosting = $hosting;
        $this->almacenamiento = $almacenamiento;
        $this->telefono = $telefono;
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
