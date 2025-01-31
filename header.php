<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require_once ('app/config/app.php');
    require_once ('app/libraries/Database.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Garage Door Repair in Massachusetts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body class="d-flex flex-column h-100">

    
<header>
    <div class="px-3 py-2 main-header text-white">
      <div class="container-flex">
        <div class="d-flex flex-wrap align-items-center justify-content-lg-start">
          <a href="<?= BASE_URL ?>" class="my-2 my-lg-0 me-lg-auto text-white text-decoration-none ">
             <img src="assets/img/logo.png" alt="">
          </a>

          <div class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto ms-sm-4 ms-md-2 w-25 d-none d-sm-none d-md-block">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </div>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small d-none d-lg-flex top-nav">
            <li>
              <a href="#" class="nav-link text-white">
                EXPERT ADVICE
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                SHOP
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                CONTACT US
              </a>
            </li>
            <li>
              <a href="#" class="nav-link contact-number">
              <img loading="lazy" src="assets/img/phone-.svg" alt="" width="30">
                617-693-5485
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="nav-section" class="px-3 py-1">
      <div class="container-flex d-flex flex-wrap justify-content-center">
        <div id="subheader-logo" class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
            <img src="assets/img/logo.png" height="40" width="187.41" alt="logo">
        </div>
        
      </div>
    </div>
  </header>
