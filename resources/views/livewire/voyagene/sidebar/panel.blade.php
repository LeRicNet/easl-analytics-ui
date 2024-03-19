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

    <div id="gene-form" class="hidden">
        select a gene...
    </div>

    <script>
        document.getElementById('color-options').addEventListener('change', function(e) {
            // this.value = e.target._x_bindings.value;
            // console.log(this.value);
            // var geneForm = document.getElementById('gene-form');
            // if (this.value === 'Gene') {
            //     geneForm.classList.remove('hidden');
            // } else {
            //     geneForm.classList.add('hidden');
            // }
        });
    </script>

</div>
