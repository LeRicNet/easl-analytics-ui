<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class TestPanel extends Component
{
    public $x;
    public $body;
    public $output;

    public function updateData()
    {

        $client = new Client();
        $response = $client->request('POST', 'http://140.226.123.129:8004/ocpu/library/easlanalytics/R/test/json', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'x' => $this->x,
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $this->body = $response->getBody()->getContents();

        $this->output = json_decode($this->body)[0];
    }


    public function render()
    {
        $this->x = 0;
        return view('livewire.test-panel');
    }
}
