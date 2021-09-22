<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		// if(isset($_POST['submit']))
		// {
		// $check = $_POST['check'];
		// }


		if($username == "" || $password == ""){
			$_SESSION['echo0'] = "Fill the required fields";
			header('location: ../view/login.php');
		}else{

			$status = validateUser($username, $password);
			if($status)
			{
				$user = getUserByName($username, $password);

				$_SESSION['flag'] = true;
				$_SESSION['id'] = $user['id'];
				// $_SESSION['type'] = $user['type'];
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				// $_SESSION['check'] = $check;
				header('location: ../view/home.php');
							
			}else{
				$_SESSION['echo1'] = "invalid user and password";
				header('location: ../view/login.php');
			}
		}
	}
?>
