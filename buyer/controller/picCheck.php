<?php
session_start();
require_once('../model/userModel.php');

if(isset($_POST['submit']))
{

	$id = $_SESSION['id']; 
	$file=$_POST['file'];

	if($file == "")
	{
		echo "failed to update....";
	}
	else{

				

			$status = updateUserPicture($file, $id);
			if($status){
				header('location: ../view/user/viewprofile.php');
			}
			else{
				echo "error";
			}
								
						
				
			
	}
}

?>