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
		if ($id==1) {
			header("location:?pg=adm_page");
		}else{
			header("location:../admin/index.php");
		}
	}else{
		header("location:../admin/index.php");
	}
}else{
	header("location:../admin/index.php");
}


mysqli_close($mysqli);

?>