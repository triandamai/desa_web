
<?php 
    include '../config/function.php';
  
   
    ?>
        <!DOCTYPE html>
        <html dir="ltr" lang="en">

    <?php
    include './css/getcss.php';
    if(isset($_GET['ref'])){
        header("Location:".$_GET['module'].".php?id=".$_GET['id']);
    }else{
    if(!isset($_GET['page']) || $_GET['page'] == ''){
        include 'dashboard.php';
    }else{
        $uri = $_GET['page'];
        if($uri == "index"){
            include 'dashboard.php';
        }else{
            include $uri.'.php';
        }
        
    }
}
    ?>
    
    <?php
    include './js/getjs.php';
    ?>
    </html>
    <?php

?>