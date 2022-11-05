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
              <a class="nav-link" href="#">Lista Personas</a>
              <a class="nav-link" href="estadisticas.php">Estadisticas</a>
            </div>
          </div>
        </div>
      </nav>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Rut</th>
            <th scope="col">Perfil</th>
            <th scope="col">PDF</th>
            </tr>
    </thead>

<?php 

    $query = mysqli_query($conexion,"SELECT id, nombres, apellidos, fecha_nacimiento, rut, nacionalidad, genero, ciudad_residencia FROM usuarios");
    
    $result = mysqli_num_rows($query);
    if($result > 0){

        while ($data = mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $data["id"]; ?></td>
        <td><?php echo $data["nombres"]; ?></td>
        <td><?php echo $data["apellidos"]; ?></td>
        <td><?php echo $data["rut"]; ?></td>
        <td><a href="usuario.php?id=<?php echo $data["id"]?>"><button type='button' 
        class='btn btn-danger btn-outline-secondary'>Perfil</button></a></td>
        <td><a href="crear_pdf.php?id=<?php echo $data["id"]?>&nombres=<?php echo $data["nombres"]?>&apellidos=<?php echo $data["apellidos"]?>&fecha_nacimiento=<?php echo $data["fecha_nacimiento"]?>&rut=<?php echo $data["rut"]?>&nacionalidad=<?php echo $data["nacionalidad"]?>&genero=<?php echo $data["genero"]?>&ciudad_residencia=<?php echo $data["ciudad_residencia"]?>">
        <button type='button' class='btn btn-info btn-outline-secondary'>Crear PDF</button></a></td>
    </tr>
<?php
        }
    }
?>


</table>
      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Tecnología Multimedia - CIF 6558 - 06/11/2022 <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>
</html>