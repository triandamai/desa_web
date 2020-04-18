<?php 

$base = 'http://localhost/pd/ui/css/';
if(!isset($_GET['page']) || $_GET['page'] == ''){
    $title = "Utama";
}else{
    $title = $_GET['page'];
    
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $base;?>favicon.png">
    <title><?= $title;?></title>
    <!-- Custom CSS -->
    <link href="<?= $base;?>c3.min.css" rel="stylesheet">
    <link href="<?= $base;?>chartist.min.css" rel="stylesheet">
    <link href="<?= $base;?>jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?= $base;?>style.min.css" rel="stylesheet">
    <link href="<?= $base;?>dataTables.bootstrap4.css" rel="stylesheet">
</head>