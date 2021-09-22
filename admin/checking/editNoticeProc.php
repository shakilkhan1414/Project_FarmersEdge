<?php 
    session_start();
    require_once "../../database/connection.php";
    
    $product_id=$_REQUEST['id'];

     if($_SERVER["REQUEST_METHOD"] == "POST"){
         $content=$_REQUEST['content'];

         $conn = getConnection();
         $sql = "update notice set content='{$content}' where id='{$product_id}'";
         if($conn->query($sql)){
             echo "success";
         }
         else{
             echo "*Something went wrong, try again!";
         }
     }
?>
