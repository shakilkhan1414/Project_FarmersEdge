<?php
session_start();
require_once('../model/userModel.php');

if(isset($_POST['submit']))
{
	$count = 0;
	$cpass = $_POST['currentpass'];
	$npass = $_POST['newpass'];
	$rnpass = $_POST['retypenewpass'];

	if($cpass == "" || $cpass == "" || $rnpass == "")
	{
		echo "failed to update....";
		?>
		<a href="../view/user/changepass.php">back</a>

		<?php
	}
	else{

        if($_SESSION['password'] == $cpass)
        {
        	if(strlen($npass)<=10)
        	{
				if(strpos($npass, "@") || strpos($npass, "#") || strpos($npass, "$") || strpos($npass, "%"))
				{
					if($npass==$rnpass)
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
							echo "new password and retype new password must be same....";
							?>
							<a href="../view/changepass.php">back</a>

							<?php						
					}
				}					
				else{
						echo "Failed.....password must contain atleast one('@','#','$','%'......";
						?>
						<a href="../view/changepass.php">back</a>

						<?php
				}
			}
			else{
					echo "Failed.....insert less than 10 characters......";
					echo "<br>";
					?>
						<a href="../view/changepass.php">back</a>

						<?php
			}
        }
        else{
        		echo "Invalid current password";
        		?>
				<a href="../view/changepass.php">back</a>

				<?php
        }
		
	}
}

?>