<?php
include "conn.php";

$Chilena = mysqli_query($conexion, "select count(*) as cantidad from usuarios where nacionalidad='Chilena'") or
die("Problemas en el select:" . mysqli_error($conexion));
$chile = mysqli_fetch_array($Chilena);
//echo "chilenos :" . $chile['cantidad'];

$Uruguaya = mysqli_query($conexion, "select count(*) as cantidad from usuarios where nacionalidad='Uruguaya'") or
die("Problemas en el select:" . mysqli_error($conexion));
$uruguay = mysqli_fetch_array($Uruguaya);
//echo "<br>urugayos :" . $uruguay['cantidad'];

$Canadiense = mysqli_query($conexion, "select count(*) as cantidad from usuarios where nacionalidad='Canadiense'") or
die("Problemas en el select:" . mysqli_error($conexion));
$canada = mysqli_fetch_array($Canadiense);
//echo "<br>canadienses :" . $canada['cantidad'];

//para tabla de edades

$diez = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento between '#2022/11/06#' and '#2012/11/06#'") or
die("Problemas en el select:" . mysqli_error($conexion));
$x = mysqli_fetch_array($diez);
echo "<br>menores de 10 :" . $x['cantidad'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          
          ['Task', 'Hours per Day'],
          ['Gente Chilena',     <?php echo $chile['cantidad']?>],
          ['Gente Uruguaya',      <?php echo $uruguay['cantidad']?>],
          ['Gente Canadiense',  <?php echo $canada['cantidad']?>],

        ]);

        var options = {
          title: 'Nacionalidades'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark"">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
              <a class="nav-link" href="registro.php">Ingresar Persona</a>
              <a class="nav-link" href="listausuarios.php">Lista Personas</a>
              <a class="nav-link" href="#">Estadisticas</a>
            </div>
          </div>
        </div>
      </nav>


      <div id="piechart" style="width: 1500px; height: 900px;"></div>


      <div id="barchart_material" style="width: 1200px; height: 500px;"></div>


      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Tecnología Multimedia - CIF 6558 - 06/11/2022  <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>
</html>