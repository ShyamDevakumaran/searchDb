<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$keyword = $_POST['keyword'];
		$description = $_POST['description'];
		$command = $_POST['command'];
		$sql = "INSERT INTO members (keyword, description, command) VALUES ('$keyword', '$description', '$command')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'NEW JBQUERY ADDED';
		}
		
		
		else{
			$_SESSION['error'] = 'OOPS.. ERROR';
		}
	}
	else{
		$_SESSION['error'] = 'ADD FIRST';
	}

	header('location: admin.php');
?>