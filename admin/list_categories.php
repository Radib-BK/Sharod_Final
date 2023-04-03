<h2 class="text-center my-3">Category List</h2>
<table class="table table-bordered mt-2">
    <thead class="bg-dark text-light text-center">
        <?php
            $get_categories="select * from `categories`";
            $result = mysqli_query($con,$get_categories);
            $row_count=mysqli_num_rows($result);

            if ($row_count <= 1) {
                echo "<h1 class='text-danger text-center mt-5'>No Categories Created Yet</h1>";
            }
            else {
                echo "<tr>
                <th>Sl no.</th>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
                </thead>
                <tbody class='bg-light text-dark'>";
                    $number = -1;
                    while($row_data=mysqli_fetch_assoc($result)){
                        $category_id=$row_data['category_id'];
                        $category_title=$row_data['category_title'];
                        $number++;
                        if ($category_id != 1) {
                            echo "
                            <tr>
                            <td>$number</td>
                            <td>$category_title</td>
                            <td class='text-center'><a href='index.php?edit_category=$category_id'><i class='fa-solid fa-pen-to-square text-primary'></i></a></td>
                            <td class='text-center'><a href='index.php?delete_category=$category_id'><i class='fa-solid fa-trash text-danger'></i></a></td>
                            </tr>";
                        }
                    }
            }
        ?>    
</table>