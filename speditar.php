<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cargo = $_POST['cargo'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];

$cnx = mysqli_connect("localhost", "root", "", "trabajo");
$sql = "UPDATE empleados set nombre='$nombre',apellido='$apellido',
cargo='$cargo',edad='$edad',telefono='$telefono' WHERE id like $id";
$rta = mysqli_query($cnx, $sql);

header("Location: index.php");

   

?>
