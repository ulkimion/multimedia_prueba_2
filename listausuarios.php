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
              <a class="nav-link" href="registro.html">Ingresar Persona</a>
              <a class="nav-link" href="#">Lista Personas</a>
              <a class="nav-link" href="estadisticas.html">Estadisticas</a>
            </div>
          </div>
        </div>
      </nav>


      <div class="album py-5 bg-light">
        <div class="container">
            <div class="container">
                <div class="row">
                    <?php
                    $sql = "SELECT * from usuarios ORDER BY id DESC";
                    $resultado = $conexion->query($sql);
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "
                        <div class='col-md-4 col-sm-12'>
                            <div class='card mb-4 box-shadow'>
                                <img class='card-img-top' data-src='holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail' alt='Thumbnail [100%x225]' style='height: 225px; width: 100%; display: block;' src='img/" . $row['foto'] . "' data-holder-rendered='true'>
                                <div class='card-body' style='text-align: center;'>
                                    <p class='card-text'><b>" . $row['nombres'] . "</p>
                                    <p class='card-text'>Valor: $" . $row['apellidos'] . "</p>
                                    <div class='d-flex justify-content-between align-items-center'>
                                        <div class='btn-group'>
                                            <a href='accesoriosficha.php?id=" . $row['id'] . "'><button type='button' class='btn btn-sm btn-outline-secondary'>VER</button></a>
                                        </div>
                                        <div class='btn-group'>
                                        <a href='modificar_accesorio.php?id=" . $row['id'] . "'target='_self'><button type='button' class='btn btn-sm btn-outline-secondary'>Modificar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Tecnología Multimedia - 2º Semestre 2022 <br>
            Benjamin Gonzalez Fredes <br>
            (Multi)

        </div>
      </footer>

</body>
</html>