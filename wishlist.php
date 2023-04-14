<?php
include('includes/connect.php');
include('./functions/common_funcs.php');
session_start();

if(!isset($_SESSION['email'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Wishlist - SHAROD</title>

	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="css/home.css"> -->
	<link rel="stylesheet" type="text/css" href="css/highlight_text.css">
	<link rel="stylesheet" type="text/css" href="css/shop.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<script src="js/app.js" defer></script>
	<script src="js/shop.js" defer></script>
</head>

<body>
	<header>
		<div class="navbar">
            <pre><a class="logo" href="index.php">{ SHAROD }</a></pre>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="#about">About</a></li>
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
	<section class="highlight-text">
        <h2>~&nbsp;&nbsp;Wishlist&nbsp;&nbsp;~</h2>
    </section>
	<main>
		<div class="row">
			<div class="col-md-12">
				<div class="row px-2">
					<!-- fetching wishlist items  -->
					<?php
						getwishlist();
					?>
				</div>
				<!-- row end -->
			</div>
			<!-- column end -->
		</div>
	</main>
	<footer>
        <div class="footer-box">
            <div class="footer-text">
                <pre class="logo">{ SHAROD }</pre>
                <p>Bringing your home closer to you, one piece at a time.</p>
            </div>
            <!-- <div class="footer-text">
                <h4>More</h4>
                <ul>
                    <li><a href="../blog-and-review-page/blogs.html">Blogs</a></li>
                    <li><a href="../blog-and-review-page/review.html">Reviews</a></li>
                </ul>
            </div> -->
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

function getwishlist(){
    global $con;
    $email = $_SESSION['email'];

    $get_wishlist_items = "SELECT * FROM wishlist w, user_table u  WHERE u.User_id = w.user_id and email='$email' ";
    
    $run_wishlist_items = mysqli_query($con,$get_wishlist_items);
    
    while($row_wishlist_items=mysqli_fetch_array($run_wishlist_items)){
        
        $product_id = $row_wishlist_items['product_id'];
        
        $get_product = "SELECT * FROM products WHERE product_id='$product_id' ";
        
        $run_product = mysqli_query($con,$get_product);
        
        while($row_product=mysqli_fetch_array($run_product)){
            $product_id = $row_product['product_id'];
            $product_title = $row_product['product_title'];
            $product_description = $row_product['product_description'];
            $product_image = $row_product['product_image'];
            $product_price = $row_product['product_price'];
            $category_id = $row_product['category_id'];

            echo "  <div class='col-md-4'>
        <div class='card text-center'>
        <img class='card-img-top' src='./admin/products_images/$product_image' alt='$product_title'>
        <div class='card-body'>
        <h3 class='card-title'>$product_title</h3>
        <p class='card-text fs-5' style='height: 8rem;'>$product_description</p>
        <p class='card-text fs-3'> Price : $product_price/-</p>
        <a href='#' class='btn btn-dark mx-4 my-4 py-3 fs-4 bg-gradient px-5 shadow-sm btn-outline-warning rounded-pill'>Add To Cart</a>
        <a href='./product-pages/$product_title/$product_title.php' class='btn btn-dark mx-5 my-4 py-3 fs-4 bg-gradient px-5 shadow-sm btn-outline-info rounded-pill'>View More</a>
        </div>
        </div>
        </div>";
        }
    }
}
?>