<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT patient.id AS patient_id, patient.name AS patient_name, spieces.spieces AS spieces_spieces,
			 patient.status AS patient_status FROM patient INNER JOIN spieces ON patient.spieces=spieces.id WHERE 
			 patient.id=$id";
			
			$result = $db->query($query);
			

			$patient = $result->fetch_assoc();	
			var_dump($patient);
	
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');

		// Prepare data for update
		$id = $db -> escape_string($_POST['patient_id']);
		$name = $db -> escape_string($_POST['patient_name']);
		$status = $db -> escape_string($_POST['patient_status']);
		var_dump($id);
		var_dump($name);
		var_dump($status);

		// Prepare query and execute
		$query = "UPDATE patient SET name='$name', status='$status' WHERE id=$id";
		$result = $db->query($query);
		var_dump($result);

	
    // Tell the browser to go back to the index page.
   // header("Location: ./");
    exit();
	endif;

?>