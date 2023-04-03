<h2 class="text-center my-3">List of Users</h2>
<table class="table table-bordered mt-2">
    <thead class="bg-dark text-light text-center">
        <?php
            $get_users="select * from `user_table`";
            $result = mysqli_query($con,$get_users);
            $row_count=mysqli_num_rows($result);

            if ($row_count == 0) {
                echo "<h1 class='text-danger text-center mt-5'>No Users Have Registered Yet</h1>";
            }
            else {
                echo "<tr>
                <th>Sl no.</th>
                <th>Username</th>
                <th>Email Id</th>
                <th>Address</th>
                <th>Contact no.</th>
                <th>Delete</th>
                </tr>
                </thead>
                <tbody class='bg-light text-dark'>";
                    $number=0;
                    while($row_data=mysqli_fetch_assoc($result)){
                        $user_id=$row_data['User_id'];
                        $username=$row_data['username'];
                        $user_email=$row_data['email'];
                        $user_address=$row_data['user_address'];
                        $user_mobile=$row_data['mobile'];
                        $number++;
                        echo "
                        <tr>
                        <td>$number</td>
                        <td>$username</td>
                        <td>$user_email</td>
                        <td>$user_address</td>
                        <td>$user_mobile</td>
                        <td class='text-center'><a href='index.php?delete_user=$user_id'><i class='fa-solid fa-trash text-danger'></i></a></td>
                        </tr>";
                    }
            }
        ?>    
</table>