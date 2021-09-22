<?php 
    require_once "../../database/connection.php";

    $conn=getConnection();
    $id=$_REQUEST['id'];
    $sql="select * from notice where id={$id}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    $id=$row['id'];
    $content=$row['content'];
?>


<div class="container">
    <div class="title">Edit Notice</div>

    <span id="msg"></span>

    <div class="content">
      <form id="editNotice" onsubmit="return editNoticeProc();" method="post" enctype="multipart/form-data">
        <div class="user-details">
        <div class="input-box content">
            <span class="details">Content</span>
            <input type="text" name="content" id="content" placeholder="Enter content" value="<?=$content?>">
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
      form .user-details .input-box input{
        height: 80px;
      }

  </style>
