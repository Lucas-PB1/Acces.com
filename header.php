<?php include_once("BD/contentbd.php") ?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<div id="header">
	<a title="Acess" href="?pg=inicial"><img id="logo" src="../img/logo.png"></a>
	<br><h1 id="tituloc">Acces</h1>
	<div class="dropdown" id="menu">
		<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" style="color: orange;border-color: orange">
			Menu
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item active" style="color: orange" href="?pg=top_pesquisas">Faça uma pergunta!</a>
			<a class="dropdown-item active" style="color: orange" href="?pg=post">Perguntas recentes</a>
			<a class="dropdown-item active" style="color: orange" href="?pg=sobre">Sobre</a>
			<a class="dropdown-item active" style="color: orange" href="?pg=Contato">Contato</a>
			<a class="dropdown-item active" style="color: orange" href="?pg=login">Sair</a>
		</div>
	</div>
</div>

<input type="hidden" value="vazio">