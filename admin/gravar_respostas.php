<title>Gravar respostas</title>
<?php $pergunta = $_REQUEST ['pesquisa'];
$consulta = "SELECT * FROM `pesquisado` WHERE pesquisa ='$pergunta'";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);

while($dado = $conn -> fetch_array()){
	?>
	<body>
		<div class="formulario content">
			<form method="POST" action="?pg=../BD/inserir_respostabd">
				<table class="content format">
					<tr>
						<input type="hidden" name="exibir" value="sim">
						<input type="hidden" name="pesquisa"  value="<?=$dado['pesquisa'];?>">
						<td><label>Pergunta:</label><br><p class="format"><p><?=$dado['pesquisa'];?><td>
						</tr>
						<tr>
							<td><label>Data:</label><br><p class="format" name="data"><?php echo $dado['data'];?></p></td>
						</tr>
						<tr>
							<td><label>Resposta:</label><br><textarea style="color: white" class="format" type="text" name="resposta" placeholder="Resposta"></textarea></td>
						</tr>
						<tr>
							<td><button class="format">Enviar</button></td>
						</tr>
					</table>
				</form> 
			</div>
			<?php } ?>