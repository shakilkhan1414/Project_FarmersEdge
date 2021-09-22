<?php
	session_start();
		

	require_once('../model/userModel.php');
	$id = $_SESSION['id'];

	$status = deleteUser($id);

	if($status)
	{
	header('location: ../view/logout.php');
	}
	else{
		echo "error";
	}
?>


