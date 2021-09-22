<?php
session_start();
require_once('../model/orderModel.php');
require_once('../model/seedModel.php');

if(isset($_POST['submit']))
{
	
		$type = "excepted";

		$orders = [
			'type'=> $type							
					];				
		

		$id = $_SESSION['thisOrderId'];

		$id = $_SESSION['thisOrderId'];
		$orderName = $_SESSION['ordername'];
		$orderQuantity = $_SESSION['orderquantity'];

		 $seed = getAllSeed();
		 for ($i=0; $i < count($seed) ; $i++) 
		 { 

		 	if ($seed[$i]['name'] == $orderName) 
		 	{

		 		if($seed[$i]['quantity'] > $orderQuantity)
		 		{
		 			$quantity = $seed[$i]['quantity'] - $orderQuantity;
		 				
		 			$id1 = $seed[$i]['id'];
		 			$status1 = updateQuantity($quantity, $id1);

		 			if($status1)
		 			{
		 				$status = updateOrder($orders, $id);

						if($status)
						{
							if($_SESSION['ordertype'] == 'excepted')
							{
								header('location: ../view/order/orderExcepted.php');
								unset($_SESSION['thisOrderId']);
								unset($_SESSION['ordertype']);
							}
							else{
								header('location: ../view/order/orderUnexcepted.php');
								unset($_SESSION['thisOrderId']);
								unset($_SESSION['ordertype']);
							}
						}
						else{
							echo "error....update failed to order list.....";
						}
						echo "error....update failed to order list.....";
						echo $id1;
		 			}else{
		 				echo "error.....update failed to seed list.....";
		 			}

		 		}else{
		 			echo "This quantity is not available.......";
		 		}		 		
		 		
		 	}else{
		 		echo "This product is not available.......";
		 	}
		 	
		 }

		// $status = updateOrder($orders, $id);

		// if($status)
		// {
		// 	if($_SESSION['ordertype'] == 'excepted')
		// 	{
		// 		header('location: ../view/order/orderExcepted.php');
		// 		unset($_SESSION['thisOrderId']);
		// 		unset($_SESSION['ordertype']);
		// 	}
		// 	else{
		// 		header('location: ../view/order/orderUnexcepted.php');
		// 		unset($_SESSION['thisOrderId']);
		// 		unset($_SESSION['ordertype']);
		// 	}

		// }
		// else{
		// 	echo "error";
		// }					
}
elseif(isset($_POST['delete']))
{

		$id = $_SESSION['thisOrderId'];

		$status = deleteOrder($id);

		if($status)
		{
			if($_SESSION['ordertype'] == 'excepted')
			{
				header('location: ../view/order/orderExcepted.php');
				unset($_SESSION['thisOrderId']);
				unset($_SESSION['ordertype']);
			}
			else{
				header('location: ../view/order/orderUnexcepted.php');
				unset($_SESSION['thisOrderId']);
				unset($_SESSION['ordertype']);
			}
		}
		else{
			echo "error";
		}	
									

	}
?>