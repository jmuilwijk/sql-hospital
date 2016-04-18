<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Gender</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient) {
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['patient_species']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['gender']?></td>
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