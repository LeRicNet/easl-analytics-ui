<?php

namespace App\Livewire\Voyagene\Sidebar;

use GuzzleHttp\Client;
use Livewire\Component;

class Panel extends Component
{
    public $view;
    public $color;
    public $gene;
    public $geneset;
    public $available_genes;

    public function mount()
    {
//        if (!isset($this->color)) {
//            $this->color = 'seurat_clusters';
//        }
        $this->getAvailableGenes();
        $this->gene = $this->available_genes[0];
    }

    public function getAvailableGenes()
    {
        $client = new Client();
        $response = $client->request(
            'POST',
            'http://140.226.123.129:8004/ocpu/library/voyageneR/R/getAvailableGenes/json',
            [
                'headers' => [
                    'Content-Type' => 'application/json',
                ]
            ]
        );
        $statusCode = $response->getStatusCode();
        $this->body = $response->getBody()->getContents();
        $this->available_genes = json_decode($this->body);
    }

    public function update()
    {
        if ($this->color != 'Gene') {
            $this->dispatch('update-main-view', color: $this->color);
        } else if ($this->color == 'Gene') {
            $this->dispatch('update-main-view', color: $this->gene);
        }
    }

    public function render()
    {
        return view('livewire.voyagene.sidebar.panel');
    }
}
