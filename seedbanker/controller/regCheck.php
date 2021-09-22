<?php
session_start();
require_once('../model/userModel.php');

if(isset($_POST['submit'])){
	// $count = 0;
	// $count1 = 0;
	// $count2 = 0;
	// $count3 = 0;
	// $count4 = 0;
	// $count5 = 0;
	// $count6 = 0;
	// $count7 = 0;
	// $count8 = 0;
	// $count9 = 0;
	// $count10 = 0;
	$file = $_POST['file'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$thana = $_POST['thana'];
	$district = $_POST['district'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$bdate = $_POST['date'];
	if(isset($_POST['gender'])){
		$gender = $_POST['gender'];
	}
	$password = $_POST['password'];
	$repass = $_POST['repass'];
	// $day = $_POST['day'];
	// $month = $_POST['month'];
	// $year = $_POST['year'];

	

	// // if($name == "" || $username == "" || $thana == "" || $district == "" || $phone == "" || $email == "" || (isset($_POST['gender'])) == false || $password == "" || $repass == "" ||  $day == "" || $month == "" || $year == "" || $file == "")
	// if($name == "" || $username == "" || $thana == "" || $district == "" || $phone == "" || $email == "" || (isset($_POST['gender'])) == false || $password == "" || $repass == "" ||  $bdate == "" || $file == "")
	// 	{
	// 	echo "null submission...";
	// 	}else{

	// 			// for profile pic
	// 			$extention = pathinfo($file, PATHINFO_EXTENSION);
	// 			if($extention== "jpeg" || $extention== "jpg" || $extention== "png")
	// 			{	

	// 				$count10 = 1;

	// 			}else{
	// 				echo "Invalid file extension and size..... ";
	// 			}

	// 			// for name
	// 			if(strlen($name)>1)
	// 			{
	// 			for ($i=0; $i < strlen($name) ; $i++)
	// 			{
	// 				if(($name[$i]>="a" && $name[$i] <= "z") || ($name[$i] >= "A" && $name[$i] <= "Z") || $name[$i] == "_" || $name[$i] == "-" || $name[$i] == ".")
	// 				{ 
	// 					$count+=1;
	// 				}else{
	// 					$count-=1;
	// 				}
	// 			}
	// 			}else{
	// 			echo "Failed....Input at least 2 charcter at Name.....";
	// 			echo "<br>";
	// 			}
	// 			// for username
	// 			if(strlen($username)>1)
	// 			{
	// 				for ($i=0; $i < strlen($username) ; $i++)
	// 				{
	// 					if(($username[$i]>="a" && $username[$i] <= "z") || ($username[$i] >= "A" && $username[$i] <= "Z") || $username[$i] == "_" || ($username[$i] >= "0" && $username[$i] == "9"))
	// 					{ 
	// 						$count1+=1;
	// 					}else{
	// 						$count1-=1;
	// 					}
	// 				}
	// 			}else{
	// 				echo "Failed....Input at least 2 charcter at username.....";
	// 				echo "<br>";
	// 			}
	// 			// for thana
	// 			if(strlen($thana)>1)
	// 			{
	// 				for ($i=0; $i < strlen($thana) ; $i++)
	// 				{
	// 					if(($thana[$i]>="a" && $thana[$i] <= "z") || ($thana[$i] >= "A" && $thana[$i] <= "Z"))
	// 					{ 
	// 						$count2+=1;
	// 					}else{
	// 						$count2-=1;
	// 					}
	// 				}
	// 			}else{
	// 				echo "Failed....Input at least 2 charcter at thana.....";
	// 				echo "<br>";
	// 			}
	// 			// for district
	// 			if(strlen($district)>1)
	// 			{
	// 				for ($i=0; $i < strlen($district) ; $i++)
	// 				{
	// 					if(($district[$i]>="a" && $district[$i] <= "z") || ($district[$i] >= "A" && $district[$i] <= "Z"))
	// 					{ 
	// 						$count3+=1;
	// 					}else{
	// 						$count3-=1;
	// 					}
	// 				}
	// 			}else{
	// 					echo "Failed....Input at least 2 charcter at username.....";
	// 					echo "<br>";
	// 			}
	// 			// for email
	// 			if(strlen($email)>2)
	// 			{
	// 				if(strpos($email, "@"))
	// 					{
	// 						$count4=1;					
	// 					}else{
	// 						$count4-=1;
	// 					}						
	// 			}
	// 			else{
	// 				echo "Failed....Input at least 3 charcter at email......";
	// 						echo "<br>";
	// 			}
	// 			//for phone
	// 			if(strlen($phone)<=11)
	// 			{
	// 				for ($i=0; $i < strlen($phone) ; $i++)
	// 				{
	// 					if($phone[$i]>="0" && $phone[$i] <= "9")
	// 					{
	// 						$count5 += 1;					
	// 					}
	// 				}
	// 			}else{
	// 				echo "Invalid...Phone number should be in 11 characters......";
	// 				echo "<br>";
	// 			}
				// for birthdate
				// day
				// if(strlen($day)<=2)
				// {
				// 	for ($i=0; $i < strlen($day) ; $i++)
				// 	{
				// 		if($day[$i]>="0" && $day[$i] <= "9")
				// 		{	
				// 		    if($day>=1 && $day <=31)
				// 			{
				// 				$count6= 1;
				// 			}					
				// 		}else{
				// 			echo "Invalid day input......";
				// 			echo "<br>";
				// 		}
				// 	}
				// }else{
				// 	echo "Invalid.....day cannot go over 2 digits......";
				// 	echo "<br>";
				// }
				//for month
				// if(strlen($month)<=2)
				// {
				// 	for ($i=0; $i < strlen($month) ; $i++)
				// 	{
				// 		if($month[$i]>="0" && $month[$i] <= "9")
				// 		{	
				// 		    if($month>=1 && $month <=12)
				// 				{
				// 					$count7= 1;
				// 				}					
				// 		}else{
				// 			echo "Invalid month input......";
				// 			echo "<br>";
				// 		}
				// 	}
				// }else{
				// 	echo "Invalid.....month cannot go over 2 digits......";
				// 	echo "<br>";
				// }
				//for year 
				// if(strlen($year)<=4)
				// {
				// 	for ($i=0; $i < strlen($year) ; $i++)
				// 	{
				// 		if($year[$i]>="0" && $year[$i] <= "9")
				// 		{	
				// 		    if($year>=1950 && $year <=2030)
				// 			{
				// 				$count8= 1;
				// 			}					
				// 		}else{
				// 			echo "Invalid year input......";
				// 			echo "<br>";
				// 		}
				// 	}
				// }else{
				// 	echo "Invalid.....year cannot go over 4 digits......";
				// 	echo "<br>";
				// }
			// for password
				// if(strlen($password)<=8){
				// 	if(strpos($password, "@") || strpos($password, "#") || strpos($password, "$") || strpos($password, "%"))
				// 	{
				// 		$count9=1;					
				// 	}
				// }else{
				// 	echo "Failed.....insert less than eight (8) characters......
				// 	";
				// 	echo "<br>";
				// }
				
				// print section
				// if(strlen($name)== $count && strlen($username) == $count1 && strlen($thana) == $count2 && strlen($district) == $count3 &&  $count4 == 1 && strlen($phone) == $count5 && $count6 == 1 && $count7 == 1 && $count8 == 1 && $count9 == 1 && $count10 ==1)
				// if(strlen($name)== $count && strlen($username) == $count1 && strlen($thana) == $count2 && strlen($district) == $count3 &&  $count4 == 1 && strlen($phone) == $count5 && $count9 == 1 && $count10 ==1)
				// {
				// 	if($password == $repass)
				// 	{

						// $myfile = fopen('../controller/list.json', 'r');
						// $data = fread($myfile, filesize('list.json'));
						// $user1 = json_decode($data, true);
						// $id=count($user1)+1;

						$user = [
							'file'=>$file,	
							'name'=> $name,
							'username'=>$username, 
							'thana'=> $thana,
							'district'=> $district,
							'email'=> $email,
							'phone'=> $phone,
							'gender'=> $gender,	
							// 'day'=>$day,
							// 'month'=>$month,
							// 'year'=>$year,
							'bdate' => $bdate,
							'password'=>$password,
							
									];	

						$status = insertUser($user);

						if($status)
						{
							header('location: ../view/login.php');
							
						}else{
							echo "error";
						}

						// array_push($user1, $user);

						// $data1 = json_encode($user1);
						// $myfile1 = fopen('../controller/list.json', 'w');
						// fwrite($myfile1, $data1);

						// header('location: ../view/login.html');	

			// 		}else{
			// 			echo "password and confirm password must be same....";
			// 			echo "<br>";
			// 		}

			// 	}else{
			// 	if(strlen($name)!= $count){
			// 		echo "Invalid name!!!.....Name can contain alpha numeric characters, period, dash or underscore only.......";
			// 		echo "<br>";
			// 	}
			// 	if (strlen($username)!= $count1) {
			// 		echo "Invalid username!!!.....userame can contain alpha numeric & numeric characters,underscore only.......";				echo "<br>";
			// 	}
			// 	if (strlen($thana) != $count2) {
			// 		echo strlen($username);
			// 		echo "<br>";
			// 		echo $count2;
			// 		echo "Invalid thana!!!.....thana can contain alpha numeric characters.......";
			// 		echo "<br>";
			// 	}
			// 	if (strlen($district)!= $count3) {
			// 		echo "Invalid district!!!....district can contain alpha numeric characters.......";
			// 		echo "<br>";
			// 	}
			// 	if ($count4 != 1) {
			// 		echo "Invalid email!!!....email must contain '@'.......";
			// 		echo "<br>";
			// 	}
			// 	if (strlen($phone)!= $count5) {
			// 		echo "phone no will be in number........";
			// 		echo "<br>";
			// 	}
			// 	// if ($count6 != 1) {
			// 	// 	echo "Day cannot less than 1 and over 31";
			// 	// 	echo "<br>";
			// 	// }
			// 	// if ($count7 != 1) {
			// 	// 	echo "Month cannot less than 1 and over 12";
			// 	// 	echo "<br>";
			// 	// }
			// 	// if ($count8 != 1) {
			// 	// 	echo "year must be in 1950 t0 2030";
			// 	// 	echo "<br>";
			// 	// }
			// 	if ($count9 != 1) {
			// 		echo "Failed to insert!!!....In password,Insert least one of the special characters (@, #, $, %).......";
			// 		echo "<br>";
			// 		$gender = "";
			// 	}
			// 	if ($count10 !=1) {
			// 		echo "Choose correct file.......";
			// 		echo "<br>";
			// 	}
			// }
		}
	// }if(isset($_POST['reset'])){
	// 	$name = "";
	// 	$username = "";
	// 	$thana = "";
	// 	$district = "";
	// 	$phone = "";
	// 	$email = "";
	// 	$gender = "";
	// 	$password = "";
	// 	$repass = "";
	// 	$day = "";
	// 	$month = "";
	// 	$year = "";
	// 	$file = "";
	// }
?>