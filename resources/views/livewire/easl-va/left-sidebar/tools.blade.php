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
            Evaluation (DECIDE-AI)
        </div>
        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            Participants
        </div>
        <div class="flex grid grid-rows-1 grid-cols-2 gap-x-1 w-full items-center justify-between text-center font-medium text-slate-600">
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">Patient Overview</button> {{-- annotation heatmaps --}}
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">User Overview</button> {{-- annotation heatmaps --}}
        </div>

        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            Implementations
        </div>
        <div class="flex grid grid-rows-1 grid-cols-2 gap-x-1 w-full items-center justify-between text-center font-medium text-slate-600">
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">Session Overview</button> {{-- annotation heatmaps --}}
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">Survey: SNS</button> {{-- annotation heatmaps --}}
        </div>

        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            Modifications
        </div>
        <div class="flex grid grid-rows-1 grid-cols-2 gap-x-1 w-full items-center justify-between text-center font-medium text-slate-600">
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">AI Change Logs</button> {{-- annotation heatmaps --}}
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">UI Change Logs</button> {{-- annotation heatmaps --}}
        </div>

        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            Human-Computer Agreement
        </div>
        <div class="flex grid grid-rows-1 grid-cols-2 gap-x-1 w-full items-center justify-between text-center font-medium text-slate-600">
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">Cohen's Kappa</button> {{-- annotation heatmaps --}}
        </div>

        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            Safety and Errors
        </div>
        <div class="flex grid grid-rows-1 grid-cols-2 gap-x-1 w-full items-center justify-between text-center font-medium text-slate-600">
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">AI Errors</button> {{-- annotation heatmaps --}}
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">User Disagreement</button> {{-- annotation heatmaps --}}
        </div>

        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            Human Factors
        </div>
        <div class="flex grid grid-rows-1 grid-cols-2 gap-x-1 w-full items-center justify-between text-center font-medium text-slate-600 mb-1">
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">Usability</button> {{-- annotation heatmaps --}}
            <button class="border border-solid border-slate-500 rounded shadow h-[50px]">Learnability</button> {{-- annotation heatmaps --}}
        </div>
        {{--<div class="flex grid grid-rows-1 grid-cols-2 w-full items-start justify-start">
            <div> --}}{{-- Learnability --}}{{--
                SUS
            </div>
            <div> --}}{{-- Learnability --}}{{--
                learnability
--}}{{--                <livewire:easl-va.utils.button title="show software learnability" id="detail-plot-learnability" icon_path="assets/learnability-icon.svg" />--}}{{--
--}}{{--                <livewire:easl-va.utils.floating-window id="detail-plot-learnability" label="software learnability" type="learnability"/>--}}{{--
            </div>
        </div>--}}



{{--        <hr class="border-[#999999] border-t-1 mx-4">--}}
{{--        <div class="flex flex-row w-full justify-start px-2 pt-2--}}
{{--         text-xs text-[#999999] uppercase">--}}
{{--            select/filter/annotate--}}
{{--        </div>--}}

{{--        <hr class="border-[#999999] border-t-1 mx-4">--}}
{{--        <div class="flex flex-row w-full justify-start px-2 pt-2--}}
{{--         text-xs text-[#999999] uppercase">--}}
{{--            what-if analysis--}}
{{--        </div>--}}
        
</div>
</div>