<?php
function getIPAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function getproducts()
{
    global $con;
    $sort_order = "product_id";



    if (!isset($_GET['category'])) {
        // Check if sort_by value is submitted
        if (isset($_POST["sort_by"])) {
            $sort_order = $_POST["sort_by"];
        }

        if (isset($_GET['search_data_product'])){
            $search_data = $_GET['search_data'];
            $select_query = "select * from `products` where product_keywords like '%$search_data%' order by $sort_order";
            $result_query = mysqli_query($con, $select_query);
        }
        else{
            $select_query = "select * from `products` order by $sort_order";
            $result_query = mysqli_query($con, $select_query);
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image = $row['product_image'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];

            echo "  <div class='col-md-4'>
        <div class='card text-center'>
        <img class='card-img-top' src='./admin/products_images/$product_image' alt='$product_title'>
        <div class='card-body'>
        <h3 class='card-title'>$product_title</h3>
        <p class='card-text fs-5' style='height: 8rem;'>$product_description</p>
        <p class='card-text fs-3'> Price : $product_price /=</p>
        <a href='shop.php?add_to_cart=$product_id' class='btn btn-dark mx-4 my-4 py-3 fs-4 bg-gradient px-5 shadow-sm btn-outline-warning rounded-pill'>Add To Cart</a>
        <a href='./product-pages/$product_title/$product_title.php' class='btn btn-dark mx-5 my-4 py-3 fs-4 bg-gradient px-5 shadow-sm btn-outline-info rounded-pill'>View More</a>
        </div>
        </div>
        </div>";
        }
    }
}

function getuniqueCategories()
{
    global $con;
    $sort_order = "product_id";

    if (isset($_GET['category'])) 
    {
    $u_category_id = $_GET['category'];
    if ($u_category_id == 1) 
        {
            echo "<script>window.open('shop.php','_self')</script>";
        } 
    else 
        {

            // Check if sort_by value is submitted
            if (isset($_POST["sort_by"])) 
            {
                $sort_order = $_POST["sort_by"];
            }

            $select_query = "select * from `products` where category_id=$u_category_id order by $sort_order";
            $result_query = mysqli_query($con, $select_query);
            $num_of_rows=mysqli_num_rows($result_query);
            
            if($num_of_rows == 0)
            {
                echo "<img src='./images/OOS.png' alt='Out of Stock'>";
            }
            //$row=mysqli_fetch_assoc($result_query);
            //echo $row['product_title'];
            while ($row = mysqli_fetch_assoc($result_query)) 
            {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];

                echo "  <div class='col-md-4'>
                <div class='card text-center'>
                <img class='card-img-top' src='./admin/products_images/$product_image' alt='$product_title'>
                <div class='card-body'>
                <h3 class='card-title'>$product_title</h3>
                <p class='card-text fs-5' style='height: 8rem;'>$product_description</p>
                <p class='card-text fs-3'> Price : $product_price /=</p>
                <a href='shop.php?add_to_cart=$product_id' class='btn btn-dark mx-4 my-4 py-3 fs-4 bg-gradient px-5 shadow-sm btn-outline-warning rounded-pill'>Add To Cart</a>
                <a href='./product-pages/$product_title/$product_title.php' class='btn btn-dark mx-5 my-4 py-3 fs-4 bg-gradient px-5 shadow-sm btn-outline-info rounded-pill'>View More</a>
                </div>
                </div>
                </div>";
            }
        }
    }
}

//cart function
function cart(){
    if(isset($_GET['add_to_cart'])){
        if(!isset($_SESSION['email'])){
            echo "<script>alert('Login First To Add to Cart')</script>";
            echo "<script>window.open('shop.php','_self')</script>";
        }
        else{
            global $con;
            $u_email=$_SESSION['email'];
            $get_product_id=$_GET['add_to_cart'];
            $select_query="select * from `cart_details` where email = '$u_email' and product_id = $get_product_id";
            $result_query = mysqli_query($con,$select_query);
            $num_of_rows = mysqli_num_rows($result_query);
            if ($num_of_rows > 0) {
                echo "<script>alert('Item Already Exists in Cart')</script>";
                echo "<script>window.open('shop.php','_self')</script>";
            }
            else{
                $insert_query="insert into `cart_details` (product_id,email,quantity) values ($get_product_id,'$u_email',1)";
                $result_query = mysqli_query($con,$insert_query);
                echo "<script>window.open('shop.php','_self')</script>";
            }
        }
    }
}

function cart_item(){
    if(isset($_GET['add_to_cart'])){
            global $con;
            $u_email=$_SESSION['email'];
            $select_query="select * from `cart_details` where email = '$u_email'";
            $result_query = mysqli_query($con,$select_query);
            $cart_items = mysqli_num_rows($result_query);
            
    }
    else {
        global $con;
            $u_email=$_SESSION['email'];
            $select_query="select * from `cart_details` where email = '$u_email'";
            $result_query = mysqli_query($con,$select_query);
            $cart_items = mysqli_num_rows($result_query);
    }
    return $cart_items;
}

function total_cart_prices(){
    global $con;
    $u_email=$_SESSION['email'];
    $total = 0;
    $cart_query="select * from `cart_details` where email = '$u_email'";
    $result = mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $quantity = $row['quantity'];
        $select_products = "select * from `products` where product_id = $product_id";
        $result_products = mysqli_query($con,$select_products);
        $row_product_price = mysqli_fetch_array($result_products);
        $product_price = $row_product_price['product_price'];
        $product_values = $product_price * $quantity;
        $total+=$product_values;
    }
    echo $total;
}

function total_cart_prices_2(){
    global $con;
    $u_email=$_SESSION['email'];
    $total = 0;
    $cart_query="select * from `cart_details` where email = '$u_email'";
    $result = mysqli_query($con,$cart_query);
    while($row=mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $quantity = $row['quantity'];
        $select_products = "select * from `products` where product_id = $product_id";
        $result_products = mysqli_query($con,$select_products);
        $row_product_price = mysqli_fetch_array($result_products);
        $product_price = $row_product_price['product_price'];
        $product_values = $product_price * $quantity;
        $total+=$product_values;
    }
    return $total;
}

function get_pending_order_details(){
    global $con;
    $user_email = $_SESSION['email'];
    $get_details = "select * from `user_table` where email = '$user_email'";
    $result = mysqli_query($con,$get_details);
    $row_query = mysqli_fetch_array($result);
    $user_id=$row_query['User_id'];
    $get_orders="select * from `user_orders` where user_id = '$user_id' and order_status = 'pending'";
    $result_orders=mysqli_query($con,$get_orders);
    $row_count = mysqli_num_rows($result_orders);

    if($row_count == 0){
        echo "<h1 style='font-size: 48px; text-align: center; color: green; font-weight: bold; margin-top: 20rem'>YOU HAVE NO PENDING ORDERS</h1>";
    }
    else
    {
        echo "<table>
        <thead>
            <tr>
            <th>Order ID</th>
            <th>Invoice No.</th>
            <th>Order Date & Time</th>
            <th>No. of Products</th>
            <th>Total Bill</th>
            <th>Status</th>
            </tr>
        </thead>
        <tbody>";

        while($row= mysqli_fetch_array($result_orders)){
            $order_id = $row['order_id'];
            $invoice = $row['invoice_number'];
            $date = $row['order_date'];
            $quantity = $row['quantity'];
            $total = $row['total_amount'];
            $status = $row['order_status'];

            echo "<tr>
            <td>$order_id</td>
            <td>$invoice</td>
            <td>$date</td>
            <td>$quantity</td>
            <td>$total</td>
            <td>$status</td>
        </tr>";

        }
        echo "</tbody>
        </table>";
    }
}

function get_order_details(){
    global $con;
    $user_email = $_SESSION['email'];
    $get_details = "select * from `user_table` where email = '$user_email'";
    $result = mysqli_query($con,$get_details);
    $row_query = mysqli_fetch_array($result);
    $user_id=$row_query['User_id'];
    $get_orders="select * from `user_orders` where user_id = '$user_id' and order_status = 'delivered'";
    $result_orders=mysqli_query($con,$get_orders);
    $row_count = mysqli_num_rows($result_orders);

    if($row_count == 0){
        echo "<h1 style='font-size: 48px; text-align: center; color: red; font-weight: bold; margin-top: 20rem'>YOU HAVE NO PREVIOUS ORDERS</h1>";

    }
    else
    {
        echo "<table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Delivery Date & Time</th>
                <th>Invoice No.</th>
                <th>No. of Products</th>
                <th>Total Bill</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>";

        while($row= mysqli_fetch_array($result_orders)){
            $order_id = $row['order_id'];
            $invoice = $row['invoice_number'];
            $deli_date = $row['delivery_date'];
            $quantity = $row['quantity'];
            $total = $row['total_amount'];
            $status = $row['order_status'];

            echo "<tr>
            <td>$order_id</td>
            <td>$deli_date</td>
            <td>$invoice</td>
            <td>$quantity</td>
            <td>$total</td>
            <td>$status</td>
        </tr>";

        }
        echo "</tbody>
        </table>";
    }
}

?>
