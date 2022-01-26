
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);
      
      google.charts.setOnLoadCallback(inscriptionChart);
      	
      google.charts.setOnLoadCallback(InscriptionsEvolutionChart);
      
      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
        	
          ['Homme', {{ $infosH ->count() }}],
          ['Femme', {{ $infosF ->count() }}],
          
        ]);

        var piechart_options = {title:"Graphique à secteurs du nombre d'homme et de femmes inscrits",
                       width:327,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

      }
      
        function inscriptionChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
        	
          ['Homme',{{ $infoInscrits->count() }}],
          ['Femme', {{ $infotrajet->count() }}],
          
        ]);

        var piechart_options = {title:'Graphique à secteurs du nombre d\'inscrits et de trajets disponibles',
                       width:325,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('inscription_div'));
        piechart.draw(data, piechart_options);

      }
      
        function InscriptionsEvolutionChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          @foreach($infoInscrits as $infoInscrits)
          ['{{$infoInscrits->created_at}}' , {{$infoInscrits->id}}],
          @endforeach
          
        ]);

        var options = {
          title: 'Evolution des inscriptions',
          width:325,
          height:300,
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('InscriptionsEvolutionChart_div'));
        chart.draw(data, options);
      }
    </script>
 
   <div class="shadow">
    <table class="table mb-0">
      <tr>
        <td style="width: 300px"><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
        <td style="width: 300px" ><div id="inscription_div" style="border: 1px solid #ccc"></div></td>
        <td style="width: 300px"><div id="contactSys" style="border: 1px solid #ccc"></div></td>
        <td style="width: 300px"><div id="InscriptionsEvolutionChart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
    </table>
   
   </div>
  </body>
</html>
