<?php
session_start();
require_once('../model/userModel.php');

if(isset($_POST['submit']))
{
	$count = 0;
	
	$npass = $_POST['newpass'];
	$rnpass = $_POST['retypenewpass'];

	if( $npass == "" || $rnpass == "")
	{
		echo "Null submission..";
		?>
		<a href="../controller/logout.php">back</a>

		<?php
	}
	else{

        	if(strlen($npass)<=10)
        	{
				if(strpos($npass, "@") || strpos($npass, "#") || strpos($npass, "$") || strpos($npass, "%"))
				{
					if($npass==$rnpass)
					{

							$username = $_SESSION['username'];
							$id = $_SESSION['id'];

							$status = changeUserByPassword($npass,$username, $id);

							if($status)
							{
								header('location: ../controller/logout.php');
								unset($_SESSION['username']);
								unset($_SESSION['id']);
							}
							else{
								echo "Failed to reset password...";
							}

					}
					else{
							echo "new password and retype new password mismatch....";
							?>
							<br>
							<a href="../controller/logout.php">back</a>

							<?php						
					}
				}					
				else{
						echo "Password must contain atleast one '@','#','$','%'...";
						?>
						<br>
						<a href="../view/resetpassword.php">back</a>

						<?php
				}
			}
			else{
					echo "Insert less than 10 characters...";
					echo "<br>";
					?>
						<a href="../view/resetpassword.php">back</a>

						<?php
			}
        
		
	}
}

?>