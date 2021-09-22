<?php 
    session_start();
    require_once "../../database/adminModel.php";
    require_once "../../database/userModel.php";

    if(!isset($_SESSION['flag'])){
        header("location: index.php");
    }

    $result=getadminById($_SESSION['id']);
    $name=$result['name'];
    $image=$result['profile_image'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>FarmersEdge-Dashboard</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body onload="homeContent();">
    
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="../../img/logo.png" alt="logo" onclick="home()">
            <label for="sidebar-toggle"><i class="fas fa-bars"></i></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li class="active" onclick="homeContent()">
                        <i class="fas fa-home-lg-alt"></i>
                        <span>Home</span>
                </li>
                <li onclick="showMembers()">
                        <i class="fas fa-users"></i>
                        <span>Members</span>
                </li>
                <li onclick="addMember()">
                        <i class="fas fa-user"></i>
                        <span>Add Member</span>
                </li>
                <li onclick="ShowProducts()">
                        <i class="fas fa-box"></i>     
                        <span>Products</span>
                </li>
                <li onclick="addProduct()">
                        <i class="fas fa-box-open"></i>
                        <span>Add Product</span>
                </li>
                <li onclick="addAdmin()">
                        <i class="fas fa-user-shield"></i>
                        <span>Add Admin</span>
                </li>
                <li onclick="showOrders()">
                        <i class="fas fa-cart-arrow-down"></i>
                        <span>Orders</span>
                </li>
                <!-- <li onclick="showInbox()">
                        <i class="fas fa-comments"></i>
                        <span>Inbox</span>
                </li> -->
                <li onclick="transaction()">
                        <i class="fas fa-chart-line"></i>
                        <span>Transactions</span>
                </li>
                <li onclick="showNotice()">
                        <i class="fas fa-flag-checkered"></i>
                        <span>Notice</span>
                </li>
                <li onclick="showPost()">
                        <i class="fas fa-mailbox"></i>
                        <span>Member's Post</span>
                </li>
                <li onclick="showFAQ()">
                        <i class="fas fa-question-circle"></i>
                        <span>FAQ</span>
                </li>
                <li onclick="showContact()">
                        <i class="fas fa-id-card"></i>
                        <span>Contact Us</span>
                </li>
                <li onclick="account()">
                        <i class="fas fa-user-cog"></i>
                        <span>Account</span>
                </li>
                <li onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                </li>
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <div class="headertext">
                <h2>Dashboard</h2>
            </div>
            <div class="search-wrapper">
                <i class="fas fa-search ti-search"></i>
                <input type="search" name="search" id="search" onkeyup="search()" placeholder="Search here" autocomplete="off">
            </div>
            
            <div class="social-icons">
                <div class="image">
                    <img src="../../img/admin/<?="$image";?>" alt="admin_image">
                </div>
                <div class="details">
                    <?="<h4>$name</h4>";?>
                    <span>Admin</span>
                </div>
            </div>
        </header>
        
        <main>      
            <div class="dash-cards">
                
            </div>
            
            <section class="recent" id="main-content">

            </section>
            
        </main>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="../js/script.js"></script>
</body>
</html>