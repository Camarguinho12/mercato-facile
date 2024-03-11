<div class="h-full">
    <h1 class="text-center text-4xl zoom-in my-8 fade-top">Le tue statistiche</h1>
    <div id="chart_div"></div>
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
                colors: ['#13c1ac'],
                hAxis: {
                textStyle: {
                    fontSize: 12, // Dimensione del font delle etichette
                    fontName: "Madimi One", // Nome del font delle etichette
                    color: "#666" // Colore delle etichette
                }
            },
            backgroundColor: 'rgb(249,250,251)' 
            };
    
            var chart = new google.visualization.ColumnChart(
                document.getElementById("chart_div")
            );
            chart.draw(data, options);
        }
    </script>
    
</div>
