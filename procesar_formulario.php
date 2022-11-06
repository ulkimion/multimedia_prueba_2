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

include "conn.php";
$sql="INSERT INTO usuarios(nombres, apellidos, nacionalidad, genero, ciudad_residencia, foto, fecha_nacimiento, rut) 
values('$nombres','$apellidos','$nacionalidad','$genero','$ciudad_residencia','1','$fecha_nacimiento','$rut')";
if($conexion->query($sql)===TRUE)
{
    echo "Los registros se ingresaron con éxito";
}
else
{
    echo "Error en el ingreso".$sql."<br>".$conexion->error;
}
$conexion->close();

            include "generarqr.php" 

?>