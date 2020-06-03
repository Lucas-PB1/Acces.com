<title>Excluir páginas</title>
<?php
$id = $_REQUEST['id'];
$consulta = "SELECT * FROM `usuarios` WHERE id ='$id'";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);

$consulta ="DELETE FROM `usuarios` WHERE id = $id";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
header("location:?pg=modificar_usuarios");
mysqli_close($mysqli);
?>