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
    <title>Payment</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script src="payment/jquery.min.js"></script>
    <script src="payment/bKash-checkout-sandbox.js"></script>
    <script src="payment/bKash-transaction.js"></script>

    <style>
        html {
            font-size: 10px;
            font-family: "Josefin Sans", sans-serif;
            min-width: 65rem;
        }

        .transaction-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            width: 100%;
            padding: 5rem 10rem 10rem 10rem;
        }

        .transaction-section button {
            display: block;
            position: relative;
            width: 25rem;
            aspect-ratio: 1/1;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            box-shadow: rgba(149, 157, 165, 0.5) 0 0.5rem 1.5rem;
            transition: all 0.4s;
            border-width: 0rem;
            border-radius: 5rem;
            margin: 2rem;
        }

        .transaction-section button:hover {
            box-shadow: #5b5b5b 0 0.5rem 1.5rem;
        }

        .transaction-section #bKash_button {
            background-image: url("payment/images/bKash.png");
        }

        .transaction-section #nagad_button {
            background-image: url("payment/images/nagad.png");
        }

        .transaction-section #cod_button {
            background-image: url("payment/images/cod.png");
        }
    </style>
</head>

<body>
    <?php
        $user_email = $_SESSION['email'];
        $get_user="select * from `user_table` where email = '$user_email'";
        $result_qry=mysqli_query($con,$get_user);
        $row = mysqli_fetch_array($result_qry);
        $id=$row['User_id'];
    ?>
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
        <h1><b>- <u>CHECKOUT PAGE</u> -</b></h1>
    </header>
    <h1 class="text-center p-5">Total Bill Amount : <b class="text-danger fs-1"><?php total_cart_prices(); ?></b> Taka</h1>
    <h1 class="text-center p-2"><b class="text-primary fs-1"><u>SELECT A PAYMENT METHOD-</u></b></h1>
    <div class="transaction-section">
        <table>
            <tr>
                <td>
                    <button id="bKash_button"></button>
                </td>
                <td>
                    <button id="nagad_button"></button>
                </td>
                <td>
                    <button onclick="location.href = 'order.php?user_id=<?php echo $id ?>'" id="cod_button"></button>
                </td>
            </tr>
        </table>
    </div>
    <?php

    ?>
    <script>
        var amount = <?php total_cart_prices(); ?>

        $(document).ready(function () {
            initBkash(amount);
        });
    </script>
</body>

</html>