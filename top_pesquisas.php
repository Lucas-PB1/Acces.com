<title>Previsão</title>
<body>
	<div class="format content">
		<?php exibir_pags("Pesquisas") ?><br>
		<form method="POST" action="?pg=./BD/pesquisa">
			<div class="col">
				<input type="text" class="format" name="pesquisado" placeholder="Pergunta">
				<button><img class="icon_busca" src="../img/busca.png"></button>
			</div>
		</form>
	</div>	
</body>