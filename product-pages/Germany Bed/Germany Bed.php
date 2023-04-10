<?php
include('../../includes/connect.php');
include('../review_handler.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details Page</title>
    <script src="https://kit.fontawesome.com/2eedae48ed.js" crossorigin="anonymous"></script>
    <!--Link to CSS code-->
    <link rel="stylesheet" href="CSS/Style.css" />
    <!--import poppins font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Stylish&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Stylish&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-G6p5BU6U5M6fzpJzq3y5SREnzsIW92KxuRByf8K7V4kgs4JG1VjNCTB3qVXvcSxS" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pangolin&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Stylish&family=Tilt+Prism&display=swap"
        rel="stylesheet">

    <!--import Josefin San font-->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
    <!--for navbar icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!--css-->
    <link rel="stylesheet" href="CSS/body.css">
    <link rel="stylesheet" href="CSS/logo.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <!--js-->
    <script src="JS/menu.js" defer></script>
    <!--------------------------->

</head>

<body>

    <header>
        <div class="navbar">
            <pre><a class="logo" href="#index">{ SHAROD }</a></pre>
            <ul class="nav-list">
                <li><a href="#index">Home</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="nav-icon">
                <a href="#account"><i class="fas">&#xf2bd;</i></a>
                <a href="#wishlist"><i class="fas">&#xf004;</i></a>
                <a href="#cart"><i class="fas">&#xf07a;</i></a>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </div>
        </div>
    </header>

    <section>
        <div class="product-page-container">
            <!-- <span class="link-route">
             <a href="#">Home</a> > <a href="#">Sofa</a> 
        </span> -->

            <section id="product-page">

                <div class="product-page-img">

                    <div class="product-small-img">
                        <img src="Images/Germany Bed1.jpg" onclick="myFunction(this)">
                        <img src="Images/Germany Bed2.jpg" onclick="myFunction(this)">
                        <img src="Images/Germany Bed3.jpg" onclick="myFunction(this)">
                        <img src="Images/Germany Bed4.jpg" onclick="myFunction(this)">
                        <img src="Images/Germany Bed5.jpg" onclick="myFunction(this)">

                    </div>

                    <div class="img-container">
                        <img class="blur" id="imageBox" src="Images/Germany Bed1.jpg">
                        <div class="content fade "> Germany Bed is the best quality bed you can get
                            to your dream bedroom an aesthetic look
                        </div>
                    </div>
                </div>

                <script>
                    function myFunction(smallImg) {
                        var fullImg = document.getElementById("imageBox");
                        fullImg.src = smallImg.src;
                    }
                </script>

                <div class="product-page-details">


                    <strong id="product-title">Germany Mirrored Work Bedframe</strong>




                    <span class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>

                        <span class="review_count">4 reviews</span>
                    </span>

                    <span class="price">$850 <del>900$</del></span>

                    <span class="product-discount"><i class="fa fa-tag" aria-hidden="true"></i></i>5.56% discount</span>

                    <span class="product-id">
                        <span class="diamond">&diams;</span>
                        <span class="title">Product ID:</span>
                        <span class="id"> 101.10.123.201</span>
                    </span>

                    <span class="product-availability">
                        <span class="diamond">&diams;</span>
                        <span class="title">Availability:</span>
                        <span class="status"> In stock</span>

                    </span>


                    <div class="product-details">
                        <div class="quantity-counter">
                            <button class="minus-button">
                                <i class="fa fa-minus"></i>
                            </button>
                            <input type="number" class="quantity-input" value="1" min="1" max="10" readonly>
                            <button class="plus-button">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <a href="#">
                            <button class="cart">
                                <span class="text">Add to Cart</span>
                                <span class="fa fa-shopping-basket"></span>
                            </button>
                        </a>

                        <button class="wishlist-button">
                            <i class="fa fa-heart"></i>
                        </button>
                    </div>

                    <script>
                        const minusButton = document.querySelector(".minus-button");
                        const plusButton = document.querySelector(".plus-button");
                        const quantityInput = document.querySelector(".quantity-input");

                        minusButton.addEventListener("click", () => {
                            if (quantityInput.value > 1) {
                                quantityInput.value = parseInt(quantityInput.value) - 1;
                            }
                        });

                        plusButton.addEventListener("click", () => {
                            if (quantityInput.value < 10) {
                                quantityInput.value = parseInt(quantityInput.value) + 1;
                            }
                        });
                    </script>


                    <div class="delivery">
                        <span class="fa fa-exclamation-circle"></span>
                        Minimum delivery charge is 50$. May vary depending on location.
                    </div>

                    <div class="social-buttons">
                        <a href="#" class="facebook-button">
                            <i class="fa fa-facebook-f"></i>
                            <span>Like</span>
                        </a>
                        <a href="#" class="twitter-button">
                            <i class="fa fa-twitter"></i>
                            <span>Tweet</span>
                        </a>
                        <a href="#" class="instagram-button">
                            <i class="fa fa-instagram"></i>
                            <span>Share</span>
                        </a>
                    </div>

                </div>
            </section>

            <section class="product-all-info">
                <ul class="product-info-menu">
                    <li class="p-info-list active" data-filter="specification">Specification</li>
                    <li class="p-info-list" data-filter="description">Description</li>
                    <li class="p-info-list" data-filter="key-features">Key Features</li>
                    <li class="p-info-list" data-filter="review">Top Reviews</li>
                </ul>

                <div class="info-container specification active">
                    <div class="product-specs">

                        <ul>
                            <li><span>Product Dimension(cm):</span> 215.2 x W-162.5 x H-140cm</li>
                            <li><span>Product Weight(kg):</span> 111kg</li>
                            <li><span>Box Dimension(cm):</span> Box 1: L-172 x W-150 x H-19
                                Box 2: L-215 x W-60 x H-25
                                Box 3: L-205 x W-78 x H-10</li>
                            <li><span>Box Weight(kg):</span> Box 1: 54, Box 2: 46, Box 3: 19</li>
                            <li><span>Packaging Type:</span> Flatpack</li>
                        </ul>
                    </div>

                </div>
                <div class="info-container description">
                    <div class="product-description">
                        <div class="features">
                            <div class="feature">
                                <div class="feature-icon"><i class="fas fa-gem"></i></div>
                                <h3>Elegant Look</h3>
                                <p>Our newly arrived Germany Bedframe has an elegant look with its headboard and
                                    footboard being upholstered in premium velvet.
                                    Its beautifully Quilted Headboard and astounding Silver Colour make the bed a
                                    perfect fit for a sophisticated bedroom. </p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fa-solid fa-peace"></i></div>
                                <h3>Aesthetic Headboard</h3>
                                <p>Our Germany Bed has diamond shaped, deep quilted Headboard wrapped in premium quality
                                    Velvet which will make you feel like sleeping like the royals! Mirror as headboard
                                    rail of this luxurious bed will create a slick vibe in your dream
                                    Bedroom.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fas fa-bed"></i></div>
                                <h3>Comfort n Support </h3>
                                <p>This trendy bed comes with high quality slat to ensure the right amount of comfort
                                    and support. This allows even weight distribution and reduces pressure points on
                                    your body. </p>
                            </div>


                            <div class="feature">
                                <div class="feature-icon"><i class="fas fa-hammer"></i></div>
                                <h3>Strength & Support </h3>
                                <p>Strong metal joint provides strength & support. It firmly joins the slats with the
                                    bed frame so that there remains relatively less chance of breaking down.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fa-solid fa-shoe-prints"></i></div>
                                <h3>Exquisite Footboard </h3>
                                <p>Germany Bed has Velvet Upholstered foot board which would be a safer choice for
                                    families with children.
                                    In addition, mirror as footboard rail can easily make this magnificent bed the focal
                                    point of any bedroom.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fa-solid fa-box-open"></i></div>
                                <h3>Complete Look</h3>
                                <p>Germany Mirror has matching bedside table, tallboy, mirror and dresser which will
                                    give your bedroom a complete exquisite look.
                                    It is a great way to decorate your dream bedroom with the collection of all the
                                    aesthetic, strong & modern furniture.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-container key-features">
                    <div class="product-info">
                        <ul class="product-features">
                            <li><i class="fa-solid fa-snowflake"></i></i> Stunning Bedframe to Suit Any Deluxe Home</li>
                            <li><i class="fa-solid fa-snowflake"></i></i>Diamond Tufted Detailing on Headboard </li>
                            <li><i class="fa-solid fa-snowflake"></i></i>Deep Quilting on Headboard for a Stylish Look
                            </li>
                            <li><i class="fa-solid fa-snowflake"></i></i> Footboard Upholstered in Fine Quality Velvet
                            </li>
                            <li><i class="fa-solid fa-snowflake"></i></i>Sturdy Construction to provide Long Lasting Use
                            </li>
                            <li><i class="fa-solid fa-snowflake"></i></i>High Quality Slats Help to Maintain Correct
                                Posture</li>
                            <li><i class="fa-solid fa-snowflake"></i></i> Smart Box Packaging to Ensure Safe Delivery
                            </li>
                        </ul>
                    </div>



                </div>

                <div class="info-container review">
                    <section class="review-window">

                        <div class="review-list">
                        <?php
                                getreviews(5);
                            ?>
                            <!-- <div class="review">
                                <div class="reviewer">Doel yami</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                </div>
                                <div class="description">Great design, really like it</div>
                            </div>
                            <div class="review">
                                <div class="reviewer">Ion Yui</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star far fa-star"></i>
                                </div>
                                <div class="description">Decent bed but sideboard feels empty
                                </div>
                            </div>
                            <div class="review">
                                <div class="reviewer">Wassawa Sebanja</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star far fa-star"></i>
                                </div>
                                <div class="description">Great overally but the headboard tufting is not that
                                    comfortable</div>
                            </div>
                            <div class="review">
                                <div class="reviewer">Reasor Jase</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                </div>
                                <div class="description">Stunning look and most importantly, comfortable
                                </div>
                            </div> -->


                        </div>
                    </section>

                    <div class="review-form">
                        <form>
                            <label for="review-text">Write your review:</label>
                            <textarea id="review-text" name="review-text" placeholder="Write your review here" rows="6"
                                required></textarea>
                            <button class="submit-button" type="submit">Submit</button>
                        </form>
                    </div>


                </div>

            </section>

        </div>
    </section>

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

    <script>
        const infoMenu = document.querySelectorAll('.p-info-list');
        const activeClass = 'active';

        infoMenu.forEach(function (menuItem) {
            menuItem.addEventListener('click', function () {
                // remove active class from previously active li element
                const activeMenuItem = document.querySelector('.p-info-list.' + activeClass);
                activeMenuItem.classList.remove(activeClass);

                // add active class to clicked li element
                menuItem.classList.add(activeClass);
            });
        });
    </script>


    <script>
        const menuItems = document.querySelectorAll('.p-info-list');
        const infoContainers = document.querySelectorAll('.info-container');

        menuItems.forEach(item => {
            item.addEventListener('click', function () {
                const filter = item.getAttribute('data-filter');
                infoContainers.forEach(container => {
                    container.style.display = 'none';
                });
                document.querySelector(`.info-container.${filter}`).style.display = 'block';
            });
        });
    </script>

    <script>
        const form = document.querySelector('form');
        const textarea = document.getElementById('review-text');

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            // Do something with the review text
            const reviewText = textarea.value;
            console.log(`Review submitted: ${reviewText}`);

            // Reset the form
            form.reset();
        });

    </script>






</body>

</html>