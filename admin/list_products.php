<h2 class="text-center my-3">List of Products</h2>
<table class="table table-bordered mt-2">
    <thead class="bg-dark text-light text-center">
        <?php
            $get_products="select * from `products`";
            $result = mysqli_query($con,$get_products);
            $row_count=mysqli_num_rows($result);

            if ($row_count == 0) {
                echo "<h1 class='text-danger text-center mt-5'>No Product Available Yet</h1>";
            }
            else {
                echo "<tr>
                <th>Sl no.</th>
                <th>Product Name</th>
                <th style='width: 25rem;'>Description</th>
                <th>Product Image</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
                </thead>
                <tbody class='bg-light text-dark'>";
                    $number=0;
                    while($row_data=mysqli_fetch_assoc($result)){
                        $product_id=$row_data['product_id'];
                        $product_title=$row_data['product_title'];
                        $product_description=$row_data['product_description'];
                        $product_image=$row_data['product_image'];
                        $product_price=$row_data['product_price'];
                        $number++;
                        echo "
                        <tr>
                        <td>$number</td>
                        <td>$product_title</td>
                        <td>$product_description</td>
                        <td class='text-center'><img src='./products_images/$product_image' alt='product image' style='height: 10rem; width: 10rem;'></td>
                        <td class='text-center'>$product_price</td>
                        <td class='text-center'><a href='index.php?edit_product=$product_id'><i class='fa-solid fa-pen-to-square text-primary'></i></a></td>
                        <td class='text-center'><a href='index.php?delete_product=$product_id'><i class='fa-solid fa-trash text-danger'></i></a></td>
                        </tr>";
                    }
            }
        ?>    
</table>