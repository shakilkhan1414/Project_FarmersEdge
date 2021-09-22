
<?php

	require_once('db.php');

	function validateUser($username, $password){

		$conn = getConnection();

		$sql = "select * from buyer_list where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(isset($row)){
			return true;
		}else{
			return false;
		}
	}
	function getUserByPhone($username, $phone){

		$conn = getConnection();

		$sql = "select * from buyer_list where username='{$username}' and phone='{$phone}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(isset($row)){
			return $row;
		}else{
			return false;
		}
	}

	function getUserByName($username, $password){

		$conn = getConnection();

		$sql = "select * from buyer_list where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return $row;
		}else{
			return false;
		}
	}

	function changeUserByPassword($password, $username, $id){

		$conn = getConnection();

		$sql = "update buyer_list set password='{$password}' where username='{$username}' and id='{$id}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserById($id){

		$conn = getConnection();

		$sql = "select * from buyer_list where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from buyer_list";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}

		return $users;
	}

	function insertUser($user){

		$conn = getConnection();
	

		$sql = "insert into buyer_list values('', '{$user['file']}', '{$user['name']}', '{$user['username']}', '{$user['thana']}', '{$user['district']}', '{$user['email']}', '{$user['phone']}', '{$user['gender']}', '{$user['bdate']}', '{$user['password']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUser($user, $id){

		$conn = getConnection();
		$sql = "update buyer_list set name='{$user['name']}', username='{$user['username']}', thana='{$user['thana']}', district='{$user['district']}', email='{$user['email']}', email='{$user['email']}', phone='{$user['phone']}', gender='{$user['gender']}' , bdate='{$user['bdate']}' where id={$id} ";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUserPicture($file, $id){

		$conn = getConnection();
		$sql = "update buyer_list set picture='{$file}' where id={$id} ";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from buyer_list where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>

