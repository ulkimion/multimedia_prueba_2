<?php
require 'phpqrcode/qrlib.php';

$dir = 'temp/';

if(!file_exists ($dir))
    mkdir($dir);

$filename = $dir.'test2.png';
 

$tamanio = 10;
$level = 'M';
$frameSize = 2;
$contenido = $nombres .' '. $apellidos .''. $rut .''. $genero .''. $fecha_nacimiento .''. $nacionalidad .''. $ciudad_residencia;


QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
echo '<img src="'.$filename.'"/>';