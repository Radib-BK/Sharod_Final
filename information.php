<?php

    session_start();
    if(isset($_SESSION['username'])){

        echo "Welcome ".$_SESSION['username'];
        echo "<br>";
        echo "Your Password is ".$_SESSION['password'];
        echo "<br>";
        echo "Your email is ".$_SESSION['email'];
    }
    else{
        echo "Please login again to continue";
    }

?>