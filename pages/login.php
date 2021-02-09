<title>Login page</title>
<?php
include './bank/database.php';
?>
<div id="login">
	<form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
		<legend class="text-center">Faça seu login!</legend>
		<?php if (isset($_POST['data'])) login($_POST['user'], $_POST['senha']); ?>
		<input type="text" name="user" required placeholder="Nome de usuario ou Email">
		<input type="password" name="senha" required placeholder="Senha">
		<button class="btn btn-danger" name="data">LOGIN</button>
	</form>
</div>