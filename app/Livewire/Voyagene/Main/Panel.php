<?php

namespace App\Livewire\Voyagene\Main;

use GuzzleHttp\Client;
use Livewire\Component;

class Panel extends Component
{
//    public $x;
    public $body;
    public $output;

    public function mount()
    {
        $client = new Client();
        $response = $client->request(
            'POST',
            'http://140.226.123.129:8004/ocpu/library/voyageneR/R/plotDimReduction/json',
            [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => [
//                'x' => $this->x,
            ],
        ]);
        $statusCode = $response->getStatusCode();
        $this->body = $response->getBody()->getContents();
        $this->output = json_decode($this->body);
    }

    public function render()
    {
        return view('livewire.voyagene.main.panel',
            ['data' => $this->output]);
    }
}
