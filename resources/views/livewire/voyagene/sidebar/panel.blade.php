<div class="h-full w-1/4 border border-solid border-black bg-gray-50">
{{--    Sidebar Panel--}}
    {{-- Be like water. --}}
    <div class="w-full flex align-content-center py-2 text-lg">Options</div>

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
        <select id="color-options" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option wire:model="color" value="CellType" selected>Cell Type</option>
            <option wire:model="color" value="Cluster">Cluster</option>
            <option wire:model="color" value="Gene">Gene</option>
            <option wire:model="color" value="Gene Set">Gene Set</option>
        </select>
    </form>

</div>
