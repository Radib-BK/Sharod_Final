<?php
    include('../includes/connect.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHAROD - Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/adnav.css">
</head>

<body>
    <div class="nav">
        <h2 class="text-center">MANAGE PRODUCTS</h2>
    </div>
    <div class="row navrow">
        <div class="col-md-12 bg-dark p-2">
            <div class="button text-center">
                <button><a href="index.php?insert_products" class="nav-link text-dark bg-light p-1 my-1 mx-2 fs-5">Insert Products</a></button>
                <button><a href="index.php?list_products" class="nav-link text-dark bg-light p-1 my-1 mx-2 fs-5">View Products</a></button>
                <button><a href="index.php?insert_categories" class="nav-link text-dark bg-light p-1 my-1 mx-2 fs-5">Insert Categories</a></button>
                <button><a href="index.php?list_categories" class="nav-link text-dark bg-light p-1 my-1 mx-2 fs-5">View Categories</a></button>
                <button><a href="" class="nav-link text-dark bg-light p-1 my-1 mx-2 fs-5">All Orders</a></button>
                <button><a href="" class="nav-link text-dark bg-light p-1 my-1 mx-2 fs-5">All Payments</a></button>
                <button><a href="index.php?list_users" class="nav-link text-dark bg-light p-1 my-1 mx-2 fs-5">List of Users</a></button>
                <button><a href="admin_logout.php" class="nav-link text-dark bg-light p-1 my-1 mx-2 fs-5">Logout</a></button>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <?php
        if(isset($_GET['insert_products'])){
            include('insert_product.php');
        }
        if(isset($_GET['list_products'])){
            include('list_products.php');
        }
        if(isset($_GET['delete_product'])){
            include('delete_product.php');
        }
        if(isset($_GET['edit_product'])){
            include('edit_product.php');
        }
        if(isset($_GET['insert_categories'])){
            include('insert_categories.php');
        }
        if(isset($_GET['list_categories'])){
            include('list_categories.php');
        }
        if(isset($_GET['delete_category'])){
            include('delete_category.php');
        }
        if(isset($_GET['edit_category'])){
            include('edit_category.php');
        }
        if(isset($_GET['list_users'])){
            include('list_users.php');
        }
        if(isset($_GET['delete_user'])){
            include('delete_user.php');
        }
        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>