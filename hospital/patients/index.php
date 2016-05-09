<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th><a href="index.php?column=patient_name&sort=<?= $displaysort; ?>">Name</a></th>
				<th><a href="index.php?column=species_species&sort=<?= $displaysort; ?>">Species</a></th>
				<th>Status</th>
				<th><a href="index.php?column=gender&sort=<?= $displaysort; ?>">Gender</a></th>
				<th><a href="index.php?column=clients_name&sort=<?= $displaysort; ?>">Client</a></th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient) {
?>
			<tr>
				<td><?=$patient['patient_name']?></td>
				<td><?=$patient['species_species']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['clients_name']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['patient_id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['patient_id']?>">delete</a></td>
			</tr>

<?php
	}
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>