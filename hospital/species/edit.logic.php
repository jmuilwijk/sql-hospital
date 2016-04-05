<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$spieces = NULL;
		if (isset($_GET['id'])):
			// Get spieces for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM spieces WHERE id='$id'";
			
			$result = $db->query($query);
			

			$spieces = $result->fetch_assoc();	
	
		endif;
		if ($spieces == NULL):
			// No spieces found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');

		// Prepare data for update
		$id = $db -> escape_string($_POST['id']);
		$spieces = $db -> escape_string($_POST['spieces']);

		// Prepare query and execute
		$query = "UPDATE spieces SET spieces='$spieces' WHERE id=$id";
		$result = $db->query($query);
	
    //Tell the browser to go back to the index page.
   header("Location: ./");
    exit();
	endif;

?>