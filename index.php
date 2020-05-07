<?php
    session_start();

    if($_SESSION['islogin']){
        header("Location:ui/login.php");
    }else{
        header("Location:ui/index.php?page=index&&module=");
    }

?>