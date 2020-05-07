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

$id = $_REQUEST ['Id'];
$Nome = $_REQUEST ['Nome'];
$Email = $_REQUEST ['Email']; 
$Senha = $_REQUEST ['Senha'];

$consulta = "INSERT INTO `usuarios`(`id`, `Nome`, `Email`, `Senha`) VALUES ($id,\"$Nome\",\"$Email\",\"$Senha\")";
$conn = $mysqli -> query($consulta) or die ($mysqli->error);
header("location:?pg=login");

mysqli_close($mysqli);

/*
function TABLES(){
	global $mysqli;
	$consulta = "SHOW TABLES";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);

	while($dado = $conn -> fetch_array()){ 
		echo "<br>".$dado['Tables_in_lucas'];
	}
}*/

?>