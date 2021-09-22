<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{

			$status = validateUser($username, $password);
			if($status){
				$user = getUserByName($username, $password);

				$_SESSION['flag'] = true;
				$_SESSION['id'] = $user['id'];
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				setcookie('log', '1' , time()+(600));
				header('location: ../view/home.php');
							
			}else{
				echo "Please enter correct information...";
			}
		}
	}
?>
