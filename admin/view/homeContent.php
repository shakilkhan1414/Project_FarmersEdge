<?php 
    require_once "../../database/connection.php";
    require_once "../../database/userModel.php";
    
    $sql="select * from orders";
    $conn=getConnection();
    $result=$conn->query($sql);

    $user_sql="select * from orders";
    $user_result=$conn->query($user_sql);
?>

<div class="activity-grid">
    <div class="activity-card">
        <h3>Recent Orders</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Order_id</th>
                        <th>Ordered_from</th>
                        <th>Ordered_to</th>
                        <th>Ordered_item</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                    while($row=$result->fetch_assoc()){
                        $order_id=$row['order_id'];
                        $ordered_from=$row['ordered_from'];
                        $ordered_to=$row['ordered_to'];
                        $ordered_item=$row['ordered_item'];
                        $price=$row['price'];
                        $date=$row['date'];
                        $status=$row['status'];

                        if($status=="success"){
                            echo "<tr>
                                    <td>$order_id</td>
                                    <td>$ordered_from</td>
                                    <td>$ordered_to</td>
                                    <td>$ordered_item</td>
                                    <td>$price</td>
                                    <td>$date</td>
                                    <td>
                                        <span class='badge success'>Success</span>
                                    </td>
                                </tr>";
                        
                        }
                        else if($status=="processing"){
                            echo "<tr>
                                    <td>$order_id</td>
                                    <td>$ordered_from</td>
                                    <td>$ordered_to</td>
                                    <td>$ordered_item</td>
                                    <td>$price</td>
                                    <td>$date</td>
                                    <td>
                                        <span class='badge warning'>Processing</span>
                                    </td>
                                </tr>";
                        
                        }
                    }
                ?>

                </tbody>
            </table>
        </div>
    </div>
    
    <div class="summary">
        <div class="summary-card">
            <div class="heading">
                <h3>New Members</h3>
                <p onclick="showMembers()">see all <i class="fas fa-arrow-right"></i></p>
            </div>
            <?php 
                $user_row=getAllUser();
                for ($i=0; $i < sizeof($user_row); $i++) { 
                    $id=$user_row[$i]['id'];
                    $first_name=$user_row[$i]['first_name'];
                    $last_name=$user_row[$i]['last_name'];
                    $name=$first_name." ".$last_name;
                    $image=$user_row[$i]['profile_image'];
                    echo "<div class='members'>
                            <img src='../../img/user/$image'>
                            <p>$name</p>
                            <button onclick='viewProfile($id)'><i class='fas fa-user-circle'></i></button>
                            <button><i class='fas fa-comment-dots'></i></button>
                        </div>";
                }
            ?>

            

        </div>
    </div>
</div>