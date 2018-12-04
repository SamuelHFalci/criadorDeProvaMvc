<div class="container-fluid">
	<h1>Gerar prova</h1>
	<form action="<?php echo BASEURL ?>/gerarprova/gerar" method="POST">
		<div class="col-sm-4">
			<div class="form-group">
				<label for="categoria">Categoria</label>
				<select name="categoria" id="categoria" class="form-control">
					<?php foreach($viewData as $data) {?>
						<option value="<?php echo $data['id']?>"><?php echo $data['nome'] ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group">
				<label for="qtdQuestoes">Quantidade de questões</label>
				<input type= "number" name="qtdQuestoes" id="qtdQuestoes" class="form-control">
			</div>
		</div>
		<div class="col-sm-4">
			<label for=""></label>
			<input type="submit" value="Enviar" class="btn btn-success form-control">	
		</div>
	</form>
</div>