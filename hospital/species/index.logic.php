<?php
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT * FROM spieces";
	$result = $db->query($query);
	
	$spieces = $result->fetch_all(MYSQLI_ASSOC);
?>