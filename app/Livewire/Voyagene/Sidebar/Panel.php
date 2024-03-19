<?php

namespace App\Livewire\Voyagene\Sidebar;

use Livewire\Component;

class Panel extends Component
{
    public $view;
    public $color;

    public function mount ()
    {
//        if (!isset($this->color)) {
//            $this->color = 'seurat_clusters';
//        }
    }

    public function update()
    {
        if ($this->color != 'Gene') {
            $this->dispatch('update-main-view', color: $this->color);
        }
    }

    public function render()
    {
        return view('livewire.voyagene.sidebar.panel');
    }
}
