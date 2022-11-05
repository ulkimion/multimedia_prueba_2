<?php 

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$rut = $_GET["rut"];
$fecha_nacimiento = $_GET ["fecha_nacimiento"];
$nacionalidad = $_GET ["nacionalidad"];
$genero = $_GET ["genero"];
$ciudad_residencia = $_GET["ciudad_residencia"];

echo "$nombre $apellido";
echo "$rut";
echo "$fecha_nacimiento";
echo "$nacionalidad";
echo "$genero";
echo "$ciudad_residencia";

