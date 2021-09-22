<?php 
    require_once "../../database/connection.php";
    $conn = getConnection();

     if($_SERVER["REQUEST_METHOD"] == "POST"){
         $name=$_REQUEST['name'];
         $email=$_REQUEST['email'];
         $message=$_REQUEST['message'];
         $date=Date("Y-m-d");

        $sql="insert into faq values ('','{$name}','{$email}','{$message}','{$date}')";
        if($result=$conn->query($sql)){
            echo "success";
        }
        else{
            echo "Something went wrong!";
        }
     }
?>
