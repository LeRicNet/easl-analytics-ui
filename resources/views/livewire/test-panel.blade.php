<div>
    {{-- Stop trying to control. --}}
    Inputs
    <div class="flex">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Input X</label>
            <input wire:model="x" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        </div>
        <button class="border border-black px-2 py-1 rounded" wire:click="updateData">Run</button>
        <div>Result: {{ $output }}</div>
        <div>X: {{ $x }}</div>
    </div>
</div>
