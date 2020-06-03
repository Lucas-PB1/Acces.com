<title>login</title>
<?php
$NomeComp = $_REQUEST ['Nome']; 
$SenhaComP = $_REQUEST ['Senha'];
$data = date("Y/m/d");

$Login = "SELECT * FROM `usuarios` WHERE Nome = \"$NomeComp\"";

$conn = $mysqli -> query($Login) or die ($mysqli->error);

while ($dado = $conn ->fetch_array()) {
	$login = $dado['Nome'];
	$senha = $dado['Senha'];
	$id = $dado['id'];
	$email = $dado['Email'];
	
}

if ($login!= null && $senha != null) {
	if ($id==1) {
		if ($login == $NomeComp && $senha == $SenhaComP) {
			$history = "INSERT INTO `history`(`id`, `nome`, `email`,`data`) VALUES (\"$id\",\"$NomeComp\",\"$email\",\"$data\")";
			$conn = $mysqli -> query($history) or die ($mysqli->error);
			header("location:admin/index.php");
		}
	}else{
		if ($login == $NomeComp && $senha == $SenhaComP) {
			$history = "INSERT INTO `history`(`id`, `nome`, `email`,`data`) VALUES (\"$id\",\"$NomeComp\",\"$email\",\"$data\")";
			$conn = $mysqli -> query($history) or die ($mysqli->error);
			header("location:?pg=inicial");
		}else{
			header("location:../index.php");
		}
	}
}else{
	header("location:../index.php");
}


mysqli_close($mysqli);

?>