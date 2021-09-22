<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php 
            if(isset($title)){
                echo $title;
            }
        ?>
    </title>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header style="background: black; height: 80px; position: relative">
    <div class="logo">
        <img src="../../img/logo.png" alt="Logo">
    </div>
    <div class="menu">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="seedBank.php">Seed Bank</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="../checking/logout.php">Logout</a></li>
        </ul>
    </div>
</header>
    
