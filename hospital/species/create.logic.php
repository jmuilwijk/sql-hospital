<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$species = $db->escape_string($_POST["species"]);
		
		// Prepare query and execute
		$query ="INSERT INTO species (species) VALUES ('$species')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>