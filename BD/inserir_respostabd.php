<title>Inserir Respostas</title>
<?php
$exibir = $_REQUEST ['exibir'];
$pesquisa = $_REQUEST ['pesquisa']; 
$resposta = $_REQUEST ['resposta'];

$consulta = "UPDATE `pesquisado` SET `resposta`=\"$resposta\" , `exibir`=\"$exibir\"  WHERE pesquisa = \"$pesquisa\"";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
header("location:?pg=responder_perguntas");
mysqli_close($mysqli);
?>