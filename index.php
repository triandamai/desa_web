<?php
    session_start();

    if($_SESSION['islogin']){
       header("Location:ui/index.php?page=index&&module=");
    }else{ 
        header("Location:login.php");
        
    }

?>