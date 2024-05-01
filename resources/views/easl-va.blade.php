<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EASL-VA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.plot.ly/plotly-2.29.1.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- Include D3.js library -->
{{--    <script src="https://d3js.org/d3.v7.min.js"></script>--}}
    @livewireStyles
    <style>
        body {
            background-image: url('{{ asset('background.svg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 400%;
        }

        svg {
            width: 100%;
            height: auto;
        }
    </style>
    <script>
        $( function() {
            $( ".draggable" ).draggable();
            $( ".resizable").resizable();
        } );
    </script>
</head>
<body>

<div class="z-0 h-screen w-screen flex">
    <livewire:easl-va.main.main />
</div>

<div class="z-1 absolute top-[50%] transform -translate-y-1/2">
    <livewire:easl-va.left-sidebar.left-sidebar />
</div>
<div id="formatting-panel" class="hidden z-2 draggable absolute left-[4%] top-[50%] transform -translate-y-1/2 ps-24">
    <livewire:easl-va.left-sidebar.formatting />
</div>

<div id="tool-panel" class="hidden z-2 draggable absolute left-[25%] top-[50%] transform -translate-y-1/2 ps-24">
    <livewire:easl-va.left-sidebar.tools />
</div>

{{--<livewire:easl-va.tools.barcode-panel />--}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@livewireScripts
<script>
    function openFloatingPanel(id) {
        var element = document.getElementById(id);
        if (element.classList.contains('hidden')) {
            element.classList.remove('hidden');
        }
    };
    function closeFloatingPanel(id) {
        var element = document.getElementById(id);
        if (!element.classList.contains('hidden')) {
            element.classList.add('hidden');
        }
    };
</script>
<script>
    // JavaScript
    document.addEventListener('click', function(e) {
        // Get all elements with an id that ends with '-window'
        console.log('clicked');
        console.log(e.target);
        let parents = document.querySelectorAll('.orderable');

        parents.forEach(function(parent) {
            if (parent.contains(e.target)) {
                // Remove 'z-[100000]' class from any elements that currently have it
                let currentTop = document.querySelector('.z-[100000]');
                if (currentTop) {
                    currentTop.classList.remove('z-[100000]');
                }

                // Add 'z-[100000]' class to the parent element
                parent.classList.add('z-[100000]');
            }
        });
    });
</script>
</body>
</html>