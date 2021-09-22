<?php
    require_once "../../database/connection.php";
    $conn=getConnection();

    session_start(); 
    if(!isset($_SESSION['login'])){
        header("location: login.html");
    }

    $title="Seed Bank";
    require_once "header.php";
?>
 
<section id="products">
    <?php 
        $sql="select * from seed";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){

            echo "<div class='single-product'>
                    <img src='../../seedbanker/assets/$row[picture]'>
                    <h3>$row[name]</h3>
                    <p style='margin-bottom:5px'>$row[price] BDT</p>
                    <button id='add$row[id]' onclick='addseed($row[id])'>Add to cart</button>
                </div>";
        }
    ?>
    
</section>

<?php 
    require_once "footer.php";
?>