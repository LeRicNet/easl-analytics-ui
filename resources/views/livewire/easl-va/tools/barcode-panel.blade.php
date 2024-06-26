<div id="detail-plot-barcode1" class="hidden z-2 draggable ui-widget-content absolute left-[4%] top-[50%]">
    <div style="background: linear-gradient(0deg, #999999 0%, #CCCCCC 100%)"
         class="LeftSidebar relative flex flex-col justify-center items-center
        space-y-4 ms-2
         inline-flex rounded-lg shadow-lg">
        <div class="p-2">
            {{-- In work, do what you enjoy. --}}
            <div class="flex flex-row w-full justify-between pb-2">
                <div class="ps-2 uppercase">barcode panel</div>
                <div class="px-2 uppercase">
                    <button>options</button>
                    <button onClick="closeFloatingPanel('detail-plot-barcode')">close</button>
                </div>
            </div>
            <div id="barcode-display">
                {!! $svg !!}
            </div>
        </div>
    </div>
</div>
