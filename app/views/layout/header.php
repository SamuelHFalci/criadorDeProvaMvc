<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL?>/assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Brand</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo BASEURL ?>">Home</a></li>
				<li><a href="<?php echo BASEURL ?>/questao">Questões</a></li>
				<li><a href="<?php echo BASEURL ?>/questao/cadastrar">Cadastrar Questão</a></li>
				<li><a href="<?php echo BASEURL ?>/gerarprova">Gerar Prova</a></li>
				<?php if(isset($_SESSION['logado']) && $_SESSION['logado']){ ?>
					<li><a href="<?php  echo BASEURL?>/login/logout">Sair</a></li>
				<?php } ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
