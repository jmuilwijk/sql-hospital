<?php
	$db = new mysqli('localhost','root','','hospital');

	$column = isset($_GET['column']) ? $_GET['column'] : null;
	$sort = isset($_GET['sort']) ? $_GET['sort'] : null;
	$displaysort = isset($sort) && $sort == "asc" ? "desc" : "asc"; 
	$columnsort = $column && $sort ? " ORDER BY " . $column . " " . $sort : "";

	$query = "SELECT patient.id AS patient_id, patient.name AS patient_name, patient.species_id AS patient_species, 
	patient.status, patient.gender, patient.clients_id,species.id AS client_id, species.species AS 
	species_species, clients.name AS clients_name from patient INNER JOIN species ON patient.species_id=species.id 
	INNER JOIN clients ON patient.clients_id=clients.id " . $columnsort;
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>