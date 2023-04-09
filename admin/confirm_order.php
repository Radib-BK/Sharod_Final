<?php
    if(isset($_GET['confirm_payment'])){
        $order_id=$_GET['confirm_payment'];
        $update_query="update `user_orders` set delivery_date=NOW(),order_status='delivered' where order_id = $order_id";
        $result_query=mysqli_query($con,$update_query);
        if($result_query){
            echo "<script>window.open('./index.php?list_orders','_self')</script>";
        }
    }
?>