<?php
	require_once "create.logic.php";	
	include "../common/header.php";
?>
	<h1>New spieces</h1>
	<form method="post">
		<div>
			<label for="spieces">Spieces:</label>
			<input type="text" id="spieces" name="spieces">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>