<?php

namespace App\Livewire\EaslVa\Utils;

use Livewire\Component;

class Button extends Component
{
    public $title;
    public $id;
    public $icon_path;
    /**
     * Create a new component instance.
     */
    public function mount($title, $id, $icon_path)
    {
        $this->title = $title;
        $this->id = $id;
        $this->icon_path = $icon_path;
    }
    public function render()
    {
        return view('livewire.easl-va.utils.button');
    }
}
