<h1>Listar Banners</h1>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Descricao</th>
			<th>Url</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($banners as $banner) :?>
		<tr>
			<td><?= $banner['id'] ?> </td>
			<td><?= $banner['nome'] ?> </td>
			<td><?= $banner['descricao'] ?> </td>
			<td><?= $banner['url'] ?> </td>
		</tr>
	<?php endforeach; ?>
	</tbody>	
</table>
