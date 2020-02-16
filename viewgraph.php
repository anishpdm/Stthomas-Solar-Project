<?php
include './navbar.php';

?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Panel Id', 'Value'],
          [ 8,      12],
          [ 4,      5.5],
          [ 11,     14],
          [ 4,      5],
          [ 3,      3.5],
          [ 6.5,    7]
        ]);

        var options = {
          title: 'Panel Id vs. Value',
          hAxis: {title: 'Panel Id', minValue: 0, maxValue: 15},
          vAxis: {title: 'Value', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>



<div class="container">
<div class="row">
<div class="col col-12 col-sm-2">

</div>
<div class="col col-12 col-sm-8">

<form action="" method="post">
<table class="table">

<tr>
    <td></td>
</tr>

<div id="chart_div" style="width: 900px; height: 500px;"></div>

</table>
</form>


</div>

<div class="col col-12 col-sm-2">

</div>
</div>
</div>


    
</body>
</html>