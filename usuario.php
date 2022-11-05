<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio</title>
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
              <a class="nav-link" href="estadisticas.php">Estadisticas</a>
            </div>
          </div>
        </div>
      </nav>

      <?php
                $id = $_REQUEST['id'];
                $sql = "SELECT * from usuarios WHERE id=$id";
                $resultado = $conexion->query($sql);
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "
                        <img alt='' src='img/" . $row['foto'] . "' class='foto' display='inline-block' width='100%' height='auto%'>
                  ";
                    }
                }
                ?>

            </div>
            <div class="col-md-5 col-sm-12">
                <?php
                $sql = "SELECT * from usuarios WHERE id=$id";
                $resultado = $conexion->query($sql);
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<br>
                                <b>Nombre</b>: " . $row['nombres'] . "<br>
                                <b>Apellidos</b>: " . $row['apellidos'] . "<br>
                                <b>Fecha de nacimiento</b>:" . $row['fecha_nacimiento'] . "<br>
                                <b>Rut</b>:" . $row['rut'] . "<br>
                                <b>Nacionalidad</b>:" . $row['nacionalidad'] . "<br>
                                <b>Genero</b>:" . $row['genero'] . "<br>
                                <b>Ciudad de residencia</b>: " . $row['ciudad_residencia'] . "<br>
                                <br>";
                    }
                }
              ?>
              
            </div>
        </div>
        <?php
        $query = mysqli_query($conexion,"SELECT id, nombres, apellidos, fecha_nacimiento, rut, nacionalidad, genero, ciudad_residencia FROM usuarios");
        $data = mysqli_fetch_array($query);
        if($resultado->num_rows > 0){
        ?>
        <tr>
        <td><a href="crear_pdf.php?id=<?php echo $data["id"]?>&nombres=<?php echo $data["nombres"]?>&apellidos=<?php echo $data["apellidos"]?>&fecha_nacimiento=<?php echo $data["fecha_nacimiento"]?>&rut=<?php echo $data["rut"]?>&nacionalidad=<?php echo $data["nacionalidad"]?>&genero=<?php echo $data["genero"]?>&ciudad_residencia=<?php echo $data["ciudad_residencia"]?>    ">
        <button type='button' class='btn btn-sm btn-outline-secondary'>Crear PDF</button></a></td>
        </tr>
        <?php
        }
?>


      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Tecnología Multimedia - CIF 6558 - 06/11/2022  <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>
</html>