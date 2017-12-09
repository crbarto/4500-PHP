<h1>Listar Banners</h1>
<a href="?route=banner/create" class="btn btn-primary"> Criar Banner </a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Descricao</th>
			<th>Url</th>
			<th>Açoes</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($banners as $banner) :?>
		<tr>
			<td><?= $banner->getId() ?> </td>
			<td><?= $banner->getNome() ?> </td>
			<td><?= $banner->getDescricao() ?> </td>
			<td><?= $banner->getUrl() ?> </td>
			<td>
				<a href="?route=banner/update&id=<?= $banner->getId() ?>"
						class="btn btn-primary"> Editar	</a>
				<a href="?route=banner/delete&id=<?= $banner->getId() ?>"
						class="btn btn-primary"> Delete	</a>
			</td>	

		</tr>
	<?php endforeach; ?>
	</tbody>	
</table>
