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
	<title>Shop page - SHAROD</title>

	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/shop.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body>
	<header>
		<div class="navbar">
			<pre><a class="logo" href="index.php">{ SHAROD }</a></pre>
			<ul class="nav-list">
				<li><a href="index.php">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			<div class="nav-icon">
                <?php
                if(!isset($_SESSION['email'])){
                    echo "<i class='fas'><a href='login.php'>&#xf2bd;</a></i>
					<i class='fas'><a href='login.php'>&#xf07a;</a></i>";
					
                }
                else{
                    echo "<i class='fas'><a href='profile.php'>&#xf2bd;</a></i>
					<i class='fas'><a href='wishlist.php'>&#xf004;</a></i>
					<i class='fas'><a href='cart.php'>&#xf07a;</a></i><sup class='text-danger'>"; 
					if(cart_item() > 0){
					echo cart_item();
					} 
					echo"</sup>";
                }
                ?>
            </div>
			<div class="menu-toggle">
				<i class="fas fa-bars"></i>
				<i class="fas fa-times"></i>
			</div>
		</div>
	</header>

	<header class="secHead">
		<div class="search-bar">
			<form class="form-control" method="GET" action="">
				<input class="search_input px-3" type="search" placeholder="Search products..." name="search_data">
				<input type="submit" value="Search" name="search_data_product">
			</form>
		</div>
		<div class="sort-bar">
			<form class="form-control" method="POST" action="">
				<select name="sort_by" id="sort_by">
					<option value="product_id">Default sorting</option>
					<option value="product_title ASC">Sort by name: A to Z</option>
					<option value="product_title DESC">Sort by name: Z to A</option>
					<option value="product_price ASC">Sort by price: Low to High</option>
					<option value="product_price DESC">Sort by price: High to Low</option>
				</select>
				<input type="submit" value="Sort">
			</form>
		</div>
	</header>
	<main>
		<div class="row">
			<div class="col-md-2 sidenav">
				<h2 class="text-center text-warning-emphasis my-2 py-2 px-1">CATEGORIES</h2>
				<ul class="me-auto text-center">
					<?php
					$select_category = "select * from `categories`";
					$result_category = mysqli_query($con, $select_category);

					while ($row_data = mysqli_fetch_assoc($result_category)) {
						$category_title = $row_data['category_title'];
						$category_id = $row_data['category_id'];
						echo " <li> <a href='shop.php?category=$category_id' class='nav-link text-light'> $category_title </a></li>";
					}

					?>
				</ul>
			</div>
			<div class="col-md-10">
				<div class="row px-2">
					<!-- fetching products  -->
					<?php
						getproducts();
						getuniqueCategories();
						cart();
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