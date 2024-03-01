<div x-data="{ chart: null, chartData: @entangle('chartData') }" x-init="loadData" wire:ignore
     class="h-full w-3/4 border border-solid border-black bg-white">
<!--    Main Panel-->
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div id="main-panel" class="h-full w-full"></div>

    <script>
        function loadData() {

            this.chartData = @json($chartData)

            console.log(this.chartData);
            
            var trace = {
                mode: 'markers',
                type: 'scattergl', // Use 'scattergl' for improved performance with large datasets
                x: this.chartData.map(function(item) { return item.Dim1; }),
                y: this.chartData.map(function(item) { return item.Dim2; }),
                marker: {
                    color: this.chartData.map(function(item) { return item.color; }),
                    size: 8
                }
            };

            var layout = {
                title: 'Scatter Plot',
                xaxis: {
                    title: 'Dim1'
                },
                yaxis: {
                    title: 'Dim2'
                }
            };

            var data = [trace];

            this.chart = Plotly.newPlot('main-panel', data, layout);
        }

        document.addEventListener('update-main-view', function (e) {
            console.log('update-main-view triggered');
            console.log(e.data);
            Plotly.purge('main-panel');
            loadData();
        });

    </script>

</div>
