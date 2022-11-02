<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">nuevo</a>
        </form>
    </div>
    
    <div>
        <table border='2'>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cargo</td>
                <td>Edad</td>
                <td>Telefono</td>
                <td>Metodos</td>
            </tr>
            <?php
                $cnx = mysqli_connect('localhost', 'root', '', 'trabajo');
                $sql = "SELECT id, nombre, apellido, cargo, edad, telefono FROM empleados order by id desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td><?php echo $mostrar['3'] ?></td>
                    <td><?php echo $mostrar['4'] ?></td>
                    <td><?php echo $mostrar['5'] ?></td>
                    <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar['0'] ?> &
                        nombre=<?php echo $mostrar['1'] ?> &
                        apellido=<?php echo $mostrar['2'] ?> &
                        cargo=<?php echo $mostrar['3'] ?> &
                        edad=<?php echo $mostrar['4'] ?> &
                        telefono=<?php echo $mostrar['5'] ?> &
                        ">Editar</a>
                        <a href="eliminar.php? id=<?php echo $mostrar['0']?>">Eliminar</a>
                    </td>
                </tr>
                <?php
                }
                ?>
        </table>
    </div>
</body>
</html>