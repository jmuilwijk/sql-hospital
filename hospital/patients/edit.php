<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="patient_id" value="<?=$patient['patient_id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="patient_name" value="<?=$patient['patient_name']?>">
		</div>
		<div>
			<label for="name">Species:</label>
			<input type="text" id="species" name="patient_spieces" value="<?=$patient['spieces_spieces']?>">
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="patient_status"><?=$patient['patient_status']?></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>