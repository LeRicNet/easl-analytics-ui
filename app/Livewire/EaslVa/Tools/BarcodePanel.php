<?php

namespace App\Livewire\EaslVa\Tools;

use GuzzleHttp\Client;
use Livewire\Component;

class BarcodePanel extends Component
{
    public $hostname;
    public $url;
    public $svg;

    public function mount()
    {
        // opencpu api is exposed on :8004
        $this->hostname = getenv('APP_URL') . ':8004';
    }

    public function getPlot()
    {
        $this->url = $this->hostname . '/ocpu/library/easlanalytics/R/plotSessionBarcode/svg';
        $client = new Client();
        $response = $client->request(
            'POST',
            $this->url,
            [
                'headers' => [
                    'Content-Type' => 'image/svg+xml',
                ],
            ]
        );
        $statusCode = $response->getStatusCode();
        $this->svg = $response->getBody()->getContents();
    }

    public function render()
    {
        $this->getPlot();
        return view('livewire.easl-va.tools.barcode-panel');
    }
}
