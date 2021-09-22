<?php
session_start();
require_once('../model/userModel.php');

if(isset($_POST['submit']))
{
	$cpass = $_POST['currentpass'];
	$npass = $_POST['newpass'];
	$rnpass = $_POST['retypenewpass'];


        if($_SESSION['password'] == $cpass)
        {
			unset($_SESSION['password']);
			$username = $_SESSION['username'];
			$id = $_SESSION['id'];

			$status = changeUserByPassword($npass,$username, $id);

			if($status)
			{
				header('location: ../view/user/viewprofile.php');
				$_SESSION['password'] = $npass;
			}
			else{
				echo "failed";
			}
				
        }
        else{
        		$_SESSION['echo1'] = "Invalid current password";
        		header('location: ../view/user/changepass.php');
        		
        }
		
}


?>