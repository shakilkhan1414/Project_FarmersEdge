<?php
    session_start();
    require_once "../../database/userModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_REQUEST['id'];
        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $username=$_REQUEST['username'];
        $email=$_REQUEST['email'];
        $gender=$_REQUEST['gender'];
        $dob=$_REQUEST['dob'];

        $user=[
            'id'=> $id,
            'firstname'=> $firstname,
            'lastname'=> $lastname,
            'username'=> $username,
            'email'=> $email,
            'gender'=> $gender,
            'dob'=> $dob
        ];

        if($username==$_SESSION['username']){
            if(updateUser($user)){
                echo "success";
                }
                else{
                    echo "*Something went wrong, try again!";
                }
        }
        else{
            $conn = getConnection();
            $sql = "select * from users where username='{$username}'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo "*Username already exist!";
            }
            else{
                if(updateUser($user)){
                    echo "success";
                    }
                    else{
                        echo "*Something went wrong, try again!";
                    }
                }
        }
    }
  
?>
