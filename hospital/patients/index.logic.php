<?php
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT patient.id AS patient_id, patient.name AS patient_name, patient.spieces AS patient_spieces, 
	patient.status AS patient_status, spieces.id AS spieces_id, spieces.spieces AS 
	spieces_spieces from patient INNER JOIN spieces ON patient.spieces=spieces.id";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>