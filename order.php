<?php
include('includes/connect.php');
include('./functions/common_funcs.php');
session_start();

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}

$user_email = $_SESSION['email'];
$total_price = total_cart_prices_2();
$count_query = "SELECT SUM(quantity) FROM `cart_details` WHERE email = '$user_email'";
$result = mysqli_query($con, $count_query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count_products = $row["SUM(quantity)"];
} else {
    $count_products = 0;
}
$invoice_number = mt_rand();
$status = 'pending';

//delete cart
$empty_cart = "Delete from `cart_details` where email = '$user_email'";
$result_delete = mysqli_query($con, $empty_cart);

//insert_orders
$insert_order = "insert into `user_orders` (user_id,total_amount,invoice_number,quantity,order_date,order_status) values ($user_id,$total_price,$invoice_number,$count_products,NOW(),'$status')";
$result_query = mysqli_query($con, $insert_order);
if ($result_query)
    echo "<script>window.open('profile.php','_self')</script>";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - SHAROD</title>

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>
    <header>
        <div class="navbar">
            <pre><a class="logo" href="index.php">{ SHAROD }</a></pre>
            <ul class="nav-list">
                <li class=""><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <div class="nav-icon">
                <?php
                if (!isset($_SESSION['email'])) {
                    echo "<i class='fas'><a href='login.php'>&#xf2bd;</a></i>
					<i class='fas'><a href='login.php'>&#xf07a;</a></i>";
                } else {
                    echo "<i class='fas'><a href='profile.php'>&#xf2bd;</a></i>
					<i class='fas'><a href='wishlist.php'>&#xf004;</a></i>
					<i class='fas'><a href='cart.php'>&#xf07a;</a></i><sup class='text-danger'>";
                    if (cart_item() > 0) {
                        echo cart_item();
                    }
                    echo "</sup>";
                }
                ?>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </div>
        </div>
    </header>
    <header class="cartHead text-center">
        <h1><b>- <u>ORDER PAGE</u> -</b></h1>
    </header>
    <main>
        HELLO
    </main>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>