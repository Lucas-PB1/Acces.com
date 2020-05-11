<title>Adicionar páginas</title>
<?php
$titulo = $_REQUEST ['titulo'];
$conteudo = $_REQUEST ['conteudo']; 
$url = $_REQUEST ['url'];

$consulta = "INSERT INTO `paginas`(`Nome`, `Content`, `Url`) VALUES (\"$titulo\",\"$conteudo\",\"$url\")";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
header("location:?pg=modificar_pags");
mysqli_close($mysqli);
?>