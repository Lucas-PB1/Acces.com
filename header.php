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
	<div class="dropdown" id="menu">
		<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" style="color: orange;border-color: orange">
			Menu
		</button>
		<div class="dropdown-menu">
			<a class="dropdown-item active" style="color: orange" href="?pg=top_pesquisas">Pesquisa</a>
			<a class="dropdown-item active" style="color: orange" href="?pg=post">Respostas</a>
			<a class="dropdown-item active" style="color: orange" href="?pg=sobre">Sobre</a>
			<a class="dropdown-item active" style="color: orange" href="?pg=Contato">Contato</a>
			<a class="dropdown-item active" style="color: orange" href="?pg=login">Sair</a>
		</div>
	</div>
</div>

