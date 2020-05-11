<title>Adicionar páginas</title>
<body>
	<h1 class="titulo">Cadastro de uma página</h1>
	<div class="formulario">
		<form method="POST" action="?pg=../BD/adicionar_pagsbd">
			<label><p>Titulo da página:</p>
				<select class="dados format" name="titulo">
					<option value="Vazio">Escolha a página que vai editar</option>
					<option value="Página inicial">Página inicial</option>
					<option value="Sobre">Sobre</option>
					<option value="Contato">Contato</option>
				</select><br>
				<p>Contéudo:</p><textarea class="entry dados format" type="text" name="conteudo" placeholder="Contéudo"></textarea><br>
				<p>Url:</p><input class="dados format" type="text" name="url" placeholder="Url"><br>
				<label><input class="format" type="submit"></label></label>
			</form> 
		</div>
	</body>
	</html>