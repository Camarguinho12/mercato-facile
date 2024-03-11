<div id="chart_div" class="h-full w-full">
    <script>
        google.charts.load("current", { packages: ["corechart"] });
    
        google.charts.setOnLoadCallback(drawChart);
    
        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn("string", "Topping");
            data.addColumn("number", "numero annunci");
            data.addRows(@json($data));
    
            var options = {
                title: "I tuoi annunci pubblicati",
                titleTextStyle: {
                    fontSize: 18,
                    fontName: "Madimi One", 
                    color: "#333" 
                },
                legend: {
                    textStyle: {
                        fontSize: 14, 
                        fontName: "Madimi One", 
                        color: "#666" 
                    }
                },
                colors: ["#3366cc"] 
            };
    
            var chart = new google.visualization.ColumnChart(
                document.getElementById("chart_div")
            );
            chart.draw(data, options);
        }
    </script>
    
</div>
