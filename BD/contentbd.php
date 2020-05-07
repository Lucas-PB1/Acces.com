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
	$consulta = "SELECT `id`, `Nome`, `Content`, `Url` FROM `paginas` WHERE 1";
	$conn = $mysqli -> query ($consulta) or die ($mysqli->error);
	?>
	<table class="format tabela_pags" border="1">
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Content</th>
			<th>Url</th>
		</tr>
		<?php while($dado = $conn -> fetch_array()){ ?>
			<tr>
				<td><?php echo $dado['id'] ?></td>
				<td><?php echo $dado['Nome'] ?></td>
				<td><?php echo $dado['Content'] ?></td>
				<td><?php echo $dado['Url'] ?></td>
			</tr>

		<?php } ?>
	</table>
	<?php mysqli_close($mysqli);
} ?>
