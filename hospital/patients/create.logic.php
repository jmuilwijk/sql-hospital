<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["spieces"]);
		$status = $db->escape_string($_POST["status"]);
		
		// Prepare query and execute
		$query = "INSERT INTO patient (name, spieces, status) VALUES ('$name','$spieces','$status')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>