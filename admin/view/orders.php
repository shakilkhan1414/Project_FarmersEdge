<?php 
    require_once "../../database/connection.php";

    $sql="select * from orders";
    $conn=getConnection();
    $result=$conn->query($sql);
    
?>

<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Ordered_from</th>
                <th>Ordered_to</th>
                <th>Ordered_item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 
        $c=1;
            while($row=$result->fetch_assoc()){
                $order_id=$row['order_id'];
                $ordered_from=$row['ordered_from'];
                $ordered_to=$row['ordered_to'];
                $ordered_item=$row['ordered_item'];
                $quantity=$row['quantity'];
                $price=$row['price'];
                $date=$row['date'];
                $status=$row['status'];

                if($status=="success"){
                    echo "<tr>
                            <td>$c</td>
                            <td>$ordered_from</td>
                            <td>$ordered_to</td>
                            <td>$ordered_item</td>
                            <td>$quantity</td>
                            <td>$price</td>
                            <td>$date</td>
                            <td>
                                <span class='badge success'>Success</span>
                            </td>
                        </tr>";
                        $c++;
                
                }
                else if($status=="processing"){
                    echo "<tr>
                            <td>$c</td>
                            <td>$ordered_from</td>
                            <td>$ordered_to</td>
                            <td>$ordered_item</td>
                            <td>$quantity</td>
                            <td>$price</td>
                            <td>$date</td>
                            <td>
                                <span class='badge warning'>Processing</span>
                            </td>
                        </tr>";
                        $c++;
                }
            }
        ?>

        </tbody>
    </table>
</div>