<?php
    require_once "../../database/connection.php";
    $conn=getConnection();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $owner=$_REQUEST['owner'];
        $quantity=$_REQUEST['quantity'];
        $price=$_REQUEST['price'];
        $description=$_REQUEST['description'];

        $sql = "update product set name='{$name}', owner='{$owner}', quantity='{$quantity}', price='{$price}', description='{$description}' where id='{$id}'";
        if($conn->query($sql)){
            echo "success";
        }
        else{
            echo "*Something went wrong, try again!";
        }
    }
               
?>
