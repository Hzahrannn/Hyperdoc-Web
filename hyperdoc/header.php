<!doctype html>
<html class="no-js" lang="zxx">

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HyperDoc</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<!-- header-start -->		
      <div class="header-area ">
          <div id="sticky-header" class="main-header-area">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-xl-3 col-lg-2">
                          <div class="logo">
                              <a href="index.php">
                                  <img src="img/logo.png" alt="">
                              </a>
                          </div>
                      </div>
                      <div class="col-xl-6 col-lg-7">
                          <div class="main-menu  d-none d-lg-block">
                              <nav>
                                  <ul id="navigation">
                                      <li><a href="index.php">home</a></li>
                                      <li><a href="Klinik.php">Klinik Kami</a></li>
                                      <li><a href="Dokter.php">Dokter</a></li>
                                      <li><a href="Tanyadokter.php">Tanya Dokter</a></li>
                                      <li><a href="ai/index.php">Tanya Dokku</a></li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                      <?php 
                      if(!isset($_SESSION['email_user'])) {
                        ?>
                      <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                          <div class="Appointment">
                              <div class="book_btn d-none d-lg-block">
                                  <a class="popup-with-form" href="#test-form">Login</a>
                              </div>
                          </div>
                      </div>
                      <?php 
                }

                  else{
                  $email_user=$_SESSION['email_user'];
                  ?>
                  <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                          <div class="Appointment">
                              <div class="book_btn d-none d-lg-block">
                                  <a href="profil.php">Lihat Profil</a>
                              </div>
                          </div>
                      </div>

                  <?php
                }
                  ?>
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- header-end -->
  <!-- form itself end-->

<form id="test-form" class="white-popup-block mfp-hide" action="login.php" method="POST">
<div class="popup_box ">
   <div class="popup_inner">
       <h3>LOGIN</h3>
       <form action="login.php" method="POST">
           <div class="row">
               <div class="col-xl-12">
                    <label for="emailaddress">E-mail</label>
                 <input class="form-control" type="email" name="email_user" required="" >
               </div>
               <div class="col-xl-12">
               <label for="password">Password</label>
              <input class="form-control" type="password" required="" name="password" >
               </div>
               <div class="col-xl-12">
                   <button type="submit" class="boxed-btn3">Masuk</button><br><br>
                   <a href="daftar.php">Belum Punya Akun?</a><br><br>
                   <a href="lupa.php">Lupa Password?</a>
               </div>
               
           </div>
       </form>
   </div>
</div>
</form>

<!-- form itself end -->