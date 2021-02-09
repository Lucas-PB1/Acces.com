<title>Register page</title>
<?php
include './bank/database.php';
?>
<div id="registro">

	<form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
		<legend>Faça seu registro!</legend>
		<?php if (isset($_POST['data'])) registrar($_POST['user'], $_POST['nick'], $_POST['email'], $_POST['senha'], $_POST['confirm_senha']); ?>
		<div class="row">
			<div class="col-md-6">
				<input type="text" name="user" required placeholder="Nome de usuario">
			</div>
			<div class="col-md-6">
				<input type="text" name="nick" required placeholder="Seu nick de usuario">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="email" name="email" required placeholder="name@gmail.com">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<input type="password" name="senha" required placeholder="Senha">
			</div>
			<div class="col-md-6">
				<input type="password" name="confirm_senha" required placeholder="Repita a senha">
			</div>
		</div>
		<button class="btn btn-danger" name="data">REGISTRAR</button>
	</form>
</div>
</div>