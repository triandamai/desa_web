<?php   
      error_reporting(0);
      session_start();
       include 'config/function.php';
        $db = new database();

        if(isset($_POST['simpan'])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $simpan = $db->login($user,$pass);
            if($simpan){
               $_SESSION["islogin"] = true;
                echo '<script>alert("Berhasil login ");</script>';
               
                echo '<script> location.replace("'.$base_url.'ui/index.php?page=index"); </script>';
            }else{
                echo '<script>alert("Gagal Login!");</script>';
            }
        }
 ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pelayanan Desa</title>
    <link rel="stylesheet" href="auth/css/components.css">
    <link rel="stylesheet" href="auth/css/icons.css">
    <link rel="stylesheet" href="auth/css/responsee.css">
    <link rel="stylesheet" href="auth/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="auth/owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="auth/css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="auth/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="auth/js/jquery-ui.min.js"></script>      
  </head>
  <body>

    <main role="main">    
     
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-white text-center">
          <div class="item">
            <div class="s-12">
              <img src="auth/img/black.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    <!-- Title -->
					
                    <h4 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Pelayanan Masyarakat<br>
					Desa Lumbir</h4>
					
                    <div class="s-12 m-10 l-8 center"></div>
                    <div class="line">
                      <div class="s-12 m-12 l-3 center">
                        <img src="auth/img/lambang_banyumas.png">
                      </div>       
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      

      <hr class="break margin-top-bottom-0">
  
      <article>
        <header class="section background-dark">
          <div class="line">        
            <blockquote class="tr_bq">
    			<div class="container">
				  <center>
					  <font color="blue"><b>LOGIN PENGUNJUNG</b></font>
					</center>
          <center>
			      <form action="" method="post" class="form-signin">
			        <table>
			          <tr>
                  <td>Username</td>
				          <td>:   <input type="text" autofocus required name="user" placeholder="Username" class="form-control" /></td>
			          </tr>
			          <tr>
                  <td>Password</td>
				          <td>:  <input type="password" required name="pass" placeholder="Password" class="form-control" /></td></tr>
			          <tr>
				          <td></td>
				          <td>
				            <input value="SIMPAN" name="simpan" type="submit" class="button"/>
				          </td>
			          </tr>
		          </table>
            </form>
	        </center>
            </div>

</blockquote>	
                </div>
              </div>
            </div>      
          </div>
        </div> 
      </article>
    </main>
	
	  <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Telepon/Hp : (0281) 000000</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          
        </div>
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
				<center>
                  <h3 class="margin-bottom-0">Alamat</h3>
                  <p>Jl. Lumbir, Kabupaten Banyumas, Jawa Tengah<br>
                     
                  </p>
				</center>
                </div>
               
                
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
				<center>
                  <h3 class="margin-bottom-0">No. Handphone</h3>
                  <p>000-000-000-000<br>
                  </p>
				</center>
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Kreator By : Aby</p>
          
        </div>
       
      </section>
    </footer>
    <!-- FOOTER -->
	<script type="text/javascript" src="auth/js/responsee.js"></script>
    <script type="text/javascript" src="auth/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="auth/js/template-scripts.js"></script>
  </body>
</html>