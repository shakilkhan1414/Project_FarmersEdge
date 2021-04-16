<?php 
    session_start();
    if(isset($_SESSION['flag'])){
        header("location: dashboard.php");
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>FarmersEdge-Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <section id="login_wrapper">
        <div class="content">
            <div class="text">FarmersEdge-Admin</div>
            <span class='error'></span>
                <form onsubmit="return loginProcess();" method="POST">
                        <div class="field">
                            <input type="text" name="username" id="username" placeholder="Username" value="<?php 
                                if(isset($_COOKIE['username'])){
                                    echo $_COOKIE['username'];
                                }
                            ?>">
                            <span class="fas fa-user"></span>
                            <label>Email or Phone</label>
                        </div>
                        <div class="field">
                            <input type="password" name="password" id="password" placeholder="Password">
                            <span class="fas fa-lock"></span>
                            <label>Password</label>
                        </div>
                        <div class="forgot-pass">
                            <input type="checkbox" name="check" id=""> Remember me
                        </div>
                            <button type="submit">Sign in</button>
                </form>
        </div>
</section>

    <script src="../js/script.js"></script>

</body>
</html>
