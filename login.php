<?php
include('includes/connect.php');
include('functions/common_funcs.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Login - SHAROD</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">        
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/footer.css">

        <script src="js/login.js" defer></script>
    </head>

    <body>
        <!-- HEADER -->

        <header>
            <div class="navbar">
                <pre><a class="logo" href="index.php">{ SHAROD }</a></pre>
                <ul class="nav-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="nav-icon">
                    <i class="fas"><a href="#cart">&#xf07a;</a></i>
                </div>
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </header>

        <!-- ACCOUNT PAGE -->

        <div class="wrapper">
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked>
                    <input type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Sign up</label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                    <form action="#" method="post" class="login">
                    <div class="field">
                            <input type="text" id="user_email" class="form-control" placeholder="Email Address"
                                required="required" name="user_email">
                        </div>
                        <div class="field">
                        <input type="password" id="user_password" class="form-control" placeholder="Password"
                                required="required" name="user_password">
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                                <input type="submit" value="Login" name="user_login">
                        </div>
                        <div class="pass-link"><a href="#">Forgot password?</a></div>
                    </form>
                    <form action="#" method="post" class="signup">
                        <div class="field">
                            <input type="text" id="user_username" class="form-control" placeholder="Username"
                                required="required" name="user_username">
                        </div>
                        <div class="field">
                            <input type="text" id="user_email" class="form-control" placeholder="Email Address"
                                required="required" name="user_email">
                        </div>
                        <div class="field">
                            <input type="text" id="user_address" class="form-control" placeholder="Your Address"
                                required="required" name="user_address">
                        </div>
                        <div class="field">
                            <input type="text" id="user_phone" class="form-control" placeholder="Contact Number"
                                required="required" name="user_phone">
                        </div>
                        <div class="field">
                        <input type="password" id="user_password" class="form-control" placeholder="Password"
                                required="required" name="user_password">
                        </div>
                        <div class="field">
                        <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm Password"
                                required="required" name="conf_user_password">
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Sign up" name="user_signup">
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- FOOTER SECTION -->
        <footer>
            <div class="footer-box">
                <div class="footer-text">
                    <pre class="logo">{ SHAROD }</pre>
                    <p>Bringing your home closer to you, one piece at a time.</p>
                </div>
                <div class="footer-text">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">Plans</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Store Locator</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
                <div class="footer-text">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Affiliate</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-text">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instgram</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>

<?php
if (isset($_POST['user_login'])){
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $select_query="Select * from `user_table` where email = '$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    if($rows_count > 0)
    {
        $_SESSION['email'] = $user_email;
        if(password_verify($user_password,$row_data['password']))
        {
            $_SESSION['email'] = $user_email;
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('profile.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }
    else
    {
        echo "<script>alert('Invalid Credentials')</script>";
    }
}




if(isset($_POST['user_signup'])){
    $user_username=$_POST['user_username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $conf_user_username=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_phone=$_POST['user_phone'];
    $user_ip=getIPAddress();

    //insert into DB
    $select_query="select * from `user_table` where email = '$user_email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if ($rows_count > 0) {
        $_SESSION['email']=$user_email;
        echo "<script>alert('Email Already registered')</script>";
    }
    else if($user_password != $conf_user_username){
        echo "<script>alert('Confirm password do not match')</script>";
    }
    else{
        $insert_query="insert into `user_table` (username,password,email,user_ip,user_address,mobile) values('$user_username','$hash_password','$user_email','$user_ip','$user_address','$user_phone')";
        $sql_execute = mysqli_query($con,$insert_query);
    }
}
?>