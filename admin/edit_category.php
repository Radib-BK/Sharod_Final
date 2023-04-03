<?php
if (isset($_GET['edit_category'])) {
    $edit_id = $_GET['edit_category'];

    $get_data = "select * from `categories` where category_id=$edit_id";
    $result = mysqli_query($con, $get_data);
    $row = mysqli_fetch_assoc($result);

    $category_title = $row['category_title'];
}
?>

<h2 class="text-center my-3">Edit Category</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-light" id="basic-addon1"><i class="fa-solid fa-receipt"> </i></span>
        <input value="<?php echo $category_title ?>" type="text" class="form-control" name="category_title" placeholder="Category Name" aria-label="Category" aria-describedby="basic-addon1" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto text-center">
        <input type="submit" class="btn btn-outline-light btn-dark rounded-pill shadow px-4 my-3 border-2 border-warning" name="edit_category" value="Edit Category" aria-label="Category" aria-describedby="basic-addon1">
        <!-- <button class=" btn btn-outline-light btn-dark rounded-pill shadow p-2 my-3 border-2 border-warning"> Insert Category </button> -->
    </div>
</form>



<?php
if (isset($_POST['edit_category'])) {
    $category_title = $_POST['category_title'];

    $update_category = "update `categories` set category_title='$category_title' where category_id = $edit_id";
    $result_query = mysqli_query($con, $update_category);
    if ($result_query) {
        echo "<script>alert('Successfully Updated Category')</script>";
        echo "<script>window.open('./index.php?list_categories','_self')</script>";
    }
}
?>