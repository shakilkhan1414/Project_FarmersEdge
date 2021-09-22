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
	$pname = $_POST['pname'];
	$quantity = $_POST['quantity'];
	$descript = $_POST['descript'];
	$date = $_POST['date'];

	if( $title == "" || $file == "" || $pname == ""  || $quantity == "" || $descript == "" || $date == "")
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

				// for product name
				if(strlen($pname)>3)
				{
				for ($i=0; $i < strlen($pname) ; $i++)
				{
					if(($pname[$i]>="a" && $pname[$i] <= "z") || ($pname[$i] >= "A" && $pname[$i] <= "Z") || ($pname[$i]>="0" && $pname[$i] <= "9"))
					{ 
						$count2 +=1;
						
					}else{
						$count2 -=1;
					}
				}
				}else{
				echo "Failed....Input at least  charcter at product name.....";
				echo "<br>";
				}

				// fir quantity
				if(strlen($quantity)>= 1)
				{
				for ($i=0; $i < strlen($quantity) ; $i++)
				{
					if($quantity[$i]>="0" && $quantity[$i] <= "9")
					{ 
						$count4 +=1;
						
					}else{
						$count4 -=1;
					}
				}
				}else{
				echo "Failed....Input at least 1  charcter at product quantity.....";
				echo "<br>";
				}

				//description
				if(strlen($descript)>100)
				{
					$count3 +=1;
				}


				
				// print
				if(  strlen($title)== $count && $count1 == 1  && strlen($pname) == $count2 && $count3 == 1 && strlen($quantity) == $count4)
				{

						$fp= fopen(('../assets/'.$pname.'.txt'), 'w');
						fwrite($fp, $descript);
						$name = $pname.'.txt';
	
						$advertise = [

							'title'=> $title,
							'file'=> $file,
							'pname'=> $pname,
							'quantity'=> $quantity,
							'fname'=> $name,
							'date' => $date,
							'bid' => $_SESSION['id']
									];	

									 // echo $title;
									 // echo $file; 	
									 // echo $pname ;
									 // echo $quantity;
									 // echo $descript;
									 // echo $date;
									 // echo $name;
									 // echo $name;


						$status = insertAdvertise($advertise);

						if($status)
						{
							header('location: ../view/advertise/addadvertise.php');
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
				if(strlen($pname)!= $count2){
					echo "Invalid seed name!!!.....Product name can contain alpha numeric characters only.......";
					echo "<br>";
				}
				if ($count3 != 1) {
					echo "Invalid description!!!.....Input at least 100 charcter at description............";				
					echo "<br>";
				}
				if (strlen($quantity) != $count3) {
					echo "Invalid description!!!.....Input at least 100 charcter at description............";				
					echo "<br>";
				}
				
				?>
				<a href="../view/advertise/addadvertise.php">Back</a>
				<?php
			}
		}
	}
?>