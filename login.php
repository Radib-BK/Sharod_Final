<?php
include('includes/connect.php');
include('functions/common_funcs.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - SHAROD</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
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
                <li><a href="shop.php">Shop</a></li>
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
                        <input type="text" id="user_email" class="form-control" placeholder="Email Address" required="required" name="user_email">
                    </div>
                    <div class="field">
                        <input type="password" id="user_password" class="form-control" placeholder="Password" required="required" name="user_password">
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login" name="user_login">
                    </div>
                </form>
                <form action="#" method="post" class="signup">
                    <div class="field">
                        <input type="text" id="user_username" class="form-control" placeholder="Username" required="required" name="user_username">
                    </div>
                    <div class="field">
                        <input type="text" id="user_email" class="form-control" placeholder="Email Address" required="required" name="user_email">
                    </div>
                    <div class="field">
                        <input type="text" id="user_address" class="form-control" placeholder="Your Address" required="required" name="user_address">
                    </div>
                    <div class="field">
                        <input type="text" id="user_phone" class="form-control" placeholder="Contact Number" required="required" name="user_phone">
                    </div>
                    <div class="field">
                        <input type="password" id="user_password" class="form-control" placeholder="Password" required="required" name="user_password">
                    </div>
                    <div class="field">
                        <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm Password" required="required" name="conf_user_password">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
</body>

</html>

<?php
if (isset($_POST['user_login'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    if ($user_email == 'admin' and $user_password == 'admin') 
    {
        echo "<script>
        setTimeout(function(){
        Swal.fire({
            title: 'Welcome Admin!',
            text: 'Login Successful.',
            icon: 'success',
            confirmButtonText: 'OK',
            customClass: { popup: 'my-custom-popup-class', icon: 'my-custom-icon-class',  confirmButton: 'my-custom-button-class'}
        }).then(function()
        {
            window.open('./admin/index.php', '_self');
        });
        }, 100);
        </script>";
    } 
    else 
    {
        $select_query = "Select * from `user_table` where email = '$user_email'";
        $result = mysqli_query($con, $select_query);
        $rows_count = mysqli_num_rows($result);
        $row_data = mysqli_fetch_assoc($result);
        $user=$row_data['username'];
        if ($rows_count > 0) 
        {
            $_SESSION['email'] = $user_email;
            if (password_verify($user_password, $row_data['password']))
            {
                $_SESSION['email'] = $user_email;
                echo "<script>
                setTimeout(function(){
                Swal.fire({
                title: 'Welcome $user!',
                text: 'Your Login is Successful.',
                icon: 'success',
                confirmButtonText: 'OK',
                customClass: { popup: 'my-custom-popup-class', icon: 'my-custom-icon-class',  confirmButton: 'my-custom-button-class'}
                }).then(function()
                {
                window.open('profile.php', '_self');
                });
                }, 100);
                </script>";
            }
            else 
            {
                echo "<script>Swal.fire({ title: 'Invalid Credentials!',text: 'Input Correct Email and Password to login.', icon: 'error',  confirmButtonText: 'OK',  customClass: {popup: 'custom-popup-class', icon: 'custom-icon-class', confirmButton: 'custom-button-class'}});</script>";
            }
        }
        else 
        {
            echo "<script>Swal.fire({  title: 'Invalid Credentials!',  text: 'Input Correct Email and Password to login.',  icon: 'error',  confirmButtonText: 'OK',  customClass: {popup: 'custom-popup-class', icon: 'custom-icon-class', confirmButton: 'custom-button-class'}});</script>";
        }
    }
}




if (isset($_POST['user_signup'])) {
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    $conf_user_username = $_POST['conf_user_password'];
    $user_address = $_POST['user_address'];
    $user_phone = $_POST['user_phone'];
    $user_ip = getIPAddress();

    //insert into DB
    $select_query = "select * from `user_table` where email = '$user_email'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);
    if ($rows_count > 0) {
        $_SESSION['email'] = $user_email;
        echo "<script>Swal.fire({  title: 'Try Another Email!',  text: 'Email Already Exists.',  icon: 'error',  confirmButtonText: 'OK',  customClass: {popup: 'custom-popup-class', icon: 'custom-icon-class', confirmButton: 'custom-button-class'}});</script>";
    } else if ($user_password != $conf_user_username) {
        echo "<script>Swal.fire({  title: 'Confirm Password Does Not Match!',  text: 'Input Same Password and Confirm Password',  icon: 'error',  confirmButtonText: 'OK',  customClass: {popup: 'custom-popup-class', icon: 'custom-icon-class', confirmButton: 'custom-button-class'}});</script>";
    } else {
        $insert_query = "insert into `user_table` (username,password,email,user_ip,user_address,mobile) values('$user_username','$hash_password','$user_email','$user_ip','$user_address','$user_phone')";
        $sql_execute = mysqli_query($con, $insert_query);
        echo "<script>Swal.fire({title: 'Registration Successful!',text: 'Your Account Has Been Created.',icon: 'success',confirmButtonText: 'OK',customClass: {  popup: 'my-custom-popup-class',  icon: 'my-custom-icon-class',  confirmButton: 'my-custom-button-class'}});</script>";
    }
}
?>