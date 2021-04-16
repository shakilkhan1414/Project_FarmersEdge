<?php 
    session_start();
    require_once "../../database/adminModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_SESSION['id'];
        $name=$_REQUEST['name'];
        $username=$_REQUEST['username'];
        $email=$_REQUEST['email'];
        $gender=$_REQUEST['gender'];
        $dob=$_REQUEST['dob'];
        
        $admin_data=[
            'id'=> $id,
            'name'=> $name,
            'username'=> $username,
            'email'=> $email,
            'gender'=> $gender,
            'dob'=> $dob
        ];

        if($username==$_SESSION['username']){
            updateAdmin($admin_data);
            echo "success";
        }
        else{
            $conn = getConnection();
            $sql = "select * from admin where username='{$username}'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo "*Username already exist!";
            }
            else{
                if(updateAdmin($admin_data)){
                    echo "success";
                    }
                    else{
                        echo "*Something went wrong, try again!";
                    }
                }
        }
            
    }


    
?>