<?php
	
	require_once('connection.php');

	function userLoginCheck($username,$password){

		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";

        $result = $conn->query($sql);
		if($result-> num_rows > 0){
            $row=$result->fetch_assoc();
            $_SESSION['login']=true;
            $_SESSION['id']=$row['id'];
            return true;
        }
        else{
            return false;
        }
	}

	function getUserById($id){

		$conn = getConnection();

		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}

		return $users;
	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into users values('','{$user['firstname']}','{$user['lastname']}','{$user['username']}','{$user['email']}','{$user['password']}','{$user['gender']}', '{$user['dob']}','{$user['profile_image']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUser($user){
		$conn = getConnection();
		$sql = "update users set first_name='{$user['firstname']}', last_name='{$user['lastname']}', username='{$user['username']}', email='{$user['email']}', gender='{$user['gender']}', dob='{$user['dob']}' where id='{$user['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function searchUser($name){
		$conn = getConnection();
		$sql="select * from users where name like '%$name%'";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}
		return $users;
	}
?>