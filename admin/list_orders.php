<h2 class="text-center my-3">Pending Order List</h2>
<table class="table table-bordered mt-2 w-75 shadow mx-auto">
    <thead class="bg-dark text-light text-center">
        <?php
        $get_orders = "select * from `user_orders` where order_status = 'pending'";
        $result = mysqli_query($con, $get_orders);
        $row_count = mysqli_num_rows($result);

        if ($row_count == 0) {
            echo "<h1 class='text-success text-center mt-5'>NO PENDING ORDERS</h1>";
        } else {
            echo "<tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Invoice No.</th>
                <th>Order Date & Time</th>
                <th>No. of Products</th>
                <th>Total Bill</th>
                <th>Confirm Payment</th>
                </tr>
                </thead>
                <tbody class='bg-light text-dark'>";
            while ($row_data = mysqli_fetch_assoc($result)) {
                $order_id = $row_data['order_id'];
                $user_id = $row_data['user_id'];
                $invoice = $row_data['invoice_number'];
                $date = $row_data['order_date'];
                $quantity = $row_data['quantity'];
                $total = $row_data['total_amount'];
                echo "
                    <tr>
                    <td>$order_id</td>
                    <td>$user_id</td>
                    <td>$invoice</td>
                    <td>$date</td>
                    <td>$quantity</td>
                    <td>$total</td>
                    <td><a href='index.php?confirm_payment=$order_id'><i class='fa-regular fa-circle-check fa-lg' style='color: #11AF13;'></i></a></td>
                    </tr>";
            }
        }
        ?>
</table>
<style>
    tbody tr:nth-child(even) {
        background-color: aliceblue;
    }

    tbody tr:nth-child(odd) {
        background-color: ghostwhite;
    }

    td {
        text-align: center;
        vertical-align: middle;
    }
</style>