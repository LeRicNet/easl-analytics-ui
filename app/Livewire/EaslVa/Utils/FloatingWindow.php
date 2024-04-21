<?php

namespace App\Livewire\EaslVa\Utils;

use GuzzleHttp\Client;
use Livewire\Component;

class FloatingWindow extends Component
{
    public $zIndex;
    public $id;
    public $label;
    public $svg;
    public $hostname;
    public $type;

    public function mount($label, $id, $zIndex = 1)
    {
        $this->label = $label;
        $this->id = $id;
        $this->zIndex = $zIndex;
        // opencpu api is exposed on :8004
        $this->hostname = getenv('APP_URL') . ':8004';
    }

    public function callSVGPlot()
    {
        $this->url = $this->hostname . '/ocpu/library/easlanalytics/R/SVGPlot/svg';
        $client = new Client();
        $response = $client->request(
            'POST',
            $this->url,
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'type' => (string)$this->type,
                ],
            ]
        );
        $statusCode = $response->getStatusCode();
        $this->svg = $response->getBody()->getContents();
        $this->svg = str_replace("surface1","surface-" . $this->id, $this->svg);
        $this->svg = str_replace("clip",$this->id . "-clip", $this->svg);
        $this->svg = str_replace("glyph",$this->id . "-glyph", $this->svg);
    }

    public function render()
    {
        $this->callSVGPlot();
        return view('livewire.easl-va.utils.floating-window');
    }
}
