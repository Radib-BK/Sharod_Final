<?php
include('../includes/connect.php');

if (isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];

    // Check if category title is not empty
    if (!empty($category_title)) {

        $select_query = "SELECT * FROM `categories` WHERE category_title='$category_title'";
        $result_select = mysqli_query($con, $select_query);
        $num = mysqli_num_rows($result_select);

        if ($num > 0) {
            echo "<script>alert('Category Already Exists')</script>";
        } else {
            $insert_query = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";
            $result = mysqli_query($con, $insert_query);

            if ($result) {
                // echo "<script>alert('Category Inserted Successfully')</script>";
            }
        }
    }
}

?>


<h2 class="text-center my-3">Insert Categories</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-receipt"> </i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Category Name" aria-label="Category" aria-describedby="basic-addon1">
    </div>
    <div class="form-outline mb-4 w-50 m-auto text-center">
        <input type="submit" class="btn btn-outline-light btn-dark rounded-pill shadow px-4 my-3 border-2 border-warning" name="insert_cat" value="Insert Category" aria-label="Username" aria-describedby="basic-addon1">
        <!-- <button class=" btn btn-outline-light btn-dark rounded-pill shadow p-2 my-3 border-2 border-warning"> Insert Category </button> -->
    </div>
</form>