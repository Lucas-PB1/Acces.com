<title>conteudo</title>
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

function listar(){

	global $mysqli;
	$consulta = "SELECT `id`, `Nome` FROM `paginas` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);


	while($dado = $conn -> fetch_array()){ 
		echo $dado['id'].$dado['Nome'];

	}
	mysqli_close($mysqli);
}

function add($nome,$url){

	global $mysqli;
	$consulta = "SELECT `id`, `Nome` FROM `paginas` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);


	while($dado = $conn -> fetch_array()){ 
		echo $dado['id'].$dado['Nome'];

	}
	mysqli_close($mysqli);
}


?>
