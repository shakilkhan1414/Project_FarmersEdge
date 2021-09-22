<?php
    session_start(); 
    require_once "../../database/connection.php";
    $conn=getConnection();

    if(!isset($_SESSION['login'])){
        header("location: login.html");
    }

    $title="Home";
    require_once "header.php";
?>
 
<section id="home">
    <div class="post">
        <h1>Posts</h1>
        <button class="add-post">Add post</button>
        <?php 
            $sql="select * from members_post";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){
                echo "<div class='single-post'>
                        <h3>$row[posted_by]</h3>
                        <p>$row[content]</p>
                        <span>$row[date]</span>
                    </div>";
            }
        ?>
    </div>
    <div class="notice">
        <h1>Notices</h1>
        <?php 
            $sql="select * from notice";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){

                echo "<div class='single-notice'>
                        <div>
                            <img src='../../img/notice/$row[image]'>
                        </div>
                        <div class='content'>
                            <h3>$row[posted_by]</h3>
                            <p>$row[content]</p>
                            <span>$row[date]</span>
                        </div>
                    </div>";
            }
        ?>
    </div>
</section>


<?php 
    require_once "footer.php";
?>