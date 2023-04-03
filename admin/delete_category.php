<?php
    if(isset($_GET['delete_category'])){
        $delete_id=$_GET['delete_category'];
        $delete_query="delete from `categories` where category_id=$delete_id";
        $result_query=mysqli_query($con,$delete_query);
        if($result_query){
            echo "<script>alert('Category Deleted')</script>";
            echo "<script>window.open('./index.php?list_categories','_self')</script>";
        }
    }
?>