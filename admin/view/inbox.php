<?php 
    // session_start();
    // require_once "../checking/connection.php";
    // $msg_id=$_REQUEST['id'];

    // $sql="select * from user_list where id='$msg_id'";
    // $result=$con->query($sql);
    // $row=$result->fetch_assoc();

?>

<div class="wrapper">
    <section class="chat-area">
      <div class="header">
        <img src="../../img/user/1618257882tony-stark.jpg" alt="">
        <div class="details">
          <span>Tony</span>
        </div>
      </div>
      <div class="chat-box">
                            <div class="chat outgoing">
                                <div class="details">
                                    <p>hi</p>
                                </div>
                                </div>

                                <div class="chat incoming">
                                <img src="../../img/user/1618257882tony-stark.jpg"alt="">
                                <div class="details">
                                    <p>hello</p>
                                </div>
                                </div>
                      
      </div>
      <form action="#" class="typing-area">
        <input type="text" class="msg_id" name="msg_id" value="sdd" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fas fa-arrow-alt-right"></i></button>
      </form>
    </section>
  </div>