<?php 

$nombre = $POST["nombre"];
$apellido = $POST["apellido"];
$rut = $POST["rut"];
$fecha_nacimiento = $POST ["fecha_nacimiento"];
$nacionalidad = $POST ["nacionalidad"];
$genero = $POST ["genero"];
$ciudad_residencia = $POST["ciudad_residencia"];

echo "$nombre $apellido";
echo "$rut";
echo "$fecha_nacimiento";
echo "$nacionalidad";
echo "$genero";
echo "$ciudad_residencia";

?>