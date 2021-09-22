<?php
session_start();
require_once('../model/userModel.php');

if(isset($_POST['submit'])){
	$count = 0;
	$count1 = 0;
	$count2 = 0;
	$count3 = 0;
	$count4 = 0;
	$count5 = 0;

	
    $name=$_REQUEST['name'];
    $username=$_REQUEST['username'];
    $thana=$_REQUEST['thana'];
    $district=$_REQUEST['district'];
    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];
    $gender=$_REQUEST['gender'];
    $bdate= $_POST['bdate'];
    



	if($name == "" || $username == "" || $thana == "" || $district == "" || $phone == "" || $email == "" || (isset($_POST['gender'])) == false ||  $bdate == "")
		{
			echo "failed to update....";
			?>


			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Document</title>
			</head>
			<body>
				<a href="../view/viewprofile.php">Back</a>
			</body>
			</html>
			
<?php
		}else{
				// for name
				if(strlen($name)>1)
				{
				for ($i=0; $i < strlen($name) ; $i++)
				{
					if(($name[$i]>="a" && $name[$i] <= "z") || ($name[$i] >= "A" && $name[$i] <= "Z") || $name[$i] == "_" || $name[$i] == "-" || $name[$i] == ".")
					{ 
						$count+=1;
					}else{
						$count-=1;
					}
				}
				}else{
				echo "Failed....Input at least 2 charcter at Name.....";
				echo "<br>";
				}
				// for username
				if(strlen($username)>1)
				{
					for ($i=0; $i < strlen($username) ; $i++)
					{
						if(($username[$i]>="a" && $username[$i] <= "z") || ($username[$i] >= "A" && $username[$i] <= "Z") || $username[$i] == "_" || ($username[$i] >= "0" && $username[$i] == "9"))
						{ 
							$count1+=1;
						}else{
							$count1-=1;
						}
					}
				}else{
					echo "Failed....Input at least 2 charcter at username.....";
					echo "<br>";
				}
				// for thana
				if(strlen($thana)>1)
				{
					for ($i=0; $i < strlen($thana) ; $i++)
					{
						if(($thana[$i]>="a" && $thana[$i] <= "z") || ($thana[$i] >= "A" && $thana[$i] <= "Z"))
						{ 
							$count2+=1;
						}else{
							$count2-=1;
						}
					}
				}else{
					echo "Failed....Input at least 2 charcter at thana.....";
					echo "<br>";
				}
				// for district
				if(strlen($district)>1)
				{
					for ($i=0; $i < strlen($district) ; $i++)
					{
						if(($district[$i]>="a" && $district[$i] <= "z") || ($district[$i] >= "A" && $district[$i] <= "Z"))
						{ 
							$count3+=1;
						}else{
							$count3-=1;
						}
					}
				}else{
						echo "Failed....Input at least 2 charcter at username.....";
						echo "<br>";
				}
				// for email
				if(strlen($email)>2)
				{
					if(strpos($email, "@"))
						{
							$count4=1;					
						}else{
							$count4-=1;
						}						
				}
				else{
					echo "Failed....Input at least 3 charcter at email......";
							echo "<br>";
				}
				//for phone
				if(strlen($phone)<=11)
				{
					for ($i=0; $i < strlen($phone) ; $i++)
					{
						if($phone[$i]>="0" && $phone[$i] <= "9")
						{
							$count5 += 1;					
						}
					}
				}else{
					echo "Invalid phone number......";
					echo "<br>";
				}


				if(strlen($name)== $count && strlen($username) == $count1 && strlen($thana) == $count2 && strlen($district) == $count3 &&  $count4 == 1 && strlen($phone) == $count5)
				{
					

					$id= $_SESSION['id'];
					$user = [								
							'name'=> $name,
							'username'=>$username, 
							'thana'=> $thana,
							'district'=> $district,
							'email'=> $email,
							'phone'=> $phone,
							'gender'=> $gender,	
							'bdate' => $bdate,
									];	

						$status = updateUser($user, $id);

						if($status)
						{
							$_SESSION['username'] = $username;
							header('location: ../view/user/viewprofile.php');
							
						}else{
							echo "error";
						}

				}else{
				if(strlen($name)!= $count){
					echo "Invalid name!!!.....Name can contain alpha numeric characters, period, dash or underscore only.......";
					echo "<br>";
				}
				if (strlen($username)!= $count1) {
					echo "Invalid username!!!.....userame can contain alpha numeric & numeric characters,underscore only.......";				echo "<br>";
				}
				if (strlen($thana) != $count2) {
					echo strlen($username);
					echo "<br>";
					echo $count2;
					echo "Invalid thana!!!.....thana can contain alpha numeric characters.......";
					echo "<br>";
				}
				if (strlen($district)!= $count3) {
					echo "Invalid district!!!....district can contain alpha numeric characters.......";
					echo "<br>";
				}
				if ($count4 != 1) {
					echo "Invalid email!!!....email must contain '@'.......";
					echo "<br>";
				}
				if (strlen($phone)!= $count5) {
					echo "Day cannot less than 1 and over 31";
					echo "<br>";
				}
				
				}
				
			}
		}
	

?>