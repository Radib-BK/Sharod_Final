<?php
    include('includes/connect.php');
    session_start();
    if(isset($_SESSION['email'])){
        $delete_acc=$_SESSION['email'];
        $delete_query="delete from `user_table` where email='$delete_acc'";
        $result_query=mysqli_query($con,$delete_query);
        if($result_query){
            echo "<script>alert('Account Deleted')</script>";
            session_unset();
            session_destroy();
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
?>