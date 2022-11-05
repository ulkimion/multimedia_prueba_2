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
              <a class="nav-link" href="#">Ingresar Persona</a>
              <a class="nav-link" href="listausuarios.php">Lista Personas</a>
              <a class="nav-link" href="estadisticas.html">Estadisticas</a>
            </div>
          </div>
        </div>
      </nav>


      <form action="">
            <table>
                <tr>
                    <td>NOMBRE</td>
                    <td> <input type="text" placeholder="ingresa tu nombre" name="nombre"></td>
                </tr>
                <tr>
                    <td>APELLIDO</td>
                    <td> <input type="text" placeholder="ingresa tu apellido" name="apellido"></td>
                </tr>
                <tr>
                    <td>RUT</td>
                    <td> <input type="text" placeholder="ingresa tu Rut" name="rut"></td>
                </tr>
                <tr>
                    <td>FECHA DE NACIMIENTO</td>
                    <td> <input type="text" placeholder="ingresa tu fecha de nacimiento" name="fecha de nacimiento"></td>
                </tr>
                <tr>
                    <td>NACIONALIDAD</td>
                    <td> 
                        <select name="nacionalidad">
                            <option value="">Chilena</option>
                            <option value="">Canadiense</option>
                            <option value="">Uruguaya</option>
                        </select>
                </td>
                </tr>
                <tr>
                    <td>GENERO</td>
                    <td> <input type="radio" name="genero"> FEMENINO
                         <input type="radio" name="genero"> MASCULINO
                         <input type="radio" name="genero"> OTRO
                </td>
                </tr>
                <tr>
                    <td>CIUDAD DE RESIDENCIA</td>
                    <td> <input type="text" placeholder="ingresa tu ciudad de residencia" name="residencia"></td>
                </tr>
                <tr>
                    <td>
                    <label for="foto">Foto:</label>
                    <input type="file" id="foto" name="foto">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit"  value="ENVIAR" name="enviar"> 
                    </td>
                </tr>
            </table>


      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Tecnología Multimedia - 2º Semestre 2022 <br>
            Benjamin Gonzalez Fredes <br>
            (Multi)

        </div>
      </footer>

</body>
</html>