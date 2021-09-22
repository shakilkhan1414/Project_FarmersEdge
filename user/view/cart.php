<?php
    session_start();
    require_once "../../database/connection.php";
    $conn=getConnection();

    if(!isset($_SESSION['login'])){
        header("location: login.html");
    }

    $title="Cart";
    require_once "header.php";

    if(isset($_REQUEST['clear'])){
        unset($_SESSION['cart']);
    }
?>

<section id="cart">
    <table>
        <tr>
            <th>Serial</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php 
        if(isset($_SESSION['cart'])){
            $cart=$_SESSION['cart'];
            $total=0;
            $items="";
            $quantity=0;
            for ($i=0; $i < sizeof($cart); $i++) { 
                $sql="select * from product where id='{$cart[$i]}'";
                $result=$conn->query($sql);
                $row=$result->fetch_assoc();
                $c=$i+1;
                echo "<tr>
                        <td>$c</td>
                        <td>$row[name]</td>
                        <td>$row[quantity]</td>
                        <td>$row[price]</td>
                    </tr>";
                $total+=$row['price'];
                $quantity+=$row['quantity'];
                $items.=$row['name']."-";

                $ordered=[
                    'name'=>$items,
                    'quantity'=>$quantity,
                    'price'=>$total
                ];
            }
            echo "<tr>
                    <td class='total'></td>
                    <td class='total'></td>
                    <td class='total'></td>
                    <td class='total'>Total: $total</td>
                </tr>";
            }
        ?>


        
    </table>
    <button class='place' onclick="placeOrder(<?=$total?>,<?=$quantity?>,'<?=$items?>');">Place order</button>
    <a class="clear" href="cart.php?clear">Clear cart</a>
</section>

<?php 
    require_once "footer.php";
?>