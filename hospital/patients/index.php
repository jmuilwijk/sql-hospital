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
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['patient_name']?></td>
				<td><?=$patient['spieces_spieces']?></td>
				<td><?=$patient['patient_status']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['patient_id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['patient_id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>