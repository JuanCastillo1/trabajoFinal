<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$cargo = $_GET['cargo'];
$edad = $_GET['edad'];
$telefono = $_GET['telefono'];
?>
    <div>
        <form action="speditar.php" method="post">
            <table border='2'>
                <tr>
                    <td>INGRESAR NUEVOS DATOS</td>
                    <td><input type="text" name="id" id=''style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name='nombre' id='' value="<?=$nombre?>"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name='apellido' id='' value="<?=$apellido?>"></td>
                </tr>
                <tr>
                    <td>Cargo</td>
                    <td><input type="text" name='cargo' id='' value="<?=$cargo?>"></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><input type="text" name='edad' id='' value="<?=$edad?>"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="text" name='telefono' id='' value="<?=$telefono?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value='Actualizar'></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
    
</body>
</html>