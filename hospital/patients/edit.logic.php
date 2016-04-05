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
		$spieces = $db -> escape_string($_POST['patient_spieces']);

		// Prepare query and execute
		$query = "UPDATE patient SET name='$name', status='$status', spieces='$spieces' WHERE id=$id";
		$result = $db->query($query);

	
    //Tell the browser to go back to the index page.
   header("Location: ./");
    exit();
	endif;

?>