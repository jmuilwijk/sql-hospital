<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete patiënt</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<span><?=$patient['name']?></span>
		</div>
		<div>
			<label for="species">Species:</label>
			<span><?=$patient['species_id']?></span>
		</div>
		<div>
			<label for="status">status:</label>
			<span><?=$patient['status']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>