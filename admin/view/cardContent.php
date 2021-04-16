<?php 
    require_once "../../database/adminModel.php";
    require_once "../../database/userModel.php";
?>

<div class="card-single">
                    <div class="card-body">
                        <div>
                            <h4>
                                <?php 
                                    $alluserresult=getAllUser();
                                    $members=sizeof($alluserresult);
                                    echo $members;
                                ?>
                            </h4>
                            <h5>Members</h5>
                        </div>
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <h4>
                            <?php
                                $conn=getConnection(); 
                                $productsql="select * from product";
                                $productresult=$conn->query($productsql);
                                $product=$productresult->num_rows;
                                echo $product;
                                ?>
                            </h4>
                            <h5>Products</h5>  
                        </div>
                        <i class="fas fa-briefcase"></i>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <h4>
                            <?php
                                $ordersql="select * from orders";
                                $orderresult=$conn->query($ordersql);
                                $orders=$orderresult->num_rows;
                                echo $orders;
                                ?>
                            </h4>
                            <h5>Orders</h5>  
                        </div>
                        <i class="fas fa-cart-plus"></i>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <h4>
                                <?php 
                                    $sql="select * from transaction";
                                    $result=$conn->query($sql);
                                    $available=0;
                                    $sent=0;
                                    while($row=$result->fetch_assoc()){
                                        if($row['status']=="sent"){
                                            $sent+=$row['amount'];
                                        }
                                        else if($row['status']=="pending"){
                                            $available+=$row['amount'];
                                        }
                                    }
                                    $rev=($sent*10)/100;
                                    $balance=$available+$rev;
                                    echo $balance;

                                ?>
                            </h4>
                            <h5>Balance</h5>  
                        </div>
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>