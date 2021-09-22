<?php
session_start();
require_once('../model/advertiseModel.php');

if(isset($_POST['submit']))
{
	$count = 0;
	$count1 = 0;
	$count2 = 0;
	$count3 = 0;
	

	$title = $_POST['title'];
	$file = $_POST['file'];	
	$descript = $_POST['descript'];
	$pname = $_POST['pname'];
	$date = $_POST['date'];

	if( $title == "" || $file == "" || $descript == "" || $pname == "" || $date == "")
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

				// for description
				if(strlen($descript)>100)
				{
					$count2 +=1;
				}

				// for product name
				if(strlen($pname)>2)
				{
				for ($i=0; $i < strlen($pname) ; $i++)
				{
					if(($pname[$i]>="a" && $pname[$i] <= "z") || ($pname[$i] >= "A" && $pname[$i] <= "Z") || ($pname[$i]>="0" && $pname[$i] <= "9") || $pname[$i] == "_")
					{ 
						$count3 +=1;
						
					}else{
						$count3 -=1;
					}
				}
				}else{
				echo "Failed....Input at least 2 charcter at seed name.....";
				echo "<br>";
				}

				
				// print section
				if(  strlen($title)== $count && $count1 == 1  && $count2 == 1 && strlen($pname) == $count3)
				{

						$filename = $_SESSION['thisFile'];
						$myfile= fopen(('../assets/'.$filename), 'w');
						fwrite($myfile, $descript);
	
						$advertise = [

							'title'=> $title,
							'file'=> $file,
							'pname'=> $pname,
							'date' => $date
									];				
						
						$id = $_SESSION['thisAdId'];
						$status = updateAdvertise($advertise, $id);

						if($status)
						{
							header('location: ../view/ad/updateadvertise.php');
							unset($_SESSION['thisFile']);
							unset($_SESSION['thisAdId']);
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
				if ($count2 != 1) {
					echo "Invalid description!!!.....Input at least 100 charcter at description............";				
					echo "<br>";
				}
				
				if (strlen($pname) != $count3) {
					echo "Invalid seed name!!!....write the file name in correct format.......";
					echo "<br>";
				}
					?>
  				<a href="../view/advertise/addadvertise.php">Back</a> 
  				<?php
			}
 		}
}elseif(isset($_POST['delete']))
{
		echo "string";

		$id = $_SESSION['thisAdId'];

		$status = deleteAdvertise($id);

		if($status)
		{
		header('location: ../view/advertise/updateadvertise.php');
		unset($_SESSION['thisFile']);
		unset($_SESSION['thisAdId']);

		}
		else{
			echo "faild to execute";
		}
}
?>




