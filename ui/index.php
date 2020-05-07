
<?php 
    include '../config/koneksi.php';
    include '../config/function.php';
    $base_url = 'http://localhost/pd/';
    $base_url_images = $base_url.'/ui/images/';
   
    ?>
        <!DOCTYPE html>
        <html dir="ltr" lang="en">

    <?php
    include './css/getcss.php';
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
    ?>
    
    <?php
    include './js/getjs.php';
    ?>
    </html>
    <?php

?>