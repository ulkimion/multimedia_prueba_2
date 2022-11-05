--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>  
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
</body>
</html>