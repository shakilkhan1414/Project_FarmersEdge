<?php
session_start();

if(isset($_POST['submit'])){
	$count = 0;
	$count1 = 0;
	$count2 = 0;
	$count3 = 0;

	$file = $_POST['file'];
	$sname = $_POST['sname'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$date = $_POST['date'];
	

	if($file == "" || $sname == "" || $quantity == "" || $price == "" || $date == "")
		{
		echo "null submission...";
		}else{

				// for profile pic
				$extention = pathinfo($file, PATHINFO_EXTENSION);

				if($extention== "jpeg" || $extention== "jpg" || $extention== "png")
				{	
					$count = 1;
				}

				// for product name
				if(strlen($sname)>1)
				{
				for ($i=0; $i < strlen($sname) ; $i++)
				{
					if(($sname[$i]>="a" && $sname[$i] <= "z") || ($sname[$i] >= "A" && $sname[$i] <= "Z"))
					{ 
						$count1 +=1;
					}else{
						$count1 -=1;
					}
				}
				}else{
				echo "Enter at least 2 charcter at product Name.....";
				echo "<br>";
				}


				// for quantity
				if(strlen($quantity)<=3)
				{
					for ($i=0; $i < strlen($quantity) ; $i++)
					{
						if($quantity[$i]>="0" && $quantity[$i] <= "9")
						{	
						    if($quantity>=1 && $quantity <=100)
							{
								$count2 = 1;
							}else{
								$count2 = -1;
							}					
						}else{
							echo "Invalid quantity input......";
							echo "<br>";
						}
					}
				}else{
					echo "Invalid!!!..quantity cannot go over 999kg...";
					echo "<br>";
				}
				// for price
				if(strlen($price)>=2)
				{
					for ($i=0; $i < strlen($price) ; $i++)
					{
						if($price[$i] >="0" && $price[$i] <= "9")
						{	
						    if($price>=1)
							{
								$count3 = 1;
							}
							else{
								$count3 = -1;
							}					
						}else{
							echo "Invalid price input......";
							echo "<br>";
						}
					}
				}else{
					echo "Invalid.....price must be over 9 taka...";
					echo "<br>";
				}
				
				// print section
				if($count == 1 && strlen($sname)== $count1 && $count2 == 1 && $count3 == 1)
				{
					

						$user = [	
							'id'=>$id,
							'userid'=>$_SESSION['id'],
							'file'=> $file,
							'sname'=> $sname,
							'quantity'=>$quantity, 
							'price'=> $price,
							'date' => $date
									];				
						array_push($user1, $user);

						$data1 = json_encode($user1);
						$myfile1 = fopen('../controller/seed.json', 'w');
						fwrite($myfile1, $data1);

						header('location: ../view/addproduct.php');	

				}else{

				if ($count !=1) {
				echo "Choose correct file.......";
				echo "<br>";
				}
				if(strlen($sname)!= $count1){
					echo "Invalid seed name!!!.....Name can contain alpha numeric characters only.......";
					echo "<br>";
				}
				if ($count2 != 1) {
					echo "Invalid quantity!!!.....quantity can not over 999kg.......";				
					echo "<br>";
				}
				
				if ($count3 != 1) {
					echo "Invalid price!!!....Enter numeric characters only.....";
					echo "<br>";
				}
				?>
				<a href="../view/addproduct.php">Back</a>
				<?php
			}
		}
	}
?>