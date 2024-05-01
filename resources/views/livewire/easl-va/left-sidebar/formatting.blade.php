<div style="background: linear-gradient(0deg, #999999 0%, #CCCCCC 100%)"
     class="LeftSidebar relative flex-col justify-center items-center
        space-y-4 ms-2 w-64
         inline-flex rounded-lg shadow-lg">
    <div class="h-[98%] w-[98%] bg-[#f2f2f2] rounded-lg px-1">
        <div class="flex flex-row w-full justify-between px-2 py-2">
            <div class="text-xl font-bold text-[#999999]">Formatting</div>
            <button class="text-lg font-light text-[#999999]"
                    onclick="closeFloatingPanel('formatting-panel')">Close</button>
        </div>
        <hr class="border-[#999999] border-t-1 mx-4">
        <div class="flex flex-row w-full justify-start px-2 pt-2
         text-xs text-[#999999] uppercase">
            plot settings
        </div>
        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            mode
        </div>
        <div class="flex flex-row w-full items-start justify-start">
            <div class="h-[34px] w-[34px] p-1">
{{--                {!! file_get_contents(public_path('assets/format-plot-mode.svg')) !!}--}}
                <svg id="plot-mode-svg" data-name="Layer 7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.16 34.16">
                    <defs>
                        <style>
                            .fmt-plot-mode {
                                fill: none;
                                stroke: gray;
                                stroke-miterlimit: 10;
                            }
                        </style>
                    </defs>
                    <circle class="fmt-plot-mode" cx="7.55" cy="7.55" r="7.55"/>
                    <circle class="fmt-plot-mode" cx="26.61" cy="26.61" r="7.55"/>
                    <circle class="fmt-plot-mode" cx="26.61" cy="7.55" r="7.55"/>
                    <line class="fmt-plot-mode" x1="13.5" y1="13.5" x2="20.65" y2="20.65"/>
                    <line class="fmt-plot-mode" x1="15.49" y1="6.75" x2="18.7" y2="6.75"/>
                    <line class="fmt-plot-mode" x1="27.41" y1="15.49" x2="27.41" y2="18.76"/>
                </svg>
            </div>
            <div>
                <select id="format-plot-mode" class="block appearance-none w-full bg-white
                border border-gray-200 text-gray-700 py-1 px-2 pr-8 rounded leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>Patient</option>
                    <option selected>MCA Bi-plot</option>
                    <option>Model</option>
                </select>
            </div>
        </div>

        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            axes
        </div>
        <div class="flex flex-row w-full items-start justify-start">
            <div class="h-[34px] w-[34px] p-1">
                <svg id="format-plot-axes" data-name="format-plot-axes" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.66 35.66">
                    <defs>
                        <style>
                            .fmt-plot-axes {
                                fill: none;
                                stroke: gray;
                                stroke-miterlimit: 10;
                                stroke-width: 3px;
                            }
                        </style>
                    </defs>
                    <polyline class="fmt-plot-axes" points="1.5 0 1.5 34.16 35.66 34.16"/>
                </svg>
            </div>
            <div class="flex flex-row w-full items-center">
                <span class="text-[#999999] font-medium pe-1">X</span>
                <select id="format-plot-x-axis" class="block appearance-none w-full bg-white
                border border-gray-200 text-gray-700 py-1 px-2 pr-8 rounded leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>Dim 1</option>
                    <option>time to decision</option>
                </select>
            </div>
            <div class="flex flex-row w-full items-center">
                <span class="text-[#999999] font-medium pe-1">Y</span>
                <select id="format-plot-y-axis" class="block appearance-none w-full bg-white
                border border-gray-200 text-gray-700 py-1 px-2 pr-8 rounded leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500">
                    <option>Dim 2</option>
                    <option>frequency</option>
                    <option>numeracy</option>
                </select>
            </div>
        </div>



        <hr class="border-[#999999] border-t-1 mx-4">
        <div class="flex flex-row w-full justify-start px-2 pt-2
         text-xs text-[#999999] uppercase">
            point appearance
        </div>
        <div class="flex flex-row w-full justify-start ps-[34px]
         text-[10px] text-[#999999] lowercase">
            fill
        </div>
        <div class="flex flex-row w-full items-start justify-start">
        <div class="h-[34px] w-[34px] p-1">
{{--            {!! file_get_contents(public_path('assets/format-fill.svg')) !!}--}}
            <?xml version="1.0" encoding="UTF-8"?>
            <svg id="Isolation_Mode" data-name="Isolation Mode" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.7 40.67">
                <defs>
                    <style>
                        .cls-1 {
                            fill: lime;
                        }

                        .cls-1, .cls-2, .cls-3, .cls-4, .cls-5, .cls-6, .cls-7, .cls-8, .cls-9 {
                            stroke: #4d4d4d;
                            stroke-miterlimit: 10;
                        }

                        .cls-2 {
                            fill: blue;
                        }

                        .cls-3 {
                            fill: #662d91;
                        }

                        .cls-4 {
                            fill: red;
                        }

                        .cls-5 {
                            fill: #ff0;
                        }

                        .cls-6 {
                            fill: #fff;
                        }

                        .cls-7 {
                            fill: #f15a24;
                        }

                        .cls-8 {
                            fill: #1b1464;
                        }

                        .cls-9 {
                            fill: none;
                        }
                    </style>
                </defs>
                <path class="cls-9" d="m8.55,20.67c.09,3.02,1.34,5.94,3.53,8.09"/>
                <path class="cls-9" d="m20.18,32.13c3.04.04,6.02-1.09,8.26-3.2"/>
                <path class="cls-9" d="m11.75,12.25c-.73.77-1.37,1.65-1.88,2.64-.96,1.85-1.38,3.84-1.32,5.78"/>
                <path class="cls-9" d="m28.44,28.93c.95-.89,1.77-1.94,2.4-3.16.85-1.63,1.27-3.38,1.32-5.1"/>
                <path class="cls-9" d="m20.18,8.52c-3.16.05-6.22,1.37-8.43,3.72"/>
                <path class="cls-9" d="m12.08,28.77c.82.8,1.76,1.5,2.83,2.05,1.69.88,3.49,1.29,5.26,1.32"/>
                <path class="cls-4" d="m20.18,8.52V.5c-5.27.05-10.38,2.2-14.1,6.06l5.68,5.68c2.21-2.35,5.27-3.67,8.43-3.72Z"/>
                <path class="cls-6" d="m20.18.5v8.02"/>
                <path class="cls-8" d="m37.97,29.47c1.46-2.82,2.17-5.83,2.22-8.8h-8.03c-.05,1.73-.47,3.47-1.32,5.1-.63,1.22-1.46,2.27-2.4,3.16l5.68,5.68c1.51-1.46,2.83-3.17,3.85-5.14Z"/>
                <path class="cls-3" d="m34.63,6.55l-5.71,5.65c2.17,2.29,3.32,5.35,3.23,8.47h8.03c.08-5.21-1.89-10.32-5.56-14.12Z"/>
                <path class="cls-5" d="m8.55,20.67H.51c.09,5.13,2.18,10.11,5.89,13.78l5.68-5.68c-2.2-2.15-3.44-5.07-3.53-8.09Z"/>
                <path class="cls-7" d="m9.87,14.89c.51-.99,1.15-1.87,1.88-2.64l-5.68-5.68c-1.29,1.34-2.43,2.88-3.33,4.62-1.58,3.04-2.29,6.29-2.23,9.48h8.04c-.06-1.95.36-3.93,1.32-5.78Z"/>
                <path class="cls-1" d="m14.91,30.82c-1.07-.55-2.01-1.25-2.83-2.05l-5.68,5.68c1.38,1.37,2.99,2.55,4.81,3.5,2.87,1.49,5.94,2.19,8.97,2.22v-8.03c-1.78-.03-3.58-.44-5.26-1.32Z"/>
                <path class="cls-2" d="m20.18,32.13v8.03c5.15.04,10.18-1.93,13.94-5.55l-5.68-5.68c-2.24,2.11-5.22,3.24-8.26,3.2Z"/>
            </svg>
        </div>
        <div>
            <select id="format-point-fill" class="block appearance-none w-full bg-white
                border border-gray-200 text-gray-700 py-1 px-2 pr-8 rounded leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500">
                <option>variable category</option>
                <option>safety</option>
                <option>workload</option>
            </select>
        </div>
    </div>
    <div class="flex flex-row w-full justify-start ps-[34px]
     text-[10px] text-[#999999] lowercase">
        size
    </div>
    <div class="flex flex-row w-full items-start justify-start">
        <div class="h-[34px] w-[34px] p-1">
{{--            {!! file_get_contents(public_path('assets/format-size.svg')) !!}--}}
            <svg id="fmt-pt-size-svg" data-name="fmt-pt-size-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.16 37.16">
                <defs>
                    <style>
                        .fmt-pt-size-1, .fmt-pt-size-2 {
                            fill: none;
                            stroke: gray;
                            stroke-miterlimit: 10;
                            stroke-width: 3px;
                        }

                        .fmt-pt-size-2 {
                            stroke-dasharray: 0 0 4.31 4.31;
                        }
                    </style>
                </defs>
                <rect class="fmt-pt-size-1" x="1.5" y="17.99" width="17.67" height="17.67"/>
                <g>
                    <polyline class="fmt-pt-size-1" points="35.66 3.5 35.66 1.5 33.66 1.5"/>
                    <line class="fmt-pt-size-2" x1="29.35" y1="1.5" x2="5.65" y2="1.5"/>
                    <polyline class="fmt-pt-size-1" points="3.5 1.5 1.5 1.5 1.5 3.5"/>
                    <line class="fmt-pt-size-2" x1="1.5" y1="7.81" x2="1.5" y2="31.5"/>
                    <polyline class="fmt-pt-size-1" points="1.5 33.66 1.5 35.66 3.5 35.66"/>
                    <line class="fmt-pt-size-2" x1="7.81" y1="35.66" x2="31.5" y2="35.66"/>
                    <polyline class="fmt-pt-size-1" points="33.66 35.66 35.66 35.66 35.66 33.66"/>
                    <line class="fmt-pt-size-2" x1="35.66" y1="29.35" x2="35.66" y2="5.65"/>
                </g>
            </svg>
        </div>
        <div>
            <select id="format-point-size" class="block appearance-none w-full bg-white
            border border-gray-200 text-gray-700 py-1 px-2 pr-8 rounded leading-tight
            focus:outline-none focus:bg-white focus:border-gray-500">
                <option>uniform</option>
                <option>cases reviewed</option>
            </select>
        </div>
    </div>
    <div class="flex flex-row w-full justify-start ps-[34px]
     text-[10px] text-[#999999] lowercase">
        shape
    </div>
    <div class="flex flex-row w-full items-start justify-start">
        <div class="h-[34px] w-[34px] p-1">
            <svg id="fmt-pt-shape-svg" data-name="fmt-pt-shape-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.6 34.16">
                <style>
                    .fmt-pt-shape {
                        fill: none;
                        stroke: gray;
                        stroke-miterlimit: 10;
                        stroke-width: 3px;
                    }
                </style>
                <rect class="fmt-pt-shape" x="9.27" width="16.21" height="16.21"/>
                <g>
                    <circle class="fmt-pt-shape" cx="8.11" cy="26.05" r="8.11"/>
                    <polygon class="fmt-pt-shape" points="24.24 17.95 33.6 17.95 28.92 26.05 24.24 34.16 19.56 26.05 14.88 17.95 24.24 17.95"/>
                </g>
            </svg>
        </div>
        <div>
            <select id="format-point-size" class="block appearance-none w-full bg-white
            border border-gray-200 text-gray-700 py-1 px-2 pr-8 rounded leading-tight
            focus:outline-none focus:bg-white focus:border-gray-500">
                <option>variable category</option>
                <option>cases reviewed</option>
            </select>
        </div>
    </div>
</div>
</div>