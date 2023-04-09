<?php
include('includes/connect.php');
include('./functions/common_funcs.php');
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - SHAROD</title>

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
					<i class='fas'><a href='#wishlist'>&#xf004;</a></i>
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
        <h1><b>- <u>SHOPPING CART</u> -</b></h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                    <table class="table table-bordered text-center">
                        <?php
                            $u_email = $_SESSION['email'];
                            $total_price = 0;
                            $cart_query = "select * from `cart_details` where email = '$u_email'";
                            $result = mysqli_query($con, $cart_query);

                            $result_count = mysqli_num_rows($result);
                            if($result_count > 0){
                                echo "<thead class='bg-dark text-light text-center'>
                                <tr>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Total price</th>
                                <th colspan='2'>Operation</th>
                                </tr>
                                </thead>
                                <tbody>";
                            }
                            else {
                                echo "<img src='./images/empty-cart.png' alt='Out of Stock' class='small-image'>";
                            }

                            while ($row = mysqli_fetch_array($result)) {
                                $product_id = $row['product_id'];
                                $quantities = $row['quantity'];
                                $select_products = "select * from `products` where product_id = $product_id";
                                $result_products = mysqli_query($con, $select_products);
                                $row_product_price = mysqli_fetch_assoc($result_products);
                                $price_table = $row_product_price['product_price'];
                                $product_title = $row_product_price['product_title'];
                                $product_image = $row_product_price['product_image'];
                                $product_values = $price_table * $quantities;
                                $total_price += $product_values;
                            ?>
                                <tr class='text-center justify-content-center'>
                                    <td><?php echo $product_title ?></td>
                                    <td><img src="./admin/products_images/<?php echo $product_image ?>" alt="product image" class="cart-img"></td>
                                    <td>
                                        <form action="" method="post">
                                            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                                            <input type="number" name="qty" class="form-input w-50 px-3" style="text-align:center" min="1" value="<?php echo $quantities ?>">
                                    </td>
                                    <td><?php echo "$quantities x $price_table = $product_values" ?></td>
                                    <td>
                                        <input type="submit" value="Update" name="update_cart" class="fs-5 btn btn-outline-light btn-dark rounded-pill shadow px-4 my-5 mx-2 border-3 border-success">
                                        <input type="submit" value="Remove" name="remove_cart" class="fs-5 btn btn-outline-light btn-dark rounded-pill shadow px-4 my-5 mx-2 border-3 border-danger">
                                    </td>
                            </form>
                                </tr>
                            
            <?php
                            }
                            if (isset($_POST['update_cart'])) {
                                $product_id = $_POST['product_id'];
                                $quantities = $_POST['qty'];
                                $update_query = "update `cart_details` set quantity=$quantities where email = '$u_email' and product_id = $product_id";
                                $result_update = mysqli_query($con, $update_query);
                                echo "<script>window.open('cart.php', '_self')</script>";
                            }
                            
                            if (isset($_POST['remove_cart'])) {
                                $product_id = $_POST['product_id'];
                                $delete_query = "delete from `cart_details` where email = '$u_email' and product_id = $product_id";
                                $result_delete = mysqli_query($con, $delete_query);
                                echo "<script>window.open('cart.php', '_self')</script>";
                            }

            ?>
            </tbody>
            </table>

            <!-- subtotal -->
            <h3 class="px-3 mt-5 fs-2 text-center">Subtotal : <strong class="text-danger fs-1"> <?php total_cart_prices(); ?> Taka</strong></h3>
            <div class="d-flex justify-content-center p-5 my-2">
                <a href="./shop.php"><input type="button" class="fs-2 btn btn-outline-primary bg-gradient btn-dark rounded-pill shadow mx-3 px-5 border-1 border-dark text-light" name="Continue_Shopping" value="Continue Shopping"></a>
                <?php
                if($result_count > 0){
                    echo "<a href='./checkout.php'><input type='button' class='fs-2 btn btn-outline-info bg-gradient btn-dark rounded-pill shadow mx-3 px-5 border-1 border-dark' name='Checkout' value='Checkout'></a>";
                }
                ?>
            </div>
            </form>
            </div>
        </div>
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
    <style>
        main {
            padding-top: 6rem;
            padding-bottom: 1rem;
        }

        table {
            margin-top: 2rem;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }

        .cart-img {
            width: 11rem;
            height: 11rem;
            object-fit: contain;
        }

        .small-image {
        max-width: 45%;
        margin-left: 28%;
        }


        tbody tr:nth-child(even) {
            background-color: #fffafa;
        }
    </style>
</body>

</html>