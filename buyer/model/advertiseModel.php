<?php
	
	require_once('db.php');

	function getadvertiseById($id){

		$conn = getConnection();

		$sql = "select * from advertise where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllAdvertise(){
		$conn = getConnection();
		$sql = "select * from advertise";
		$result = mysqli_query($conn, $sql);
		$advertise =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($advertise, $row); 
		}

		return $advertise;
	}

	function insertAdvertise($advertise){

		$conn = getConnection();
		$sql = "insert into advertise values('', '{$advertise['title']}', '{$advertise['file']}', '{$advertise['pname']}', '{$advertise['quantity']}', '{$advertise['fname']}', '{$advertise['date']}', '{$advertise['bid']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateAdvertise($advertise, $id){

		$conn = getConnection();
		$sql = "update advertise set title='{$advertise['title']}', picture='{$advertise['file']}', name='{$advertise['pname']}', date='{$advertise['date']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteAdvertise($id){
		$conn = getConnection();
		$sql = "delete from advertise where id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>