<?php

$conexion = mysqli_connect("localhost", 'root', '', 'trabajo')
or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $cargo = $_POST['cargo'];
  $edad = $_POST['edad'];
  $telefono = $_POST['telefono'];

  $consulta = "INSERT INTO empleados(nombre, apellido, cargo, edad, telefono)
  VALUES('$nombre','$apellido','$cargo','$edad','$telefono')";
  mysqli_query($conexion, $consulta);
}
header("location: index.php");

 ?>