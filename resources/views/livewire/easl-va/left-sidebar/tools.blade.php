<div style="background: linear-gradient(0deg, #999999 0%, #CCCCCC 100%)"
     class="LeftSidebar relative flex-col justify-center items-center
        space-y-4 ms-2 w-64
         inline-flex rounded-lg shadow-lg">
    <div class="h-[98%] w-[98%] bg-[#f2f2f2] rounded-lg px-1">
        <div class="flex flex-row w-full justify-between px-2 py-2">
            <div class="text-xl font-bold text-[#999999]">Tools</div>
            <button class="text-lg font-light text-[#999999]"
                    onclick="closeFloatingPanel('tool-panel')">Close</button>
        </div>
        <hr class="border-[#999999] border-t-1 mx-4">
        <div class="flex flex-row w-full justify-start px-2 pt-2
         text-xs text-[#999999] uppercase">
            Detail Plots
        </div>
        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            session overview
        </div>
        <div class="flex grid grid-rows-1 grid-cols-4 w-full items-center justify-center">
            <div> {{-- Session Barcodes --}}
                <livewire:easl-va.utils.button title="show session barcodes" id="detail-plot-barcode" icon_path="assets/barcode-icon.svg" />
                <livewire:easl-va.utils.floating-window zIndex="100" id="detail-plot-barcode" label="session barcodes" type="barcodes"/>
            </div>
            <div> {{-- Learnability --}}
                <livewire:easl-va.utils.button title="show software learnability" id="detail-plot-learnability" icon_path="assets/learnability-icon.svg" />
                <livewire:easl-va.utils.floating-window id="detail-plot-learnability" label="software learnability" type="learnability"/>
            </div>
            <div></div> {{-- intentionally blank --}}
            <div></div> {{-- intentionally blank --}}
        </div>

        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            surveys
        </div>
        <div class="flex grid grid-rows-1 grid-cols-4 w-full items-center justify-center">
            <div>1</div> {{-- metadata --}}
            <div> {{-- SNS --}}
                <livewire:easl-va.utils.button title="show numeracy results" id="detail-plot-numeracy" icon_path="assets/sns-survey-icon.svg" />
                <livewire:easl-va.utils.floating-window zIndex="200" id="detail-plot-numeracy" label="participant numeracy" type="sns" />
            </div>
            <div>3</div> {{-- SUS --}}
            <div>4</div>
        </div>

        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            task analysis
        </div>
        <div class="flex grid grid-rows-1 grid-cols-4 w-full items-start justify-start">
            <button>1</button> {{-- annotation heatmaps --}}
            <button>2</button> {{-- selection heatmaps --}}
            <button>3</button> {{-- selection freq --}}
            <button>4</button> {{-- annotation agreemeent --}}
        </div>

        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            intervention analysis
        </div>
        <div class="flex grid grid-rows-2 grid-cols-4 w-full items-start justify-start">
            <button>1</button> {{-- annotation heatmaps --}}
            <button>2</button> {{-- selection heatmaps --}}
            <button>3</button> {{-- selection freq --}}
            <button>4</button> {{-- annotation agreemeent --}}
        </div>



        <hr class="border-[#999999] border-t-1 mx-4">
        <div class="flex flex-row w-full justify-start px-2 pt-2
         text-xs text-[#999999] uppercase">
            select/filter/annotate
        </div>

        <hr class="border-[#999999] border-t-1 mx-4">
        <div class="flex flex-row w-full justify-start px-2 pt-2
         text-xs text-[#999999] uppercase">
            what-if analysis
        </div>
        
</div>
</div>