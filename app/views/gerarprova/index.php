<div class="container">
	<h1 class="text-center">Gerador de Provas</h1>
	<form action="<?php echo BASEURL; ?>/gerarprova/gerar" method="POST" class="form">
		<div class="col-sm-12">
			<div class="form-group">
				<label for="enunciado">Enunciado</label>
				<input type="text" id="enunciado" name="enunciado" placeholder="Digite o Enunciado" class="form-control">
			</div>

		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="alternativaA">Alternativa A</label>
				<input type="text" id="alternativaA" name="alternativaA" placeholder="Digite a alternativa A" class="form-control">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="alternativaB">Alternativa B</label>
				<input type="text" id="alternativaB" name="alternativaB" placeholder="Digite a alternativa B" class="form-control">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="alternativaC">Alternativa C</label>
				<input type="text" id="alternativaC" name="alternativaC" placeholder="Digite a alternativa C" class="form-control">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="alternativaD">Alternativa D</label>
				<input type="text" id="alternativaD" name="alternativaD" placeholder="Digite a alternativa D" class="form-control">
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="alternativaCorreta">Alternativa Correta</label>
				<input type="text" id="alternativaCorreta" name="alternativaCorreta" placeholder="Digite a alternativa Correta" class="form-control">
			</div>
		</div>
		<div class="col-sm-3">
			<label for=""></label>
			<input type="submit" value="Enviar" class="btn btn-success form-control">	
		</div>
	</form>
</div>