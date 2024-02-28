<div class="h-full w-3/4 border border-solid border-black bg-white">
<!--    Main Panel-->
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div id="main-panel" class="h-full w-full"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var data = @json($data);

            var xValues = [];
            var yValues = [];
            var colValues = [];

            // Assuming each element of the array is an object with properties x and y
            for(var i=0; i < data.length; i++) {
                var obj = data[i];
                xValues.push(obj.UMAP1);
                yValues.push(obj.UMAP2);
                colValues.push(obj.color);
            }

            var trace1 = {
                x: xValues,
                y: yValues,
                mode: 'markers',
                type: 'scatter',
                marker: {
                    color: colValues
                }
            };

            var layout = {
                // title: "Scatter plot!",
                xaxis: {
                    title: {
                        text: 'UMAP 1',
                        font: {
                            family: 'Courier New, monospace',
                            size: 18,
                            color: '#7f7f7f'
                        }
                    }
                },
                yaxis: {
                    title: {
                        text: 'UMAP 2',
                        font: {
                            family: 'Courier New, monospace',
                            size: 18,
                            color: '#7f7f7f'
                        }
                    }
                }};

            var data = [trace1];

            Plotly.newPlot('main-panel', data, layout);
        });
    </script>
</div>
