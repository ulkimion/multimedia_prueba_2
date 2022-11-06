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

$diez = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '2022/11/06' and fecha_nacimiento > '2012/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$x = mysqli_fetch_array($diez);
//echo "<br>menores de 10 :" . $x['cantidad'];

$veinte = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '2012/11/06' and fecha_nacimiento > '2002/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$xx = mysqli_fetch_array($veinte);
//echo "<br>rango 20:" . $xx['cantidad'];

$treinta = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '2002/11/06' and fecha_nacimiento > '1992/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$xxx = mysqli_fetch_array($treinta);
//echo "<br>rango 30:" . $xxx['cantidad'];

$cuarenta = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '1992/11/06' and fecha_nacimiento > '1982/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$xl = mysqli_fetch_array($cuarenta);
//echo "<br>rango 40:" . $xl['cantidad'];

$cincuenta = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '1982/11/06' and fecha_nacimiento > '1972/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$l = mysqli_fetch_array($cincuenta);
//echo "<br>rango 50:" . $l['cantidad'];

$sesenta = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '1972/11/06' and fecha_nacimiento > '1962/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$lx = mysqli_fetch_array($sesenta);
//echo "<br>rango 60:" . $lx['cantidad'];

$setenta = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '1962/11/06' and fecha_nacimiento > '1952/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$lxx = mysqli_fetch_array($setenta);
//echo "<br>rango 70:" . $lxx['cantidad'];

$ochenta = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '1952/11/06' and fecha_nacimiento > '1942/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$lxxx = mysqli_fetch_array($ochenta);
//echo "<br>rango 80:" . $lxxx['cantidad'];

$noventa = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '1942/11/06' and fecha_nacimiento > '1932/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$xc = mysqli_fetch_array($noventa);
//echo "<br>rango 90:" . $xc['cantidad'];

$cien = mysqli_query($conexion, "select count(*) as cantidad from usuarios where fecha_nacimiento < '1942/11/06' and fecha_nacimiento > '1932/11/06'") or
die("Problemas en el select:" . mysqli_error($conexion));
$c = mysqli_fetch_array($cien);
//echo "<br>rango 100 plus:" . $c['cantidad'];

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
          
          ['Pais', 'Cantidad'],
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

    <script>
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Edades', 'Cantidad de gente',],
        ['Menores de 10', <?php echo $x['cantidad']?>],
        ['10-20', <?php echo $xx['cantidad']?>],
        ['20-30', <?php echo $xxx['cantidad']?>],
        ['30-40', <?php echo $xl['cantidad']?>],
        ['40-50', <?php echo $l['cantidad']?>],
        ['50-60', <?php echo $lx['cantidad']?>],
        ['60-70', <?php echo $lxx['cantidad']?>],
        ['80-90', <?php echo $xc['cantidad']?>],
        ['Mayores de 90', <?php echo $c['cantidad']?>],
      ]);

      var options = {
        title: 'Population of Largest U.S. Cities',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Total Population',
          minValue: 0
        },
        vAxis: {
          title: 'City'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
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


      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div"></div>


      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Tecnología Multimedia - CIF 6558 - 06/11/2022  <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>
</html>