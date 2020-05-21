<?php include_once("BD/contentbd.php") ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<div id="header">
	<button><a href="../admin/index.php" class="format">adm</a></button>
	<a title="Acess" href="?pg=inicial"><img id="logo" src="../img/logo.png"></a>
	<br><h1 id="tituloc">Acess</h1>
	<nav id="menu">
		<a title="Sobre o Acces" href="?pg=sobre"><label class="format">Sobre</label></a>
		<a title="Informações de contato" href="?pg=contato"><label class="format">Contato</label></a>
		<a title="Deslogar" href="?pg=login"><label class="format">Sair</label></a>
	</nav>
</div>

