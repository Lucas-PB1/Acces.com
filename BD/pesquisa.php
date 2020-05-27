<?php 
$pesquisado = $_REQUEST['pesquisado'];
$data = date("Y/m/d");
$consulta = "INSERT INTO `pesquisado`(`pesquisa`, `data`,`exibir`) VALUES (\"$pesquisado\",\"$data\",\"não\")";
$conn = $mysqli -> query($consulta) or die ($mysqli->error);
header("location:?pg=return_pesquisa");
?>
