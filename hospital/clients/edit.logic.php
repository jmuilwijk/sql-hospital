<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$client = NULL;
		if (isset($_GET['id'])):
			// Get Client for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM clients WHERE id='$id'";
			
			$result = $db->query($query);
			

			$client = $result->fetch_assoc();	
	
		endif;
		if ($client == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');

		// Prepare data for update
		$id = $db -> escape_string($_POST['id']);
		$name = $db -> escape_string($_POST['name']);

		// Prepare query and execute
		$query = "UPDATE clients SET name='$name' WHERE id=$id";
		$result = $db->query($query);


	
    //Tell the browser to go back to the index page.
   header("Location: ./");
    exit();
	endif;

?>