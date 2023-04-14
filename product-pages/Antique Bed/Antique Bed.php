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
    <style>
      .rev-rating {
        display: inline-block;
        font-size: 1.2rem;
        color: #f7d32e;
        direction: rtl;
      }

      .rev-rating input {
        display: none;
      }
      
      .rev-rating label {
        font-size: 2rem;
        color: #ccc;
        cursor: pointer;
        direction: ltr;
      }

      .rev-rating label:hover,
      .rev-rating label:hover ~ label,
      .rev-rating input:checked ~ label {
        color: #f7d32e;
      }
    </style>
    <!--js-->
    <script src="JS/menu.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--------------------------->
</head>

<body>

    <header>
        <div class="navbar">
            <pre><a class="logo" href="../../index.php">{ SHAROD }</a></pre>
            <ul class="nav-list">
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../../shop.php">Shop</a></li>
                <li><a href="../../blog.php">Blog</a></li>
                <li><a href="#about">About</a></li>
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
                        <img src="Images/AntiqueBed1.jpg" onclick="myFunction(this)">
                        <img src="Images/AntiqueBed2.jpg" onclick="myFunction(this)">
                        <img src="Images/AntiqueBed3.jpg" onclick="myFunction(this)">
                        <img src="Images/AntiqueBed4.jpg" onclick="myFunction(this)">
                        <img src="Images/AntiqueBed5.jpg" onclick="myFunction(this)">
                    </div>

                    <div class="img-container">
                        <img class="blur" id="imageBox" src="Images/AntiqueBed1.jpg">
                        <div class="content fade "> Antique Bedside Table is the best quality bedside table you can get
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


                    <strong id="product-title">Antique Mirrored Work Bedframe</strong>




                    <span class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o"></span>

                        <span class="review_count">5 reviews</span>
                    </span>

                    <!-- <span class="price">$930 <del>1000$</del></span> -->

                    <!-- <span class="product-discount"><i class="fa fa-tag" aria-hidden="true"></i></i>7% discount</span> -->

                    <!-- <span class="product-id">
                        <span class="diamond">&diams;</span>
                        <span class="title">Product ID:</span>
                        <span class="id"> 101.23.345.101</span>
                    </span> -->

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
                            <li><span>Product Dimension(cm):</span> L-217.5 x W-191.5 x H-140</li>
                            <li><span>Product Weight(kg):</span> 128</li>
                            <li><span>Box Dimension(cm):</span> Box1: L-201 x W-150 x H-22, Box 2: L-217 x W-56 x H-25,
                                Box 3: L-205 x W-93 x H-10</li>
                            <li><span>Box Weight(kg):</span> Box 1: 78, Box 2: 43, Box 3: 20</li>
                            <li><span>Packaging Type:</span> Flatpack</li>
                        </ul>
                    </div>

                </div>
                <div class="info-container description">
                    <div class="product-description">
                        <div class="features">
                            <div class="feature">
                                <div class="feature-icon"><i class="fas fa-gem"></i></div>
                                <h3>Elegant Crystal Look</h3>
                                <p>Our newly arrived Antique Bedframe has an elegant look with its gorgeous, tufted
                                    Headboard. On top of that,
                                    mirrorwork on its footboard, sideboard, headboard rail & legs gives it a crystal
                                    look which makes it a perfect fit for any sophisticated bedroom.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fa-solid fa-peace"></i></div>
                                <h3>Aesthetic Headboard</h3>
                                <p>Our luxurious Antique Bed has diamond tufted Headboard wrapped in premium quality
                                    Velvet which will provide you a divine comfort! Deep quilting and metal studded
                                    buttons on the Headboard
                                    will create a slick vibe in your dream bedroom.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fa-solid fa-shoe-prints"></i></div>
                                <h3>Mirrored Footboard</h3>
                                <p>Antique model has mirrorwork on its footboard, legs and on the side rails.
                                    Its beautiful silver coloured footboard and mirror work make it a focal point of any
                                    bedroom easily.</p>
                            </div>


                            <div class="feature">
                                <div class="feature-icon"><i class="fas fa-bed"></i></div>
                                <h3>Comfort n Support </h3>
                                <p>This trendy bed comes with supreme quality slat to ensure the right amount of comfort
                                    and support.
                                    This allows even weight distribution and reduces pressure points on your body.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fas fa-hammer"></i></div>
                                <h3>Sturdy Construction </h3>
                                <p>TMDF is used in the construction of this range. This material provides the furniture
                                    a strong built and durability.
                                    In addition, inbuilt A52 Solid wood handles are provided to let you pull out the
                                    drawers easily and smoothly.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fa-solid fa-hand-fist"></i></div>
                                <h3>Strength & Support</h3>
                                <p>Strong metal joint provides strength & support. It firmly joins the slats with the
                                    bed frame so that there remains relatively less chance of breaking down.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-container key-features">
                    <div class="product-info">
                        <ul class="product-features">
                            <li><i class="fa-solid fa-snowflake"></i></i> Mirrored Design to Suit Any Deluxe Home</li>
                            <li><i class="fa-solid fa-snowflake"></i></i> Diamond Tufted Detailing on Headboard </li>
                            <li><i class="fa-solid fa-snowflake"></i></i>Deep Quilting on Headboard for a Stylish Look
                            </li>
                            <li><i class="fa-solid fa-snowflake"></i></i> Mirrored Work to Give a Crystal Look</li>
                            <li><i class="fa-solid fa-snowflake"></i></i>Sturdy Construction to provide Long Lasting Use
                            </li>
                            <li><i class="fa-solid fa-snowflake"></i></i>Elevated from Floor with Mirror Covered Legs
                            </li>
                            <li><i class="fa-solid fa-snowflake"></i></i> Smart Box Packaging to Ensure Safe Delivery
                            </li>
                        </ul>
                    </div>



                </div>

                <div class="info-container review">
                    <section class="review-window">

                        <div id="rev-sec" class="review-list">
                            <!-- fetching reviews -->
                            <?php getreviews(1); ?>
                            <!-- <div class="review">
                                <div class="reviewer">Jane Doe</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                </div>
                                <div class="description">Absolutely superb, crosses my expectations.</div>
                            </div>
                            <div class="review">
                                <div class="reviewer">Claire flaire</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                </div>
                                <div class="description">Really like the design

                                </div>
                            </div>
                            <div class="review">
                                <div class="reviewer">Brookie Sheild</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star far fa-star"></i>
                                    <i class="star far fa-star"></i>
                                </div>
                                <div class="description">Great design but the headboard is not that comfortable</div>
                            </div>
                            <div class="review">
                                <div class="reviewer">Atiq Mahbub</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star far fa-star"></i>
                                </div>
                                <div class="description">Stunning look, but the elevated foot below is not enough to
                                    clean distribution
                                    but large enough for small items to go under it and then hard to recover
                                </div>
                            </div>
                            <div class="review">
                                <div class="reviewer">Uncle Joe</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star far fa-star"></i>
                                    <i class="star far fa-star"></i>
                                </div>
                                <div class="description">Overal design is comfortable but there should be little more
                                    height in 3 sides
                                    to ensure that mattress doesn't fall below
                                </div>
                            </div> -->

                        </div>
                    </section>

                    <div class="review-form">
                        <form>
                            <label for="review-text">Write your review:</label>
                            <textarea id="review-text" name="review-text" placeholder="Write your review here" rows="6" required></textarea>
                            <br>
                            <div class="rev-rating">
                            <input type="radio" id="star5" name="rev-rating" value="5">
                            <label for="star5" class="fa fa-star"></label>
                            <input type="radio" id="star4" name="rev-rating" value="4">
                            <label for="star4" class="fa fa-star"></label>
                            <input type="radio" id="star3" name="rev-rating" value="3">
                            <label for="star3" class="fa fa-star"></label>
                            <input type="radio" id="star2" name="rev-rating" value="2">
                            <label for="star2" class="fa fa-star"></label>
                            <input type="radio" id="star1" name="rev-rating" value="1">
                            <label for="star1" class="fa fa-star"></label>
                            </div>
                            <br>
                            <button name="review-submit" formmethod="post" class="submit-button" type="submit">Submit</button>
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
        const ratingInputs = document.getElementsByName("rev-rating");

        var ratingValue;
        var allowSubmit = false;

        for (const input of ratingInputs) {
            input.addEventListener("change", function() {
            ratingValue = this.value;
            });
        }

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            // Do something with the review text
            var reviewText = textarea.value;
            //console.log(reviewText, ratingValue);

            // $.ajax({
            //     url:'Antique%20Bed.php',
            //     method: 'POST',
            //     data: {
            //         'review_rating': ratingValue,
            //         'review_text': reviewText,
            //         'review_product_id': 1
            //     },
            //     success: function(response) {
            //         allowSubmit = true;
                    
            //         console.log(allowSubmit);
            //         <?php echo postreviews()?>
            //         console.log(allowSubmit);
                    
                    if(!allowSubmit) {
                        alert('[Submission Cancelled]');
                    }
                    // else{
                    //     $('#rev-sec').html($('#rev-sec').html());
                    // }
            //     }
            // });
            
            // Reset the form
            form.reset();
        });
    </script>
    
<?php
    if(isset($_SESSION['email'])) {
        if(isset($_POST['review-submit'])) {
            global $con;
            $email = $_SESSION['email'];
            
            $select_query = "SELECT * FROM `user_table` WHERE email = '$email'";
            $result_query = mysqli_query($con, $select_query);
            
            while($row = mysqli_fetch_assoc($result_query)){
                $user_id = $row['User_id'];
                
                $feedback_rating = 4;
                $feedback_description = $_POST['review-text'];
                
                $product_id = 1;
                
                // $check_query = "SELECT * FROM feedback WHERE user_id = $user_id AND product_id = $product_id";
                // $result_check = mysqli_query($con, $check_query);
            
            // if($result_check) {
            //     $feedback_id = $row['feedback_id'];
            //     $update_query = "UPDATE feedback SET feedback_description = '$feedback_description' WHERE feedback_id = $feedback_id";
            //     $result_update = mysqli_query($con,$update_query);
            // }
            // else {   
                $insert_query = "INSERT INTO `feedback` (rating, desc, user_id, product_id) VALUES ('$feedback_rating', '$feedback_description', '$user_id', '$product_id')";
                $result_insert = mysqli_query($con,$insert_query);
            // }
        }
        }
    }
    else {
        echo "<script>allowSubmit = false;</script>";
    }
    
?>

</body>

</html>