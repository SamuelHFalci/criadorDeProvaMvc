<?php
use Dompdf\Dompdf;
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASEURL?>/assets/css/bootstrap.min.css">
</head>
<body>
	<table class="table table-bordered" style="page-break-inside: avoid;" >
		<tr>
			<th rowspan="2">IFNMG</th>
			<th>Avaliação da disciplina: Programação Orientada a objetos</th>
			<th>Data: 04/12/2018</th>
		</tr>
		<tr><th colspan="2">Aluno:</th></tr>
		
		<?php 
		$count = 1;
		foreach($viewData as $questao) {?>

			<tr>
				<td>Questao <?php echo $count ?></td>
				<td colspan="2"><?php echo $questao->getEnunciado() ?></td>
			</tr>
			<tr>
				<td colspan="3">
					<p>A) <?php echo $questao->getAlternativaA(); ?></p>
					<p>B) <?php echo $questao->getAlternativaB(); ?></p>
					<p>C) <?php echo $questao->getAlternativaC(); ?></p>
					<p>D) <?php echo $questao->getAlternativaD(); ?></p>
				</td>
			</tr>
			
			<?php $count++; } ?>
		</table>
		<div style="page-break-after: always;"></div>
		<h1>Gabarito</h1>
		<table class="table table-bordered">
			<tr>
				<?php  
				$count = 1;

				foreach($viewData as $questao) {?>
					<td class="text-center">
						<p><?php echo $count;?></p>
						<p><?php echo $questao->getAlternativaCorreta();?></p>
					</td>

					<?php $count++; } ?>
				</tr>
			</table>


			<?php 
			$template = ob_get_clean();
			echo $template;
			?>
			<div class="col-sm-2 col-sm-offset-5">
				<form action="<?php echo BASEURL ?>/gerarProva/generatePdf" method="POST" style="float: left">
					<input type='hidden' name='templatePdf' value='<?php echo "$template";?>'/> 
					<input type="submit" value="Gerar Pdf" class="btn btn-primary">
				</form>
				<a href="<?php echo BASEURL?>" class="btn btn-primary" style="float: right">Voltar</a>
			</div>
			
		</body>
		</html>
