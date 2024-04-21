<div class="h-full w-1/4 border border-solid border-black bg-gray-50">
{{--    Sidebar Panel--}}
    {{-- Be like water. --}}
    <div class="w-full text-center py-2 text-lg">Options</div>

    <form class="max-w-sm mx-auto">
        <label for="view-options" class="block mb-2 text-sm font-medium text-gray-900">Select a View</label>
        <select id="view-options" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option wire:model="view" value="UMAP" selected>UMAP</option>
            <option wire:model="view" value="PCA">PCA</option>
        </select>
    </form>

    <form class="max-w-sm mx-auto">
        <label for="color-options" class="block mb-2 text-sm font-medium text-gray-900">Color By</label>
        <select wire:model="color" wire:change="update()" id="color-options" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option value="celltypes" selected>Cell Type</option>
            <option value="seurat_clusters">Cluster</option>
            <option value="Gene">Gene</option>
            <option value="Gene Set">Gene Set</option>
        </select>
    </form>

    <div id="gene-form" @class([
            'hidden' => $this->color != 'Gene',
            'w-full'
         ])>
        <div class="mx-2">
            <label for="gene-options" class="block mb-2 text-sm font-medium text-gray-900">Select a gene...</label>
            <select wire:model="gene" wire:change="update()" id="gene-options" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @foreach($available_genes as $gene)
                    <option value="{{ $gene }}">{{ $gene }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div id="gene-form" @class([
    'hidden' => $this->color != 'Gene Set',
    'w-full'
    ])>
        <form class="max-w-sm mx-auto">
            <label for="available-genesets" class="block mb-2 text-sm font-medium text-gray-900">Select a Geneset</label>
            <select wire:model="geneset" id="available-genesets" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="new" selected>Add Geneset...</option>
            </select>
        </form>


        <div @class([
            'flex flex-col mt-2 px-4 mx-2 py-2 border border-slate-900 rounded-lg',
            'hidden' => (($this->color != 'Gene Set') & ($this->geneset != 'new')),
                            'w-full'
                        ])>
            <label for="geneset_title" class="mb-1 text-sm font-medium text-gray-900">Gene Set Title</label>
            <input id="geneset_title" type="text" class="px-3 py-2 mb-2 border rounded-md
            focus:outline-none focus:ring-2 focus:ring-blue-600"
                   placeholder="Enter gene set title">

            <label for="genes" class="mb-1 text-sm font-medium text-gray-900">Genes</label>
            <textarea id="genes" class="px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                      style="resize: none;"
                      rows="10" placeholder="Enter genes, one per line"></textarea>
            <div class="flex flex-row justify-end mt-2 me-2">
                <button class="border border-slate-900 rounded px-2 py-1">Calculate Enrichment</button>
            </div>

        </div>
    </div>

</div>
