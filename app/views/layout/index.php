<div class="container">
	<h2 class="text-center">Filtar questões</h2>
	<form action="<?php echo BASEURL ?>/index" method="POST">
		<div class="form-group col-sm-10">
			<label for="categoria">Selecione uma categoria</label>
			<select name="categoria" id="categoria" class="form-control">
				<option value=""></option>
				<?php foreach($viewData['categorias'] as $categoria) { ?>
					<option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['nome'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="col-sm-2">
			
			<div class="form-group">
				<label for=""></label>
				<input type="submit" value="Filtrar" class='form-control btn btn-warning'>
			</div>
		</div>
	</form>
</div>
<?php if(isset($viewData['dados'])){ ?>
<div class="container-fluid">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Enunciado</th>
				<th>Alternativa A</th>
				<th>Alternativa B</th>
				<th>Alternativa C</th>
				<th>Alternativa D</th>
				<th>Alternativa Correta</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($viewData['dados'] as $data) {
				$data = (object) $data;
				?>
				<tr>
					<td><?php echo $data->enunciado; ?></td>
					<td><?php echo $data->alternativaA; ?></td>
					<td><?php echo $data->alternativaB; ?></td>
					<td><?php echo $data->alternativaC; ?></td>
					<td><?php echo $data->alternativaD; ?></td>
					<td><?php echo $data->alternativaCorreta; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php } ?>