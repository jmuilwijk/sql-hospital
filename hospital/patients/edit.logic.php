<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		
		$patient = NULL;
		
		if (isset($_GET['id'])){
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT patient.id, patient.name, species.species,
			 patient.status, patient.gender FROM patient INNER JOIN species ON patient.species_id=species.id WHERE 
			 patient.id=$id";
			
			$result = $db->query($query);
			

			$patient = $result->fetch_assoc();	
	
		}
		if ($patient == NULL) {
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		}
	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
		$db = new mysqli('localhost','root','','hospital');

		// Prepare data for update
		$id = $db -> escape_string($_POST['id']);
		$name = $db -> escape_string($_POST['name']);
		$status = $db -> escape_string($_POST['status']);
		$species = $db -> escape_string($_POST['species']);
		$gender = $db->escape_string($_POST["gender"]);
		var_dump($gender);

		// Prepare query and execute
		$query = "UPDATE patient SET name='$name', status='$status', species_id='$species', gender='$gender' WHERE id=$id";
		$result = $db->query($query);
	
	    //Tell the browser to go back to the index page.
		header("Location: ./");
   		exit();
	}

?>