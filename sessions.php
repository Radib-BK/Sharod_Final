<?php
    //sessions()
    session_start();

    $_SESSION['username']="Radib";
    $_SESSION['password']="1234";
    $_SESSION['email']="radib@gmail.com";
    
    echo "Session Data Saved";

?>
