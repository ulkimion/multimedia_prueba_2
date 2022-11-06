<?php 

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$rut = $_POST["rut"];
$fecha_nacimiento = $_POST ["fecha_nacimiento"];
$nacionalidad = $_POST ["nacionalidad"];
$genero = $_POST ["genero"];
$ciudad_residencia = $_POST["ciudad_residencia"];

echo "$nombres $apellidos";
echo "<br>";
echo "$rut";
echo "<br>";
echo "$fecha_nacimiento";
echo "<br>";
echo "$nacionalidad";
echo "<br>";
echo "$genero";
echo "<br>";
echo "$ciudad_residencia";
echo "<br>";
                echo "Los registros se ingresaron con éxito";
            include "generarqr.php" 

?>