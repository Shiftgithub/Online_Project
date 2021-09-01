<?php
	$conn = new mysqli('localhost', 'root', '', 'project_onlinepayrollphp');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>