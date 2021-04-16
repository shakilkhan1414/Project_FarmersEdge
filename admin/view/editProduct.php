<?php 
    require_once "../../database/connection.php";

    $conn=getConnection();
    $id=$_REQUEST['id'];
    $sql="select * from product where id={$id}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    $id=$row['id'];
    $name=$row['name'];
    $owner=$row['owner'];
    $quantity=$row['quantity'];
    $price=$row['price'];
    $description=$row['description'];

?>
<div class="container">
    <div class="title">Edit Product</div>

    <span id="msg"></span>

    <div class="content">
      <form id="editProduct" onsubmit="return editProductproccess();" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Product Name</span>
            <input type="text" name="name" id="name" placeholder="Enter product name" autocomplete="off" value="<?=$name?>">
          </div>
          <div class="input-box">
            <span class="details">Product Owner</span>
            <input type="text" placeholder="Enter product owner" name="owner" id="owner" autocomplete="off" value="<?=$owner?>">
          </div>
          <div class="input-box">
            <span class="details">Quantity</span>
            <input type="text" placeholder="Enter product quantity" name="quantity" id="quantity" autocomplete="off" value="<?=$quantity?>">
          </div>
          <div class="input-box">
            <span class="details">Price</span>
            <input type="text" placeholder="Enter product price" name="price" id="price" autocomplete="off" value="<?=$price?>">
          </div>
        </div>
        <div class="user-details">
        <div class="input-box content">
            <span class="details">Description</span>
            <input type="text" name="description" id="description" placeholder="Enter product descripion" value="<?=$description?>">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Update">
        </div>
        <input type="hidden" name="id" value="<?=$id?>">
      </form>
    </div>
  </div>

  <style>
      form .user-details .input-box.content{
        width: 100%;
      }


  </style>
