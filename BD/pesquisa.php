<?php 
$pesquisado = $_REQUEST['pesquisado'];
$data = date("Y/m/d");
$logado = "SELECT * FROM history ORDER BY cont DESC LIMIT 1";
$conn = $mysqli -> query($logado) or die ($mysqli->error);
while ($dado = $conn ->fetch_array()) {
	$usuario = $dado['nome'];
}

if ($pesquisado != null) {
	$consulta = "INSERT INTO `pesquisado`(`nome`,`pesquisa`, `data`,`exibir`) VALUES (\"$usuario\",\"$pesquisado\",\"$data\",\"não\")";
	$conn = $mysqli -> query($consulta) or die ($mysqli->error);
	header("location:?pg=return_pesquisa");
}else{
	header("location:?pg=top_pesquisas");
}


?>