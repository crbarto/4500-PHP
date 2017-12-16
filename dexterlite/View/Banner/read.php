<h1>Lista de Banners</h1>
<?php
	if ( isset($msg) ) {
		echo $msg;	
		session_destroy();
	}

?>
<a href="?route=banner/create" class="btn btn-primary"> Criar Banner </a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Descricao</th>
			<th>Url</th>
			<th>Categoria</th>
			<th>Açoes</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $banner) :?>
		<tr>
			<td><?= $banner->getId() ?> </td>
			<td><?= $banner->getNome() ?> </td>
			<td><?= $banner->getDescricao() ?> </td>
			<td><?= $banner->getUrl() ?> </td>
			<td><?= $banner->getCategoria() ?> </td>
			<td>
				<a href="?route=banner/update&id=<?= $banner->getId() ?>"
						class="btn btn-primary"> Editar(<?= $banner->getId() ?>)</a>
			</td>
			<td>			
				<a href="?route=banner/delete&id=<?= $banner->getId() ?>"
						class="btn btn-danger"> Delete	</a>
			</td>	

		</tr>
	<?php endforeach; ?>
	</tbody>	
</table>
