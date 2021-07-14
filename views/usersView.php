<h1 class="mb-5">Liste des utilisateurs</h1>

<table class="table table-dark table-hover caption-top ">
	<thead class="sticky-top">
		<tr>
      <th>Pseudo</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th >Actions</th>
		</tr>
	</thead>
	<tbody>

	<?php foreach($users as $user):?>	

		<tr>
      <td><?= $user['username'];?></td>
			<td><?= $user['firstname'];?></td>
			<td><?= $user['lastname'];?></td>
			<td>
				<a class="btn btn-primary" href="index.php?page=user&id=<?=$user['id'];?>">Infos</a>
				<a class="btn btn-danger" href="index.php?page=users&action=delete&id=<?=$user['id'];?>">Supprimer</a>
			</td>
		</tr>

	<?php endforeach;?>

	</tbody>
</table>