<?php
require 'phpqrcode/qrlib.php';

$dir = 'temp/';

if(!file_exists ($dir))
    mkdir($dir);

$filename = $dir.'test2.png';
 

$tamanio = 10;
$level = 'H';
$frameSize = 2;
$contenido = $nombres .' '. $apellidos;
/*$contenido = $nombres .' '. $apellidos .''. $rut .''. $genero .''. $fecha_nacimiento .''. $nacionalidad .''. $ciudad_residencia;*/
echo $contenido;


//QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
QRcode::png("testeo", "temp/test2.png", "H", 4,2);
echo '<img src="'.$filename.'"/>';