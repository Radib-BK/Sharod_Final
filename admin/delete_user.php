<?php
    if(isset($_GET['delete_user'])){
        $delete_id=$_GET['delete_user'];
        $delete_query="delete from `user_table` where User_id=$delete_id";
        $result_query=mysqli_query($con,$delete_query);
        if($result_query){
            echo "<script>alert('User Deleted')</script>";
            echo "<script>window.open('./index.php','_self')</script>";
        }
    }
?>