<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>species</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($species as $species):
?>
			<tr>
				<td><?=$species['id']?></td>
				<td><?=$species['species']?></td>
				<td class="center"><a href="edit.php?id=<?=$species['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$species['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>