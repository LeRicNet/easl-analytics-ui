<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class easl-va-button extends Component
{
    public $title;
    public $id;
    public $icon_path;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $id, $icon_path)
    {
        $this->title = $title;
        $this->id = $id;
        $this->icon_path = $icon_path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.easl-va-button');
    }
}
