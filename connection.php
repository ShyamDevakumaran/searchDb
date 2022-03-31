<?php
	
	$conn = new mysqli('localhost', 'root', '', 'jbsearch');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
	
?>