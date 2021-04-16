<?php
    require_once "../../database/connection.php";
    $conn=getConnection();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name=$_REQUEST['name'];
        $owner=$_REQUEST['owner'];
        $quantity=$_REQUEST['quantity'];
        $price=$_REQUEST['price'];
        $descripion=$_REQUEST['descripion'];

        $img_name = $_FILES['image']['name'];
        $img_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
                    
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);
    
        $extensions = ["jpeg", "png", "jpg","JPEG", "PNG", "JPG"];
        if(in_array($img_ext, $extensions) === true){
            if($img_size > 5242880){
                echo "*Max upload size is 5 MB!";
            }
            else{
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name,"../../img/product/".$new_img_name)){
                    $conn = getConnection();
                    $sql = "insert into product values('','{$name}','{$owner}','{$quantity}','{$price}','{$descripion}', '{$new_img_name}')";
                    if($conn->query($sql)){
                        echo "success";
                    }
                    else{
                        echo "*Something went wrong, try again!";
                    }
                }
                
            }
        }
        else{
            echo "*Invalid file format!";
        }
    }
               
?>
