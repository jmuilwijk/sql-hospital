<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$spieces = $db->escape_string($_POST["spieces"]);
		
		// Prepare query and execute
		$query ="INSERT INTO spieces (spieces) VALUES ('$spieces')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>