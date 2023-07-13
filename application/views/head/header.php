<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> H'Mong Village </title>
    <link rel=icon href="favicon.png" sizes="16x16" type="icon/png">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/flatpicker.css">
    <link rel="stylesheet" href="/assets/css/intlTelInput.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <header class="header-style-01">
      <nav class="navbar navbar-area navbar-border navbar-padding navbar-expand-lg">
        <div class="container custom-container-one nav-container">
          <div class="logo-wrapper">
            <a href="index.php" class="logo">
              <img src="/assets/img/logomain.png" alt="">
            </a>
          </div>
          <div class="responsive-mobile-menu d-lg-none">
            <a href="javascript:void(0)" class="click-nav-right-icon">
              <i class="las la-ellipsis-v"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hotel_booking_menu">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="hotel_booking_menu">
            <ul class="navbar-nav">
              <li >
                <a href="index.php">Home</a>
              </li>
              <li class="menu-item-has-children current-menu-item">
                <a href="javascript:void(0)">Services</a>
                <ul class="sub-menu">
                  <li>
                    <a href="/listroom">Room List</a>
                  </li>
                  <li>
                    <a href="/restaurant"> Restaurant </a>
                  </li>
                  <li>
                    <a href="/pab"> Pool and Bar </a>
                  </li>
                  <li>
                    <a href="/entertainment"> Entertainment </a>
                  </li>
                  <li>
                    <a href="/mas"> Massage and Spa </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="/about"> About </a>
              </li>
             
              <li>
                <a href="/tour"> Tour </a>
              </li>
             
              <li>
                <a href="/contact"> Contact Us </a>
              </li>
            </ul>
          </div>
          <div class="navbar-right-content show-nav-content">
            <div class="single-right-content">
              <div class="navbar-right-flex">
                
                <div class="btn-wrapper">
                  <?php 
                    
                    if (isset($user)) {
                    ?>
                    <a href ="/profile">
                      <?php
                        echo $user->email;
                      ?> 
                    </a>
                    <?php 
                     ?>
                     
                     <a href = "/logout"><i class="las la-sign-out-alt"></i></a>
                     <?php
                      
                    }
                    else{
                      
                    
                  ?>
                  
                  <a href="/login" class="cmn-btn btn-bg-1 radius-10"> Login </a>
                  <?php

                    }
                  ?>
                  
                </div>

              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

