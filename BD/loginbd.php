<title>login</title>
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

$NomeComp = $_REQUEST ['Nome']; 
$SenhaComP = $_REQUEST ['Senha'];

$NomeTeste = "SELECT * FROM `usuarios` WHERE Nome = \"$NomeComp\"";
$SenhaTeste = "SELECT * FROM `usuarios` WHERE Senha = \"$SenhaComP\"";

$conn = $mysqli -> query($NomeTeste) or die ($mysqli->error);
$conn2 = $mysqli -> query($SenhaTeste) or die ($mysqli->error);

while ($dado = $conn ->fetch_array()) {
	$login = $dado['Nome'];
}

while ($dado = $conn2 ->fetch_array()) {
	$senha = $dado['Senha'];
	
}
if($login!= null && $senha != null){
	if ($login == $NomeComp && $senha == $SenhaComP) {
		header("location:?pg=inicial");
	}else{
		header("location:?pg=login");
	}

}else{
	header("location:?pg=login");
}

mysqli_close($mysqli);

?>