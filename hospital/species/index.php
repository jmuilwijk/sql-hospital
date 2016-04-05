<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>spieces</h1>
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
	foreach($spieces as $spieces):
?>
			<tr>
				<td><?=$spieces['id']?></td>
				<td><?=$spieces['spieces']?></td>
				<td class="center"><a href="edit.php?id=<?=$spieces['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$spieces['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>