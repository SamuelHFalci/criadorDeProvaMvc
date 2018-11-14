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
			<?php foreach($viewData as $data) {
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