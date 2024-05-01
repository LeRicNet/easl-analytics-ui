<div x-init="loadData" wire:ignore
     class="h-full w-full border border-solid border-black bg-white bg-opacity-0">
    <!--    Main Panel-->
    <div id="main-panel" class="h-full w-full"></div>

    <script>

        function generateTraces(chartData) {
            // Organize data by unique trace values
            const dataByTrace = {};
            chartData.forEach(item => {
                if (!dataByTrace[item.name]) {
                    dataByTrace[item.name] = [];
                }
                dataByTrace[item.name].push(item);
            });

            // Generate a trace for each unique trace value
            const traces = Object.keys(dataByTrace).map(traceKey => {
                const data = dataByTrace[traceKey];
                return {
                    mode: 'markers',
                    type: 'scattergl', // Use 'scattergl' for large datasets
                    x: data.map(item => item.Dim1),
                    y: data.map(item => item.Dim2),
                    hovertext: data.map(item => item.name),
                    name: traceKey, // assuming traceKey is what you want to name the trace
                    marker: {
                        color: data.map(item => item.color),
                        size: data.map(item => item.size),
                        symbol: data.map(item => item.symbol)
                    }
                };
            });

            return traces;
        }


        function loadData() {
            this.color = @json($color);
            var url =  '{{ $this->getUserPlotUrl() }}';
            // var data = { color_by: this.color };
            var data = {};

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
                    // var trace = {
                    //     mode: 'markers',
                    //     type: 'scattergl', // Use 'scattergl' for improved performance with large datasets
                    //     x: this.chartData.map(function(item) { return item.Dim1; }),
                    //     y: this.chartData.map(function(item) { return item.Dim2; }),
                    //     hovertext: this.chartData.map(function(item) { return item.name }),
                    //     name: this.chartData.map(function(item) { return item.name }),
                    //     marker: {
                    //         color: this.chartData.map(function(item) { return item.color; }),
                    //         size: this.chartData.map(function(item) { return item.size; }),
                    //         symbol: this.chartData.map(function(item) { return item.symbol; })
                    //         // name: this.chartData.map(function(item) { return item.name })
                    //     }
                    // };
                    var data = generateTraces(this.chartData);

                    var layout = {
                        title: 'MCA Bi-plot',
                        showlegend: true,
                        xaxis: {
                            title: 'Dim1',
                            titlefont: {
                                size: 18
                            },
                            zerolinecolor: 'rgba(127,127,127,0.25)',
                            zerolinewidth: 4
                        },
                        yaxis: {
                            title: 'Dim2',
                            titlefont: {
                                size: 18
                            },
                            zerolinecolor: 'rgba(127,127,127,0.25)',
                            zerolinewidth: 4,
                            side: 'right'
                        },
                        legend: {
                            x: 0,  // Position the legend on the x-axis at the far left
                            y: 1,  // Position the legend on the y-axis at the very top
                            orientation: 'v',  // Vertical orientation of legend items
                            bgcolor: 'rgba(255,255,255,0.5)',  // Semi-transparent white background
                            bordercolor: '#888',  // Grey border for the legend
                            borderwidth: 1
                        },
                        autosize: true, // This line will make the plot resize with the screen
                        paper_bgcolor: 'rgba(0,0,0,0)', // This line will make the background transparent
                        plot_bgcolor: 'rgba(0,0,0,0)' // This line will make the plot area background transparent
                    };

                    let config = {
                        // displayModeBar: false
                    };

                    // var data = [trace];

                    this.chart = Plotly.newPlot('main-panel', data, layout, config);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }

        function updateData(color) {
            this.color = color;
            var url = '{{ $this->getUserPlotUrl() }}';
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
                        title: this.color,
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
    </script>

</div>