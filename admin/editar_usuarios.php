<title>Adicionar páginas</title>
<?php $nome = $_REQUEST ['Nome'];  
$consulta = "SELECT * FROM `usuarios` WHERE Nome ='$nome'";
$conn = $mysqli -> query ($consulta) or die ($mysqli->error);

while($dado = $conn -> fetch_array()){
	?>
	<body>
		<div class="formulario content">
			<form method="POST" action="?pg=../BD/editar_usuariosbd">
				<table class="content format">
					<tr>
						<input type="hidden" name="id" value="<?=$dado['id'];?>">
						<td><h1 class="titulo">Atualize os dados do usuário</h1></td>
					</tr>
					<tr>
						<td><label>Nome:</label><input class="dados format" type="text" name="Nome" value="<?=$dado['Nome'];?>"><td>
					</tr>
					<tr>
						<td><label>Email:</label><input class="dados format" type="text" name="Email" value="<?php echo $dado['Email'];?>"></td>
					</tr>
					<tr>
						<td><label>Senha:</label><input class="dados format" type="password" name="Senha" placeholder="NOVA SENHA"></td>
					</tr>
					<tr>
						<td><button class="format">Enviar</button></td>
					</tr>
				</table>
			</form> 
		</div>
		<?php } ?>