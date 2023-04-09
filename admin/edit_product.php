<?php
    if(isset($_GET['edit_product'])){
        $edit_id=$_GET['edit_product'];

        $get_data="select * from `products` where product_id=$edit_id";
        $result=mysqli_query($con,$get_data);
        $row=mysqli_fetch_assoc($result);

        $product_title=$row['product_title'];
        $description=$row['product_description'];
        $product_keywords=$row['product_keywords'];
        $category_id=$row['category_id'];
        $product_image=$row['product_image'];
        $product_price=$row['product_price'];
        

        $select_cat="select * from `categories` where category_id=$category_id";
        $result_cat=mysqli_query($con,$select_cat);
        $row_cat=mysqli_fetch_assoc($result_cat);
        $cat_id= $row['category_id'];
        $cat_title = $row_cat['category_title'];
    }
?>

<h2 class="text-center my-3">Edit Products</h2>
<form action="" method="post" class="mb-2" enctype="multipart/form-data">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title"> Product Title : </label>
        <input value="<?php echo $product_title ?>" type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_description"> Product Description : </label>
        <input value="<?php echo $description ?>" type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" maxlength="50" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords"> Product Keywords : </label>
        <input value="<?php echo $product_keywords ?>" type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_category" id="product_category" class="form-select">
            <option value="<?php echo $cat_id ?>"><?php echo $cat_title ?></option>
            <?php
            $select_query="select * from `categories`";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $category_title=$row['category_title'];
                $category_id=$row['category_id'];
                if ($category_id == 1 or $category_id == $cat_id) {
                    continue;
                }
                echo "<option value='$category_id'>$category_title</option>";
            }
            ?>
            
        </select>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image1" class="form-label"> Product Image : </label>
        <div class="d-flex">
            <input type="file" name="product_image" id="product_image" class="form-control" required>
            <img src="./products_images/<?php echo $product_image ?>" alt="product image" style="height: 10rem; width: 10rem;">
        </div>
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price"> Product Price : </label>
        <input value="<?php echo $product_price ?>" type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required>
    </div>
    <div class="form-outline mb-4 w-50 m-auto text-center">
        <input type="submit" name="edit_product" class="btn btn-outline-light btn-dark rounded-pill shadow px-4 my-3 border-2 border-warning" value="Update Product">
    </div>
</form>

<?php
    if(isset($_POST['edit_product'])){
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
            $update_products="update `products` set product_title='$product_title',product_description='$description',product_keywords='$product_keywords',category_id='$product_category',product_image='$product_image',product_price='$product_price',date=NOW() where product_id = $edit_id";
            $result_query=mysqli_query($con,$update_products);
            if ($result_query) {
                echo "<script>alert('Successfully Updated Product')</script>";
                echo "<script>window.open('./index.php?list_products','_self')</script>";
            }
        }
    }
?>