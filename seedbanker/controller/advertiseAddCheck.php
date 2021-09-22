<?php
session_start();
require_once('../model/advertiseModel.php');

if(isset($_POST['submit'])){
	$count = 0;
	$count1 = 0;
	$count2 = 0;
	$count3 = 0;
	$count4 = 0;
	

	$title = $_POST['title'];
	$file = $_POST['file'];		
	$sname = $_POST['sname'];
	$descript = $_POST['descript'];
	$filename = $_POST['filename'];
	$date = $_POST['date'];

	if( $title == "" || $file == "" || $descript == "" || $sname == "" || $filename == "" || $date == "")
		{
		echo "null submission...";
		}else{

				// for title
				if(strlen($title)>10)
				{
				for ($i=0; $i < strlen($title) ; $i++)
				{
					if(($title[$i]>="a" && $title[$i] <= "z") || ($title[$i] >= "A" && $title[$i] <= "Z") || ($title[$i]>="0" && $title[$i] <= "9") || $title[$i] == '_' || $title[$i] == ',' || $title[$i] == ' ')
					{ 
						$count +=1;
					}else{
						$count -=1;
					}
				}
				}else{
				echo "Failed....Input at least 10 charcter at title.....";
				echo "<br>";
				}

				// for picture
				$extention = pathinfo($file, PATHINFO_EXTENSION);

				if($extention== "jpeg" || $extention== "jpg" || $extention== "png")
				{	
					$count1 = 1;
				}

				// for seed name
				if(strlen($sname)>3)
				{
				for ($i=0; $i < strlen($sname) ; $i++)
				{
					if(($sname[$i]>="a" && $sname[$i] <= "z") || ($sname[$i] >= "A" && $sname[$i] <= "Z") || ($sname[$i]>="0" && $sname[$i] <= "9"))
					{ 
						$count2 +=1;
						
					}else{
						$count2 -=1;
					}
				}
				}else{
				echo "Failed....Input at least  charcter at seed name.....";
				echo "<br>";
				}

				// for description
				if(strlen($descript)>100)
				{
					$count3 +=1;
				}

				// for file name
				if(strlen($filename)>2)
				{
				for ($i=0; $i < strlen($filename) ; $i++)
				{
					if(($filename[$i]>="a" && $filename[$i] <= "z") || ($filename[$i] >= "A" && $filename[$i] <= "Z") || ($filename[$i]>="0" && $filename[$i] <= "9") || $filename[$i] == "_")
					{ 
						$count4 +=1;
						
					}else{
						$count4 -=1;
					}
				}
				}else{
				echo "Failed....Input at least 2 charcter at file name.....";
				echo "<br>";
				}


				
				// print section
				if(  strlen($title)== $count && $count1 == 1  && strlen($sname) == $count2 && $count3 == 1 && strlen($filename) == $count4)
				{
					

						// $myfile = fopen('../controller/seed.json', 'r');
						// $data = fread($myfile, filesize('seed.json'));
						// $user1 = json_decode($data, true);
						// $id=count($user1)+1;


						$fp= fopen(('../assets/'.$filename.'.txt'), 'w');
						fwrite($fp, $descript);
						$name = $filename.'.txt';
	
						$advertise = [

							'title'=> $title,
							'file'=> $file,
							'sname'=> $sname,
							'fname'=> $name,
							'date' => $date,
							'sbid' => $_SESSION['id']
									];				
						// array_push($user1, $user);

						// $data1 = json_encode($user1);
						// $myfile1 = fopen('../controller/seed.json', 'w');
						// fwrite($myfile1, $data1);

						// header('location: ../view/seed/addseed.php');

						$status = insertAdvertise($advertise);

						if($status)
						{
							header('location: ../view/ad/addadvertise.php');
						}
						else{
							echo "error";
						}	

				}else{

				if(strlen($title)!= $count){
					echo "Invalid title!!!.....title can contain alpha numeric characters only.......";
					echo "<br>";
				}
				if ($count1 !=1) {
				echo "Choose correct file.......";
				echo "<br>";
				}
				if(strlen($sname)!= $count2){
					echo "Invalid seed name!!!.....Seed name can contain alpha numeric characters only.......";
					echo "<br>";
				}
				if ($count3 != 1) {
					echo "Invalid description!!!.....Input at least 100 charcter at description............";				
					echo "<br>";
				}
				
				if (strlen($filename) != $count4) {
					echo "Invalid file name!!!....write the file name in correct format.......";
					echo "<br>";
				}
				?>
				<a href="../view/ad/addadvertise.php">Back</a>
				<?php
			}
		}
	}if(isset($_POST['reset'])){
		$file = "";
		$title = "";
		$quantity = "";
		$price = "";
		$date = "";
		header('location: ../view/addseed.php');
	}
?>