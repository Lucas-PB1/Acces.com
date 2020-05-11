<title>login</title>
<?php
$NomeComp = $_REQUEST ['Nome']; 
$SenhaComP = $_REQUEST ['Senha'];

$Login = "SELECT * FROM `usuarios` WHERE Nome = \"$NomeComp\"";

$conn = $mysqli -> query($Login) or die ($mysqli->error);

while ($dado = $conn ->fetch_array()) {
	$login = $dado['Nome'];
	$senha = $dado['Senha'];
	$id = $dado['id'];
	
}


if($login!= null && $senha != null){
	if ($login == $NomeComp && $senha == $SenhaComP) {
		header("location:?pg=inicial");
	}else{
		header("location:../index.php");
	}
}else{
	header("location:../index.php");
}


mysqli_close($mysqli);

?>