<!DOCTYPE html>

<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EVENT.ID</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- =======================================================
  * Template Name: Arsha - v2.0.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

<?php
if( ! empty($user)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
foreach($user as $data){?>

      <div class="avatar">
    <img src="gambar/<?php echo "$data->foto";?>" alt="">
      </div>
      <h5 class="logo mr-auto"><a href=""><?php echo "$data->username";?></a></h5>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->



      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <a href="<?php echo base_url();?>user" class="get-started-btn scrollto"><span></span> HOME</a>
          <a data-toggle="modal" data-target="#mydaftar" href="#" class="get-started-btn scrollto"><span></span> My Event</a>
          <a href="<?php echo base_url();?>user/logout" class="get-started-btn scrollto"><span></span> Logout</a>
        </ul>
      </nav><!-- .nav-menu -->

    <!--<a href="depan/v_login" class="get-started-btn scrollto">Log In</a>-->

<?php	} } else {?>

  <h1 class="logo mr-auto"><a href="">EVENT.ID</a></h1>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <nav class="nav-menu d-none d-lg-block">
    <ul>
      <a href="<?php echo base_url();?>" class="get-started-btn scrollto"><span></span> Home</a>
      <a data-toggle="modal" data-target="#mylogin" href="#" class="get-started-btn scrollto"><span></span> Login</a>
        <a data-toggle="modal" data-target="#mydaftar" href="#" class="get-started-btn scrollto"><span></span> Daftar</a>

    </ul>
  </nav><!-- .nav-menu -->

<?php } ?>
      </div>

          <style>

          .avatar{
            top: 40%;
            left:40%;
          }
          .avatar img{
            width: 50px;
            height: 50px;
            border-radius: 100%;
            border:0px solid #47b2e4;
          }
          </style>

  </header><!-- End Header -->
  <main id="main">
