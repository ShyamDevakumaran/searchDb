<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$keyword = $_POST['keyword'];
		$description = $_POST['description'];
		$command = $_POST['command'];
		$sql = "UPDATE members SET keyword = '$keyword', description = '$description', command= '$command' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'DATA UPDATED SUCCESSFULLY';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: admin.php');

?>