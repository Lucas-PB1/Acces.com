<title>Adicionar usuários</title>
<?php
$Nome = $_REQUEST ['Nome'];
$Email = $_REQUEST ['Email']; 
$Senha = $_REQUEST ['Senha'];

$consulta = "INSERT INTO `usuarios`(`Nome`, `Email`, `Senha`) VALUES (\"$Nome\",\"$Email\",\"$Senha\")";
$conn = $mysqli -> query($consulta) or die ($mysqli->error);

header("location:?pg=modificar_usuarios");
mysqli_close($mysqli);
?>