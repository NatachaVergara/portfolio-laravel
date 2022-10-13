<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class inicio_card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $color;
    public $icon;
    public $link;


    public function __construct($color, $icon, $link)
    {
        $this->color = $color;
        $this->icon = $icon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.inicio_card');
    }
}
