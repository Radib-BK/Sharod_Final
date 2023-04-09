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
    
    <title>SHAROD - Furniture & Interior Decoration</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
    <link rel="stylesheet" href="css/home.css">
    
    <script src="js/home.js" defer></script>
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
        <div class="hero-image">
            <div class="hero-info">
                <h5 class="adjective">Beautiful</h5>
                <h1>Interior Designs</h1>
                <a href="#" class="btn">Explore Now</a>
            </div>
        </div>
    </header>

    <!-- COLLECTIONS -->

    <section class="highlight-text">
        <h2>~&nbsp;{&nbsp;Our&nbsp;Collection&nbsp;}&nbsp;~</h2>
        <p>Combination of style and comfort. From Modern to Classic. Crafted with finest material.</p>
    </section>
    <section class="collection">
        <div class="bedroom-card">
            <h3>Bedroom</h3>
        </div>
        <div class="livingroom-card">
            <h3>Living room</h3>
        </div>
        <div class="bathroom-card">
            <h3>Bath</h3>
        </div>
        <div class="diningroom-card">
            <h3>Dining</h3>
        </div>
        <div class="accessories-card">
            <h3>Accessories</h3>
        </div>
    </section>

    <!-- PRODUCTS -->

    <section class="highlight-text">
        <h2>~&nbsp;{&nbsp;Popular&nbsp;Picks&nbsp;}&nbsp;~</h2>
        <p>Shop now and experience the difference.</p>
    </section>
    <section class="product">
        <div class="product-card">
            <div class="product-text">
                <h4>ELEVATE COUCH</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>25000/=</p>
                <button class="btn fas fa-eye" onclick="window.location.href='product-pages/Elevated Couch/Elevated Couch.html';"></button>
                <button class="btn far fa-heart"></button>
            </div>
            <img src="images/product/couch1.png" alt="couch-image">
        </div>
        <div class="product-card">
            <div class="product-text">
                <h4>VINTAGE CHAIR</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>10000/=</p>
                <button class="btn fas fa-eye" onclick="window.location.href='product-pages/Vintage Chair/Vintage Chair.html';"></button>
                <button class="btn far fa-heart"></button>
            </div>
            <img src="images/product/seat4.png" alt="seat-image">
        </div>
        <div class="product-card">
            <div class="product-text">
                <h4>RADINAT LAMP</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>3000/=</p>
                <button class="btn fas fa-eye" onclick="window.location.href='product-pages/Radiant Lamp/Radiant Lamp.html';"></button>
                <button class="btn far fa-heart"></button>
            </div>
            <img src="images/product/lamp4.png" alt="lamp-image">
        </div>
        <div class="product-card">
            <div class="product-text">
                <h4>ROYAL BED</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>45000/=</p>
                <button class="btn fas fa-eye" onclick="window.location.href='product-pages/Royal Bed/Royal Bed.html';"></button>
                <button class="btn far fa-heart"></button>
            </div>
            <img src="images/product/bed2.png" alt="bed-image">
        </div>
        <div class="product-card">
            <div class="product-text">
                <h4>LUXE CLOSET</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p>40000/=</p>
                <button class="btn fas fa-eye" onclick="window.location.href='product-pages/Luxe Closet/Luxe Closet.html';"></button>
                <button class="btn far fa-heart"></button>
            </div>
            <img src="images/product/waredrobe2.png" alt="waredrobe-image">
        </div>
        <div class="product-card">
            <div class="product-text">
                <h4>TROPIC TABLE SEt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <p>20000/=</p>
                <button class="btn fas fa-eye" onclick="window.location.href='product-pages/Tropic Table Set/Tropic Table Set.html';"></button>
                <button class="btn far fa-heart"></button>
            </div>
            <img src="images/product/table2.png" alt="table-image">
        </div>
    </section>

    <!--OFFERS-->

    <!-- <section class="highlight-text">
        <h2>~&nbsp;{&nbsp;Tips&nbsp;&&nbsp;Trends&nbsp;}&nbsp;~</h2>
        <p>Get inspired by our team of interior designers. Stay up-to-date with the latest trends and tips for your home décor.</p>
    </section> -->

    <!--ARTICLES-->

    <section class="highlight-text">
        <h2>~&nbsp;{&nbsp;Tips&nbsp;&&nbsp;Trends&nbsp;}&nbsp;~</h2>
        <p>Get inspired by our team of interior designers. Stay up-to-date with the latest trends and tips for your home décor.</p>
    </section>
    <section class="article">
        <div class="article-card">
            <img src="images/article/art-img-01.webp" alt="art-img-01">
            <div class="article-text">
                <h3>10 Of The Best Minimalist Bed Frames</h3>
                <h4>Cate St Hill | October 06, 2022</h4>
                <p>It's time for another 'Best of' - rounding up 10 of the best minimalist designs in a particular furniture category. Today it's the turn of minimalist bed frames. It's a post I've...</p>
                <a href="https://catesthill.com/2022/10/06/10-of-the-best-minimalist-bed-frames/">Read the article</a>
            </div>
        </div>
        <div class="article-card">
            <img src="images/article/art-img-02.webp" alt="art-img-02">
            <div class="article-text">
                <h3>New interior project: a cool industrial style home with a cosy window seat</h3>
                <h4>Cate St Hill | May 25, 2022</h4>
                <p>With tall lofty ceilings, black Crittall style doors and beautiful wooden flooring, this new build apartment in east London already had good bones. The brief was to...</p>
                <a href="https://catesthill.com/2022/05/25/new-interior-project-a-cool-industrial-style-home-with-a-cosy-window-seat/">Read the article</a>
            </div>
        </div>
        <div class="article-card">
            <img src="images/article/art-img-03.jpg" alt="art-img-03"></img>
            <div class="article-text">
                <h3>Swivel Chair: A touch of innovation in the office</h3>
                <h4>Shahrin Ara | February 28, 2023</h4>
                <p>The swivel chair is called the lifeblood of the workplace. Because this chair is flexible, it has a high rate of comfort in office work. Moreover, furniture brands can...</p>
                <a href="https://hatil.com/blog/swivel-chair-a-great-addition-to-your-office-2/">Read the article</a>
            </div>
        </div>
        <div class="article-card">
            <img src="images/article/art-img-04.jpg" alt="art-img-04">
            <div class="article-text">
                <h3>"First Light" is Benjamin Moore's Color of the Year 2020</h3>
                <h4>Colleen Curry | October 11, 2019</h4>
                <p>Benjamin Moore & Co. has revealed its Color of the Year 2020 as a warm, rosy pink named First Light. It's the company's first time...</p>
                <a href="https://interiordesign.net/designwire/first-light-is-benjamin-moore-s-color-of-the-year-2020/">Read the article</a>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->

    <section class="highlight-text">
        <h2>~&nbsp;{&nbsp;From&nbsp;Our&nbsp;Clients&nbsp;}&nbsp;~</h2>
        <p>Discover why to choose us.</p>
    </section>
    <section class="testimonials">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img class="test-img" src="images/product/couch2.png" alt="test-img-01">
                    <i class="fas fa-quote-left"></i>
                    <p>Absolutely love our new sofa! It's stylish, comfy, and fits perfectly in our living room. Great quality, fast delivery too! Amazing experience.</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <img src="images/user.webp">
                    <h3>Tom Harry</h3>
                </div>
                <div class="col-3">
                    <img class="test-img" src="images/product/bed1.png" alt="test-img-02">
                    <i class="fas fa-quote-left"></i>
                    <p>This bed is a dream come true! So comfy and sturdy. I love the elegant design and the way it fits perfectly in my room. Sweet dreams!</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-stroke"></i>
                    </div>
                    <img src="images/user.webp">
                    <h3>John Doe</h3>
                </div>
                <div class="col-3">
                    <img class="test-img" src="images/product/lamp2.png" alt="test-img-03">
                    <i class="fas fa-quote-left"></i>
                    <p>Amazing lamp! It's elegant, bright, and enhances the ambiance of our space. Easy to install and worth the price. Highly recommend!</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="images/user.webp">
                    <h3>Jane Doe</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- SUBSCRIPTION SECTION-->
    <section class="subscription">
        <div>
            <h2>Subscribe to our newsletter</h2>
            <p>Join our community and stay in the loop with the latest furniture trends and exclusive deals.</p>
            <input type="email" placeholder="Your email">
            <button class="btn">Subscribe</button>
        </div>
        <div class="subscription-image"></div>
    </section>

    <!-- FOOTER SECTION -->
    <footer>
        <div class="footer-box">
            <div class="footer-text">
                <pre class="logo">{ SHAROD }</pre>
                <p>Bringing your home closer to you, one piece at a time.</p>
            </div>
            <div class="footer-text">
                <h4>More</h4>
                <ul>
                    <li><a href="../blog-and-review-page/blogs.html">Blogs</a></li>
                    <li><a href="../blog-and-review-page/review.html">Reviews</a></li>
                </ul>
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