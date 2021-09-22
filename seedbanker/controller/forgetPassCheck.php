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
		echo "failed to update....";
		?>
		<a href="../controller/logout.php">back</a>

		<?php
	}
	else{

        	if(strlen($npass)<=8)
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
								echo "failed";
							}

					}
					else{
							echo "new password and retype new password must be same....";
							?>
							<a href="../controller/logout.ph">back</a>

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
					echo "Failed.....insert less than eight (8) characters......";
					echo "<br>";
					?>
						<a href="../view/changepass.php">back</a>

						<?php
			}
        
		
	}
}

?>