<?php
	require_once('connection.php');

    function adminLoginCheck($username,$password){

		$conn = getConnection();
		$sql = "select * from admin where username='{$username}' and password='{$password}'";

        $result = $conn->query($sql);
		if($result-> num_rows > 0){
            $row=$result->fetch_assoc();
            $_SESSION['flag']=true;
            $_SESSION['id']=$row['id'];
            return true;
        }
        else{
            return false;
        }
	}

	function getadminById($id){

		$conn = getConnection();
		$sql = "select * from admin where id='{$id}'";

        $result = $conn->query($sql);
		$row = $result->fetch_assoc();
		return $row;
	}

	function insertAdmin($admin_data){

		$conn = getConnection();
		$sql = "insert into admin values('','{$admin_data['name']}','{$admin_data['username']}','{$admin_data['email']}','{$admin_data['password']}','{$admin_data['gender']}', '{$admin_data['dob']}','{$admin_data['profile_image']}')";
		
		if($conn->query($sql)){
			return true;
		}else{
			return $sql;
		}
	}

	function updateAdmin($admin){
		$conn = getConnection();
		$sql = "update admin set name='{$admin['name']}', username='{$admin['username']}', email='{$admin['email']}', gender='{$admin['gender']}', dob='{$admin['dob']}' where id='{$admin['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteAdmin($id){
		$conn = getConnection();
		$sql = "delete from users where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>