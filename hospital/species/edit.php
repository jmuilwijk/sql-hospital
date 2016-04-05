<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit spieces</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$spieces['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="spieces" name="spieces" value="<?=$spieces['spieces']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>