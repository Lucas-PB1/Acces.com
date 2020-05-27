<title>Previsão</title>
<body>
	<div class="format content">
		<?php exibir_pags("Pesquisas") ?>
		<form method="POST" action="?pg=./BD/pesquisa">
			<div class="main">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Perguntar" name="pesquisado" style="color: white">
					<div class="input-group-append">
						<button class="btn btn-secondary">
							<img class="icon_busca" src="../img/busca.png">
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>	
</body>