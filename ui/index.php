
<?php 
    include '../config/koneksi.php';
    include '../config/function.php';
    $base_url = 'http://localhost/pd/';
    $base_url_images = 'http://localhost/pd/ui/images/';
    $base_url_module = $base_url.'ui/index.php?page='.$_GET['page'].'&&module='.$_GET['module'];
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