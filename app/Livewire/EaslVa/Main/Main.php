<?php

namespace App\Livewire\EaslVa\Main;

use Livewire\Component;

class Main extends Component
{
    public $hostname;
    public $url;
    public $color;

    public function mount()
    {
        // opencpu api is exposed on :8004
        $this->hostname = getenv('APP_URL') . ':8004';
    }

    public function getUserPlotUrl()
    {
        $this->url = $this->hostname . '/ocpu/library/easlanalytics/R/MCABiPlot/json';
        return $this->url;
    }

    public function render()
    {
        return view('livewire.easl-va.main.main');
    }
}
