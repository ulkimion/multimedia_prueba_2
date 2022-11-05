<?php
require 'phpqrcode/qrlib.php';

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];

$dir = 'temp/';

if(!file_exists ($dir))
    mkdir($dir);

$filename = $dir.'test.png';
 

$tamanio = 10;
$level = 'M';
$frameSize = 4;
$contenido = $nombre .' '. $apellido .''. $rut .''. $genero .''. $fecha de nacimiento .''. $nacionalidad .''. $ciudad de residencia;

QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

echo '<img src="'.$filename.'"/>';