<div id="{{ $id }}" class="hidden z-[{{ $zIndex }}] draggable resizable absolute left-[4%] top-[50%]">
    <div style="background: linear-gradient(0deg, #999999 0%, #CCCCCC 100%)"
         class="relative flex flex-col justify-center items-center
        space-y-4 ms-2
         inline-flex rounded-lg shadow-lg">
        <div class="p-2">
            {{-- In work, do what you enjoy. --}}
            <div class="flex flex-row w-full justify-between pb-2">
                <div class="ps-2 uppercase">{{ $label }}</div>
                <div class="px-2 uppercase">
                    <button>options</button>
                    <button onClick="closeFloatingPanel('{{ $id }}')">close</button>
                </div>
            </div>
            <div id="{{ $id }}-display">
                {!! $svg !!}
            </div>
        </div>
    </div>
</div>
