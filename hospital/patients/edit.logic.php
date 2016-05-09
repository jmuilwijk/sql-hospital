<?php
	$db = new mysqli('localhost','root','','hospital');
	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		
		$patient = NULL;
		
		if (isset($_GET['id'])){
			// Get Patient for id
			
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT patient.id AS patient_id, patient.name AS patient_name, patient.species_id AS pspecies_id, 
			species.species, species.id AS species_id, patient.status, patient.gender, patient.clients_id, clients.name 
			AS clients_name FROM patient INNER JOIN species ON patient.species_id=species.id INNER JOIN clients ON 
			patient.clients_id=clients.id WHERE patient.id=$id";
			
			$result = $db->query($query);			

			$patient = $result->fetch_assoc();	

			$speciesQuery ="SELECT * FROM species";
			$speciesResult = $db->query($speciesQuery);
			$species = $speciesResult->fetch_all(MYSQLI_ASSOC);

			$clientQuery ="SELECT * FROM clients";
			$clientResult = $db->query($clientQuery);
			$clients = $clientResult->fetch_all(MYSQLI_ASSOC);
	
		}
		if ($patient == NULL) {
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		}
	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {

		// Prepare data for update
		$id = $db -> escape_string($_POST['id']);
		$name = $db -> escape_string($_POST['patient_name']);
		$status = $db -> escape_string($_POST['status']);
		$species = $db -> escape_string($_POST['species']);
		$gender = $db->escape_string($_POST["gender"]);
		$client_id = $db->escape_string($_POST["client"]);

		// Prepare query and execute
		$query = "UPDATE patient SET name='$name', status='$status', species_id='$species', gender='$gender',clients_id='$client_id' WHERE id=$id";
		$result = $db->query($query);
	
	    //Tell the browser to go back to the index page.
		header("Location: ./");
   		exit();
	}

?>