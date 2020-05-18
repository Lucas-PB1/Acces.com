<title>Adicionar páginas</title>
<?php $nome = $_REQUEST ['Nome'];  
$consulta = "SELECT * FROM `paginas` WHERE Nome ='$nome'";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);

while($dado = $conn -> fetch_array()){
	?>
	<body>
		<div class="formulario">
			<form method="POST" action="?pg=../BD/editar_pagsbd">
				<table class="content">
					<tr>
						<td><h1 class="titulo">Atualize os dados da página</h1></td>
					</tr>
					<tr>
						<input type="hidden" name="titulo" value="<?=$dado['Nome'];?>">
						<td><h3 class="format">Nome:</h3><p class="format"><?php echo $dado['Nome']; ?></p></td>
					</tr>
					<tr>
						<td><h3 class="format">Contéudo:</h3><textarea class="dados format" type="text" name="conteudo" placeholder="Contéudo" o><?php echo $dado['Content'];?></textarea></td>
					</tr>
					<tr>
						<td><label><input class="format" type="submit"></label></td>
					</tr>
				</table>
				
			</form> 
		</div>
		<?php } ?>