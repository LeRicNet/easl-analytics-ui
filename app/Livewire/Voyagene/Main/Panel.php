<?php

namespace App\Livewire\Voyagene\Main;

use GuzzleHttp\Client;
use Livewire\Component;
use Livewire\Attributes\On;

class Panel extends Component
{
//    public $x;
    public $body;
    public $output;
    public $color;

    public function mount()
    {
        if (!isset($this->color)) {
            $this->color = 'seurat_clusters';
        }
        $client = new Client();
        $response = $client->request(
            'POST',
            'http://140.226.123.129:8004/ocpu/library/voyageneR/R/plotDimReduction/json',
            [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'color_by' => $this->color,
            ],
        ]);
        $statusCode = $response->getStatusCode();
        $this->body = $response->getBody()->getContents();
        $this->output = json_decode($this->body);
    }

    #[On('update-main-view')]
    public function update($color)
    {
        $this->color = $color;
        $this->dispatch('$refresh');
    }

    public function render()
    {
        return view('livewire.voyagene.main.panel',
            ['data' => $this->output]);
    }
}
