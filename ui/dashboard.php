<body>
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->

    <div id="main-wrapper" 
    data-theme="light" 
    data-layout="vertical" 
    data-navbarbg="skin6" 
    data-sidebartype="full"
    data-sidebar-position="fixed"
    data-header-position="fixed" 
    data-boxed-layout="full">
<?php  
        include 'head/head.php'; 
        include 'aside/aside.php';
?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if(!isset($_GET['module'])){
                    include 'home.php';
                }else{
                    $base_url_module = $base_url.'ui/index.php?page='.$_GET['page'].'&&module='.$_GET['module'];
                    $uri = $_GET['module'];
                    include $uri.'/'.$uri.'.php';
                }?>
        <footer class="footer text-center text-muted"> 
        All Rights Reserved by Adminmart. Designed and Developed by <a href="#">WrapPixel</a>.
        </footer>
    </div>
</body>
