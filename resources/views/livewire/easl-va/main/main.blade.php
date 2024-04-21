<div x-init="loadData" wire:ignore
     class="h-full w-full border border-solid border-black bg-white bg-opacity-0">
    <!--    Main Panel-->
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div id="main-panel" class="h-full w-full"></div>

    <script>
        function loadData() {
            this.color = @json($color);
            var url =  '{{ $this->getUserPlotUrl() }}';
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
                        title: 'Users',
                        xaxis: {
                            title: 'Dim1'
                        },
                        yaxis: {
                            title: 'Dim2'
                        },
                        autosize: true, // This line will make the plot resize with the screen
                        paper_bgcolor: 'rgba(0,0,0,0)', // This line will make the background transparent
                        plot_bgcolor: 'rgba(0,0,0,0)' // This line will make the plot area background transparent
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

        // document.addEventListener('update-main-view', function (e) {
        //     updateData(e.detail.color);
        // });
        //
        // document.getElementById('toggle-button').addEventListener('click', function() {
        //     const collapsibleDiv = document.getElementById('collapsible-div');
        //     if (collapsibleDiv.classList.contains('max-h-0')) {
        //         collapsibleDiv.classList.remove('max-h-0');
        //         collapsibleDiv.classList.add('max-h-content');
        //     } else {
        //         collapsibleDiv.classList.remove('max-h-content');
        //         collapsibleDiv.classList.add('max-h-0');
        //     }
        // });
    </script>

</div>