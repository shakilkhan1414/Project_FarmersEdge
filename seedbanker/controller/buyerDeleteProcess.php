<?php
	session_start();
	// $myfile = fopen('../controller/list.json', 'r');
	// $data = fread($myfile, filesize('../controller/list.json'));

	// $user = json_decode($data, true);

	// for ($i=0; $i < sizeof($user); $i++) { 

	// 	if($user[$i]['id']==$_SESSION['id']){

	// 		$id1=$_SESSION['id']-1;
	// 		unset($user[$id1]);

	// 		$data = json_encode($user);
	// 		$myfile1 = fopen('../controller/list.json', 'w');
	// 		fwrite($myfile1, $data);

	// 		header('location: logout.php');
	// 		}
	// 	}	

	require_once('../model/buyerModel.php');
	$id = $_SESSION['id'];

	$status = deleteBuyer($id);

	if($status)
	{
	header('location: ../view/buyer_list.php');
	unset($_SESSION['id']);
	}
	else{
		echo "error";
	}
?>


