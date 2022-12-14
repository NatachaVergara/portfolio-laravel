<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Skills extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $skills;
     
    public function __construct($skills)
    {
        //
        $this->skills = $skills;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.skills');
    }
}