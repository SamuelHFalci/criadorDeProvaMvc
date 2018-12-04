

<div class="container-fluid login">
	<form action="<?php  echo BASEURL ?>/login/login" method="POST">
		<div class="form-login">
			<div class="form-group">
				<label for="login">Login</label>
				<input type="email" name="usuario" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Senha</label>
				<input type="password" name="senha" class="form-control">
			</div>

			<input type="submit" value="Logar" class="form-control btn btn-success">
		</div>
	</form>
</div>
<?php if(isset($_SESSION['usuario'])){
	var_dump($_SESSION['usuario']);
} ?>