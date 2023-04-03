<?php
include('includes/connect.php');
include('functions/common_funcs.php');
session_start();

$user_session_email = $_SESSION['email'];
$select_query = "Select * from `user_table` where email = '$user_session_email'";
$result_query = mysqli_query($con, $select_query);
$row_fetch = mysqli_fetch_assoc($result_query);
$user_id = $row_fetch['User_id'];
$user_name = $row_fetch['username'];
$email = $row_fetch['email'];
$address = $row_fetch['user_address'];
$phone = $row_fetch['mobile'];
$pass = $row_fetch['password'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <script src="js/prof.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <i class="fas"><a href="#wishlist">&#xf004;</a></i>
                <i class="fas"><a href="#cart">&#xf07a;</a></i>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </div>
        </div>
    </header>
    <div class="container_main">
        <div class="p_container">
            <div class="sidebar">
                <h2>- MY PROFILE -</h2>
                <ul>
                    <li class="active" data-target="#personalInformationSection">Personal Information</li>
                    <li data-target="#changePasswordSection">Change Password</li>
                    <li data-target="#ordersSection">Orders</li>
                </ul>
                <input id="logout_btn" type="button" onclick="location.href='logout.php'" value="LOG OUT">
                <form method="post" action="delete-account.php">
                    <input id="delete_btn" type="button" onclick="confirmDelete()" value="DELETE ACCOUNT">
                </form>
                <script>
                    function confirmDelete() {
                        Swal.fire({
                            title: 'Delete Your Account?',
                            text: 'This Action Cannot Be Undone!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'YES, DELETE',
                            cancelButtonText: 'CANCEL',
                            customClass: {
                                popup: 'my-custom-popup-class',
                                icon: 'my-custom-icon-class',
                                confirmButton: 'my-custom-button-class',
                                cancelButton: 'my-custom-cancel-class'
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // User clicked OK
                                window.location.href = "./delete-account.php";
                            }
                        })
                    }
                </script>
                <style>
                    .my-custom-popup-class {
                        background-color: #f1f1f1;
                        border-radius: 10px;
                        border: none;
                        padding: 4rem;
                        font-size: large;
                        box-shadow: 5px 3px 10px rgba(0, 0, 0, 0.3);
                    }

                    /* Custom icon class */
                    .my-custom-icon-class {
                        color: #64dd17;
                        /* green color */
                        font-size: 3rem;
                    }

                    /* Custom confirm button class */
                    .my-custom-button-class {
                        background-color: #f50b0b;
                        color: #fff;
                        border-radius: .5rem;
                        padding: 1rem 2rem;
                        font-size: 4rem;
                        font-weight: bold;
                        border: none;
                        transition: all 0.3s ease-in-out;
                    }

                    .my-custom-cancel-class {
                        background-color: #65f50b;
                        /* green color */
                        color: #fff;
                        border-radius: .5rem;
                        padding: 1rem 2rem;
                        font-size: 4rem;
                        font-weight: bold;
                        border: none;
                        transition: all 0.3s ease-in-out;
                    }

                    .my-custom-button-class:hover {
                        background-color: #aa0c0c;
                        cursor: pointer;
                    }

                    .my-custom-cancel-class:hover {
                        background-color: #4eaa0c;
                        /* darker green color */
                        cursor: pointer;
                    }
                </style>
            </div>
            <div class="main">
                <div class="section active" id="personalInformationSection">
                    <h1>Personal Information</h1>
                    <form class="form_ctrl" id="personalInformationForm" method="post" action="">
                        <label for="prof_usernameInput">Username :</label>
                        <input class="form-control" type="text" id="usernameInput" name="prof_username" value="<?php echo $user_name; ?>">
                        <label for="emailInput">Email :</label>
                        <?php echo "<input readonly type='email' id='emailInput' name='email' value='" . $_SESSION['email'];
                        echo "'>"; ?>
                        <label for="phoneInput">Phone Number :</label>
                        <input class="form-control" type="phone" id="phoneInput" name="phone" value="<?php echo $phone; ?>">
                        <label for="addressInput">Shipping Address :</label>
                        <input class="form-control" type="address" id="addressInput" name="address" value="<?php echo $address; ?>">
                        <button type="submit" name="user_update">Save Changes</button>
                        <?php
                        if (isset($_POST['user_update'])) {
                            $update_id = $user_id;
                            $up_username = $_POST['prof_username'];
                            $up_address = $_POST['address'];
                            $up_phone = $_POST['phone'];

                            $update_query = "update `user_table` set username='$up_username',user_address='$up_address',mobile='$up_phone' where user_id=$update_id";
                            $result_query_update = mysqli_query($con, $update_query);
                            if ($result_query_update) {
                                echo "<script>window.open('profile.php','_self')</script>";
                            }
                        }
                        ?>
                    </form>
                </div>
                <div class="section" id="changePasswordSection">
                    <h1>Change Password</h1>
                    <form class="form_ctrl" id="changePasswordForm" method="post" action="">
                        <label for="currentPasswordInput">Current Password:</label>
                        <input type="password" id="currentPasswordInput" name="currentPassword">
                        <label for="newPasswordInput">New Password:</label>
                        <input type="password" id="newPasswordInput" name="newPassword">
                        <label for="confirmPasswordInput">Confirm New Password:</label>
                        <input type="password" id="confirmPasswordInput" name="confirmPassword">
                        <button type="submit" name="upPassword">Change Password</button>
                        <?php

                        if (isset($_POST['upPassword'])) {
                            $update_id = $user_id;
                            $curr_password = $_POST['currentPassword'];
                            $up_password = $_POST['newPassword'];
                            $hash_password = password_hash($up_password, PASSWORD_DEFAULT);
                            $conf_password = $_POST['confirmPassword'];


                            if (password_verify($curr_password, $pass)) {
                                if ($up_password == $conf_password) {
                                    $update_query_2 = "update `user_table` set password = '$hash_password' where user_id = $update_id";
                                    $result_query_update_2 = mysqli_query($con, $update_query_2);
                                    if ($result_query_update_2) {
                                        echo "<script>alert('Password Updated Successfully')</script>";
                                        echo "<script>window.open('profile.php','_self')</script>";
                                    }
                                } else {
                                    echo "<script>alert('Confirm password did not match')</script>";
                                }
                            } else {
                                echo "<script>alert('Password Do Not Match')</script>";
                            }
                        }
                        ?>
                    </form>
                </div>
                <div class="section" id="ordersSection">
                    <h1>Orders</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>2022-01-01</td>
                                <td>Chair</td>
                                <td>10000</td>
                                <td>Delivered</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>2022-02-15</td>
                                <td>Table</td>
                                <td>20000</td>
                                <td>In Progress</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>2022-03-25</td>
                                <td>Sofa</td>
                                <td>50000</td>
                                <td>Cancelled</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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