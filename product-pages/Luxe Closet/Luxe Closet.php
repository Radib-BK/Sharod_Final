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



                    <div class="img-container">
                        <img class="blur" id="imageBox" src="Images/Luxe Closet.png">
                        <div class="content fade "> Luke Closet is the perfect solution for organizing your wardrobe!
                            With its innovative design and ample storage space, this closet will transform your
                            cluttered closet into a well-organized haven.
                        </div>
                    </div>
                </div>


                <div class="product-page-details">


                    <strong id="product-title">Luxe Closet</strong>




                    <span class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-o"></span>

                        <span class="review_count">2 reviews</span>
                    </span>

                    <span class="price">$150 <del>167$</del></span>

                    <span class="product-discount"><i class="fa fa-tag" aria-hidden="true"></i></i>10% discount</span>

                    <span class="product-id">
                        <span class="diamond">&diams;</span>
                        <span class="title">Product ID:</span>
                        <span class="id"> 101.13.108.023</span>
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
                            <li><span>Product Dimension:</span> L-120 x W-60 x H-200cm</li>

                            <li><span>Weight Capacity:</span> 70kg</li>
                            <li><span>Box Dimension:</span> L-125 x W-65 x H-25cm</li>
                            <li><span>Box Weight:</span> 72kg</li>
                            <li><span>Packaging Type:</span> Flatpack</li>
                        </ul>
                    </div>

                </div>
                <div class="info-container description">
                    <div class="product-description">
                        <div class="features">
                            <div class="feature">
                                <div class="feature-icon"><i class="fa-solid fa-layer-group"></i></div>
                                <h3>Modern Sleek Closet</h3>
                                <p>Luke Closet is the perfect addition to your bedroom with its modern and sleek design.
                                    Made with high-quality materials,
                                    this closet is designed to last for years. Its minimalist style complements any
                                    decor, and it's perfect for small spaces.</p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fa-solid fa-warehouse"></i></div>
                                <h3>Ample Storage Space</h3>
                                <p>With four adjustable shelves, two hanging rails, and a large bottom drawer, Luke
                                    Closet provides
                                    ample space for storing clothes, shoes, and accessories. You can customize the
                                    shelves to fit your needs and easily adjust them as your storage requirements
                                    change. </p>
                            </div>
                            <div class="feature">
                                <div class="feature-icon"><i class="fas fa-hammer"></i></div>
                                <h3>Sturdy Construction</h3>
                                <p>Made with high-quality engineered wood, Luke Closet is
                                    sturdy and durable. It features metal hardware that ensures the closet's longevity,
                                    while its adjustable feet provide stability and prevent wobbling.</p>
                            </div>


                            <div class="feature">
                                <div class="feature-icon"><i class="fa-solid fa-gavel"></i></div>
                                <h3>Easy Assembly</h3>
                                <p>Luke Closet is easy to assemble, and it comes with step-by-step instructions and all
                                    the necessary hardware. The flatpack packaging ensures that the closet arrives at
                                    your doorstep in perfect condition.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-container key-features">
                    <div class="product-info">
                        <ul class="product-features">
                            <li><i class="fa-solid fa-snowflake"></i>Modern and Sleek Design</li>
                            <li><i class="fa-solid fa-snowflake"></i>Ample Storage Space with Four Adjustable Shelves,
                                Two Hanging Rails, and a Large Bottom Drawer</li>
                            <li><i class="fa-solid fa-snowflake"></i>Sturdy Construction with Metal Hardware and
                                Adjustable Feet</li>
                            <li><i class="fa-solid fa-snowflake"></i>Easy Assembly with Step-by-Step Instructions and
                                All Necessary Hardware</li>
                            <li><i class="fa-solid fa-snowflake"></i>Smart Packaging to Ensure Safe delivery</li>
                        </ul>
                    </div>



                </div>

                <div class="info-container review">
                    <section class="review-window">

                        <div class="review-list">
                            <div class="review">
                                <div class="reviewer">Sarah Don</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                </div>
                                <div class="description">Love the Luke Closet! Modern design fits my room perfectly and
                                    ample storage space
                                    is great for my clothes and shoes. Easy assembly and very sturdy. Highly recommend!
                                </div>
                            </div>
                            <div class="review">
                                <div class="reviewer">Narin Khan</div>
                                <div class="stars">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star far fa-star"></i>
                                </div>
                                <div class="description">The Luke Closet is a great addition to my apartment -
                                    well-constructed with plenty of storage space.
                                    However, unclear assembly instructions and some minor scratches from packaging were
                                    disappointing. Overall happy with purchase.</div>
                            </div>


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



    </div>





</body>

</html>