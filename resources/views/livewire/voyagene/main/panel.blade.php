<div x-data="{ chart: null, chartData: @entangle('chartData') }" x-init="loadData" wire:ignore
     class="h-full w-3/4 border border-solid border-black bg-white">
<!--    Main Panel-->
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div id="main-panel" class="h-full w-full"></div>

    <script>
        function loadData() {
            this.color = @json($color);
            var url = 'http://140.226.123.129:8004/ocpu/library/voyageneR/R/plotDimReduction/json';
            var data = { color_by: this.color };

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json())
                .then(data => {
                    this.body = JSON.stringify(data);
                    this.output = JSON.parse(this.body);

                    // Assuming the output is the data for the chart
                    this.chartData = this.output;
                     var trace = {
                            mode: 'markers',
                            type: 'scattergl', // Use 'scattergl' for improved performance with large datasets
                            x: this.chartData.map(function(item) { return item.Dim1; }),
                            y: this.chartData.map(function(item) { return item.Dim2; }),
                            hovertext: this.chartData.map(function(item) { return item.category }),
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
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
        }

        function updateData(color) {
            this.color = color;
            console.log(this.color); // Equivalent to dump($this->color) in PHP

            var url = 'http://140.226.123.129:8004/ocpu/library/voyageneR/R/plotDimReduction/json';
            var data = { color_by: this.color };

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json())
                .then(data => {
                    this.body = JSON.stringify(data);
                    this.output = JSON.parse(this.body);

                    // Assuming the output is the data for the chart
                    this.chartData = this.output;
                    var trace = {
                        mode: 'markers',
                        type: 'scattergl', // Use 'scattergl' for improved performance with large datasets
                        x: this.chartData.map(function(item) { return item.Dim1; }),
                        y: this.chartData.map(function(item) { return item.Dim2; }),
                        hovertext: this.chartData.map(function(item) { return item.category }),
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
                    var chartDiv = document.getElementById('main-panel');
                    Plotly.purge(chartDiv);
                    this.chart = Plotly.newPlot('main-panel', data, layout);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }

        document.addEventListener('update-main-view', function (e) {
            updateData(e.detail.color);
        });
    </script>

</div>
