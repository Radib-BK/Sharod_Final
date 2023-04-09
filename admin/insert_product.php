<?php
    if(isset($_POST['insert_product'])){
        $product_title=$_POST['product_title'];
        $description=$_POST['product_description'];
        $product_keywords=$_POST['product_keywords'];
        $product_category=$_POST['product_category'];
        $product_price=$_POST['product_price'];
        
        $product_image=$_FILES['product_image']['name'];
        $temp_image=$_FILES['product_image']['tmp_name'];

        if ($product_title=='' or $description=='' or $product_keywords=='' or $product_category=='' or $product_price=='' or $product_image=='') {
            echo "<script>alert('Please Fill All the Fields')</script>";
            exit();
        }
        else {
            move_uploaded_file($temp_image,"./products_images/$product_image");
            $insert_products="insert into `products` (product_title,product_description,product_keywords,category_id,product_image,product_price,date) values ('$product_title','$description','$product_keywords','$product_category','$product_image','$product_price',NOW())";
            $result_query=mysqli_query($con,$insert_products);
            if ($result_query) {
                echo "<script>alert('Successfully Inserted Product')</script>";
            }
        }
    }
?>

<h2 class="text-center my-3">Insert Products</h2>
<form action="" method="post" class="shadow w-75 mx-auto mb-2" enctype="multipart/form-data">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title"> Product Title : </label>
        <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_description"> Product Description : </label>
        <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" maxlength="250" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords"> Product Keywords : </label>
        <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_category" id="product_category" class="form-select">
            <option value="">Select A Category</option>
            <?php
            $select_query="select * from `categories`";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $category_title=$row['category_title'];
                $category_id=$row['category_id'];
                if ($category_id != 1) {
                    echo "<option value='$category_id'>$category_title</option>";
                }
            }
            ?>
            
        </select>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image1" class="form-label"> Product Image : </label>
        <input type="file" name="product_image" id="product_image" class="form-control" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price"> Product Price : </label>
        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto text-center">
        <input type="submit" name="insert_product" class="btn btn-outline-light btn-dark rounded-pill shadow px-4 my-3 border-2 border-warning" value="Insert Product">
    </div>
</form>