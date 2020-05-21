<title>Editar páginas</title>
<?php
$id = $_REQUEST['id'];
$Nome = $_REQUEST ['Nome'];
$Email = $_REQUEST ['Email'];
$Nova_Senha = $_REQUEST ['Senha'];

$consulta = "UPDATE `usuarios` SET `Nome`=\"$Nome\",`Email`=\"$Email\",`Senha`=\"$Nova_Senha\" WHERE id=\"$id\"";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
header("location:?pg=modificar_usuarios");
mysqli_close($mysqli);
?>