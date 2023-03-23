<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    public $title;
    public $link;
    public $selected;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $link, $selected, $icon)
    {
        $this->title = $title;
        $this->link = $link;
        $this->selected = $selected;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation');
    }
}
