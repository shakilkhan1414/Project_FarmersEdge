<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$file=$_REQUEST['file'];

	if($file == "")
	{
		echo "failed to update....";
		header('location: ../view/viewprofile.php');
	}
	else{

		if(file_exists("../controller/list.json"))
			{
				$myfile = fopen('../controller/list.json', 'r');
				$data = fread($myfile, filesize('list.json'));
				$user = json_decode($data, true);
				
				for ($i=0; $i < sizeof($user); $i++)
           		{
	                    if($user[$i]['id']==$_SESSION['id'])
	                    {
	                        $user[$i]['file']=$file;
	                       
							$data1 = json_encode($user);
							$myfile1 = fopen('../controller/list.json', 'w');
							fwrite($myfile1, $data1);

							header('location: ../view/viewprofile.php');	
						}
				}
			}else{
				echo "file does not found....";
				echo "<br>";
			}

	}
}