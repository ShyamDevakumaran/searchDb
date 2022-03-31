<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM members WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'DATA DELETED';
		}
	
		
		else{
			$_SESSION['error'] = 'OPPS..ERROR';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: admin.php');
?>