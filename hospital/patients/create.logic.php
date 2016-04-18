<?php

	$db = new mysqli('localhost','root','','hospital');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		var_dump($_POST);
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		$client = $db->escape_string($_POST["client"]);
		
		// Prepare query and execute
		$query ="INSERT INTO patient (name, species_id, status, gender, clients_id) VALUES ('$name', $species,'$status','$gender', $client)";
		$result = $db->query($query);
		//header("Location: ./");
		exit();

	} elseif ($_SERVER["REQUEST_METHOD"] =="GET") {		
	
		$speciesQuery ="SELECT * FROM species";
		$speciesResult = $db->query($speciesQuery);
		$species = $speciesResult->fetch_all(MYSQLI_ASSOC);

		$clientQuery ="SELECT * FROM clients";
		$clientResult = $db->query($speciesQuery);
		$clients = $clientResult->fetch_all(MYSQLI_ASSOC);
	
    // Tell the browser to go back to the index page.
    
    
	}

?>