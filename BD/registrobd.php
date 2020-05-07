<title>registro</title>
<?php

$host ="127.0.0.1";
$user = "root";
$Password = "";
$DB =  "lucas";

$mysqli = new mysqli($host, $user, $Password, $DB);

if (!$mysqli) {
	echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL."<br>";

$Nome = $_REQUEST ['Nome'];
$Email = $_REQUEST ['Email']; 
$Senha = $_REQUEST ['Senha'];

$consulta = "INSERT INTO `usuarios`(`Nome`, `Email`, `Senha`) VALUES (\"$Nome\",\"$Email\",\"$Senha\")";
$conn = $mysqli -> query($consulta) or die ($mysqli->error);
header("location:?pg=login");

mysqli_close($mysqli);

?>