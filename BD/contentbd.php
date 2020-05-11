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
<?php function listar_usuarios(){
	global $mysqli;
	$consulta = "SELECT `id`, `Nome`,`Email` FROM `usuarios` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<table class="format tabela_usuarios" border="1">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
		</tr>
		<?php while($dado = $conn -> fetch_array()){ ?>
			<tr>
				<td><?php echo $dado['id'] ?></td>
				<td><?php echo $dado['Nome'] ?></td>
				<td><?php echo $dado['Email'] ?></td>
			</tr>

		<?php } ?>
	</table>
	<?php mysqli_close($mysqli);
} ?>

<?php function listar_pags(){
	global $mysqli;
	$consulta = "SELECT `id`, `Nome`, `Url` FROM `paginas` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<table class="format tabela_pags" border="1">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Url</th>
		</tr>
		<?php while($dado = $conn -> fetch_array()){ ?>
			<tr>
				<td><?php echo $dado['id'] ?></td>
				<td><?php echo $dado['Nome'] ?></td>
				<td><?php echo $dado['Url'] ?></td>
			</tr>

		<?php } ?>
	</table>
	<?php mysqli_close($mysqli);
} ?>

<?php function modificar_usuarios(){
	global $mysqli;
	$consulta = "SELECT `id`, `Nome`,`Email` FROM `usuarios` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<table class="format tabela_usuarios" border="1">
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
				<td><button id="button"><a href="" class="link">[ ! ]</a></button></td>
				<td><button id="button"><a href="" class="link">[ X ]</a></button></td>
			</tr>

		<?php } ?>
	</table>
	<div class="add_button_field">
		<label class="add_button_border">adicionar páginas: <button id="button"><a href="?pg=adicionar_usuarios" class="link">[ + ]</a></button></label>
	</div>
	<?php mysqli_close($mysqli);
} ?>

<?php function modificar_pags(){
	global $mysqli;
	$consulta = "SELECT `id`, `Nome`, `Url` FROM `paginas` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<table class="format tabela_pags" border="1">
		<tr>
			<th>Id</th>
			<th>Titulo</th>
			<th>Alterar</th>
			<th>Excluir</th>
		</tr>
		<?php while($dado = $conn -> fetch_array()){ ?>
			<tr>
				<td><?php echo $dado['id'] ?></td>
				<td><?php echo $dado['Nome'] ?></td>
				<td><button id="button"><a href="?pg=adicionar_pags" class="link">[ ! ]</a></button></td>
				<td><button id="button"><a href="" class="link">[ X ]</a></button></td>
			</tr>

		<?php } ?>
	</table>
	<div class="add_button_field">
		<label class="add_button_border">adicionar páginas: </label><button id="button"><a href="?pg=adicionar_pags" class="link">[ + ]</a></button>
	</div>
	<?php mysqli_close($mysqli);
} ?>

<?php function exibir_pags($nome){
	global $mysqli;
	$consulta = "SELECT * FROM `paginas` WHERE Nome = \"$nome\"";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
		<?php while($dado = $conn -> fetch_array()){  ?>
			<h1><?php echo $dado['Nome']; ?></h1>
			<?php echo $dado['Content']; ?>
		<?php } ?>

	<?php mysqli_close($mysqli);
} ?>