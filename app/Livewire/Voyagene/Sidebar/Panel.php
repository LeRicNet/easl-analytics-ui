<?php

namespace App\Livewire\Voyagene\Sidebar;

use Livewire\Component;

class Panel extends Component
{
    public $view;
    public $color;

    public function update()
    {
        $this->dispatch('update-main-view', color: $this->color);
    }

    public function render()
    {
        return view('livewire.voyagene.sidebar.panel');
    }
}
