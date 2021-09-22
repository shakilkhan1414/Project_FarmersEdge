<?php
    require_once "../../database/connection.php";
    $conn=getConnection();

    session_start(); 
    if(!isset($_SESSION['login'])){
        header("location: login.html");
    }

    $title="Products";
    require_once "header.php";
?>
 
<section id="products">
    <?php 
        $sql="select * from product";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){

            echo "<div class='single-product'>
                    <img src='../../img/product/$row[image]'>
                    <h3>$row[name]</h3>
                    <p>$row[price] BDT</p>
                    <span>$row[description]</span>
                    <button id='add$row[id]' onclick='addCart($row[id])'>Add to cart</button>
                </div>";
        }
    ?>
    
</section>

<?php 
    require_once "footer.php";
?>