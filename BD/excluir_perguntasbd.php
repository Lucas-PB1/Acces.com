<title>Excluir perguntas</title>
<?php
$id = $_REQUEST['id'];
$consulta = "SELECT * FROM `pesquisado` WHERE id ='$id'";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);

$consulta ="DELETE FROM `pesquisado` WHERE id = $id";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
header("location:?pg=responder_perguntas");
mysqli_close($mysqli);
?>