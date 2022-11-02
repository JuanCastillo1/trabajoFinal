<?php
$id = $_GET['id'];

$cnx = mysqli_connect("localhost", "root", "", "trabajo");
$sql = "DELETE FROM empleados WHERE id like $id";
$rta = mysqli_query($cnx, $sql);

header("Location: index.php");

   

?>