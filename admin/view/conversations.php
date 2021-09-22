<?php 
    session_start();
    require_once "../../database/connection.php";
    $conn=getConnection();
    $sql="select * from inbox where sender_id='$_SESSION[id]' or received_id='$_SESSION[id]'";
    $result=$conn->query($sql); 
    $friend=[];

        while($row=$result->fetch_assoc()){
            if($row['sender_id']==$_SESSION['id']){
                if(in_array($row['received_id'],$friend)==false){
                $friend[]=$row['received_id'];
                }
            }
            else{
            if(in_array($row['sender_id'],$friend)==false){
                $friend[]=$row['sender_id'];
                }
            }
        }
         
?>

<div class="wrapper">
    <section class="chat-area">
      <div class="header">
        <div class="details">
        <img src="../../img/favicon.png" alt="">
          <span>Conversations</span>
        </div>
      </div>
      <div class="chat-box">

      <div class='friendlist'>
          

          <?php 
                for($i=0;$i<sizeof($friend);$i++){
                    $profilesql="select * from users where id='$friend[$i]'";
                    $res=$conn->query($profilesql);
                    $rows=$res->fetch_assoc();
                    $name=$rows["first_name"]." ".$rows['last_name'];
                    echo "<div class='friend' onclick='openInbox($rows[id])'>
                            <img src='../../img/user/$rows[profile_image]'>
                            <p>$name</p>
                          </div>";
                }
          ?>

      </div>
    </section>
  </div>

  <style>
        .chat-box {
            min-height: 560px;
            max-height: 560px;
        }
        .friend img{
            height: 40px;
            width: 40px;
            border-radius: 50%;
        }
    </style>