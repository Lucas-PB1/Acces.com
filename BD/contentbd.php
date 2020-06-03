<?php

$host ="127.0.0.1";
$user = "root";
$Password = "";
$DB =  "lucas";

$mysqli = new mysqli($host, $user, $Password, $DB);

if (!$mysqli) {
	echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
} 

?>

<?php function modificar_usuarios(){
	global $mysqli;
	$consulta = "SELECT `id`, `Nome`,`Email` FROM `usuarios` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<table class="format tabela table-bordered">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Alterar</th>
			<th>Excluir</th>
		</tr>
		<?php while($dado = $conn -> fetch_array()){ ?>
			<tr>
				<td><?php echo $dado['id'] ?></td>
				<td><?php echo $dado['Nome'] ?></td>
				<td><?php echo $dado['Email'] ?></td>
				<td><button id="space_button"><a  class="link" href="?pg=../admin/editar_usuarios&Nome=<?=$dado['Nome']; ?>">[!]</a></button></td>
				<td><button id="space_button"><a href="javascript:confirmaExclusao('?pg=../BD/excluir_usuariosbd&id=<?=$dado['id']; ?>')" class="link">[X]</a>
				</button></td>
			</tr>
		<?php } ?>

		<script>
			function confirmaExclusao(aURL) {
				if(confirm('Você tem certeza que deseja excluir?')) {
					location.href = aURL;
				}
			}

		</script>
	</table>
	<div class="add_button_field">
		<label class="add_button_border">adicionar usuários: <button><a href="?pg=adicionar_usuarios" class="link">[+]</a></button></label>
	</div>
	<?php button_voltar() ?>
	<?php mysqli_close($mysqli);
} ?>

<?php function modificar_pags(){
	global $mysqli;
	$consulta = "SELECT `id`, `Nome`, `Url` FROM `paginas` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<form method="POST" action="?pg=editar_pags">
		<table class="format litle_tabela table-bordered" >
			<tr>
				<th>Id</th>
				<th>Titulo</th>
				<th>Alterar</th>
			</tr>
			<?php while($dado = $conn -> fetch_array()){ ?>
				<tr>
					<td><?php echo $dado['id'] ?></td>
					<td><?php echo $dado['Nome'] ?></td>
					<input type="hidden" name="Nome" value="<?php $dado['Nome'] ?>">
					<td><button id="space_button"><a  class="link" href="?pg=../admin/editar_pags&Nome=<?=$dado['Nome']; ?>">[!]</a></button></td>
				</tr>
			<?php } ?>
		</table>
		<?php button_voltar() ?>
	</form>
	<?php mysqli_close($mysqli);
} ?>

<?php function exibir_pags($nome){
	global $mysqli;
	$consulta = "SELECT * FROM `paginas` WHERE Nome = \"$nome\"";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<?php while($dado = $conn -> fetch_array()){  ?>
		<h2><?php echo $dado['Nome']; ?></h2><br>
		<pre id="content_text"><?php echo $dado['Content']; ?></pre>
	<?php } ?>

	<?php mysqli_close($mysqli);
} ?>

<?php function button_voltar(){ ?>
	<div class="button_voltar">
		<a href="#" class="link border_basic" onclick="history.go(-1)">Voltar</a>	
	</div>
<?php } ?>



<?php function responder_posts(){
	global $mysqli;
	$consulta = "SELECT * FROM `pesquisado` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<form method="POST" action="#">
		<table class="format tabela table-bordered">
			<tr>
				<th>Perguntas</th>
				<th>Data</th>
				<th>Responder</th>
				<th>Respondido?</th>
				<th>Excluir</th>
			</tr>
			<?php while($dado = $conn -> fetch_array()){ ?>
				<tr>
					<td><?php echo $dado['pesquisa'] ?></td>
					<td><?php echo $dado['data'] ?></td>
					<?php $pesquisa = $dado['pesquisa']; ?>
					<td><button id="space_button"><a class="link" href="?pg=../admin/gravar_respostas&id=<?=$dado['id']; ?>">[!]</a></button></td>
					<td><?php echo $dado['exibir'] ?></td>
					<td><button id="space_button"><a href="javascript:confirmaExclusao('?pg=../BD/excluir_perguntasbd&id=<?=$dado['id']; ?>')" class="link">[X]</a>
					</button></td>
				</tr>
			<?php } ?>
		</table>
		<script>
			function confirmaExclusao(aURL) {
				if(confirm('Você tem certeza que deseja excluir?')) {
					location.href = aURL;
				}
			}

		</script>
		<?php button_voltar() ?>
	</form>
	<?php mysqli_close($mysqli);
} ?>

<?php function exibir_posts(){
	//Função de selecionar o contéudo da tabela
	global $mysqli;
	$consulta = "SELECT * FROM `pesquisado` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<!-- Aqui ele começa a varrer a linha selecionada no banco de dados -->
	<?php while($dado = $conn -> fetch_array()){ ?>
		<!-- Tabela de dados -->
		<table class="format tabela table-bordered">
			<!-- tr é a linha da tabela -->
			<tr>
				<!-- th é o titulo -->
				<th>Perguntas</th>
				<th>Dados</th>
			</tr>
			<!-- Outra linha da tabela -->
			<tr>
				<!-- se o dado exibir for "sim", ele exibe na tela -->
				<?php if ("sim"==$dado['exibir']) { ?>
					<!-- chamando os dois dados, pesquisa é a pergunta e data é data -->
					<td class="center"><?php echo $dado['pesquisa'] ?></td>
					<td class="center"><?php echo $dado['data'] ?></td>
				</tr>
				<tr>
					<!-- $dado['resposta'] é a resposta -->
					<td class="center"><?php echo $dado['resposta']?></td>
					<td class="center"><?php echo $dado['nome']?></td>
				</tr>
				<!-- Se exibir for não, não faz nada -->
			<?php } //Fim do if?>
		</table><!-- Fim da tabela -->
		<br>
	<?php } //Fim do while?>

	<?php mysqli_close($mysqli); //Fechando acesso ao banco de dados
} ?>