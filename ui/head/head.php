<?php   
      error_reporting(0);
      session_start();
       include 'config/function.php';
        $db = new database();

        if(isset($_POST['logout'])){
            
        
               
                $_SESSION["islogin"] = false;
                echo '<script> location.replace("'.$base_url.'/login.php"); </script>';
            
        }
?>
<header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <div class="navbar-brand">
                        <a href="#">
                            <b class="logo-icon" >
                                <img style="width:10%; height:10%;" src="<?php echo $base_url_images;?>logo-icon.png" alt="homepage" class="dark-logo" />
                                <img style="width:10%; height:10%;" src="<?php echo $base_url_images;?>logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <span class="logo-text">
                            Banyumas
                                <!-- <img src="<?php echo $base_url_images;?>logo-text.png" alt="homepage" class="dark-logo" />
                                <img src="<?php echo $base_url_images;?>logo-light-text.png" class="light-logo" alt="homepage" /> -->
                            </span>
                        </a>
                    </div>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent"> 
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Halo,</span> <span
                                        class="text-dark">Admin</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <form method="POST" action="">
                            <input type="hidden" value="keluar" name="logout"/>
                                <button type="submit" class="dropdown-item">
                                <i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout
                                    </button>
                                    </form>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
</header>