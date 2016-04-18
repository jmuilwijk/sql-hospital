<?php
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT patient.id AS patient_id, patient.name, patient.species_id AS patient_species, 
	patient.status, patient.gender, patient.clients_id,species.id AS client_id, species.species AS 
	species_species from patient INNER JOIN species ON patient.species_id=species.id";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>