<title>Editar páginas</title>
<?php
$titulo = $_REQUEST ['titulo'];
$conteudo = $_REQUEST ['conteudo']; 

$consulta = "UPDATE `paginas` SET `Content`=\"$conteudo\" WHERE Nome = \"$titulo\"";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
header("location:?pg=modificar_pags");
mysqli_close($mysqli);
?>