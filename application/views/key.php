<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>asset-dashboard/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>asset-dashboard/img/favicon.png">

  <title>Rest Api Beauty</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="<?php echo base_url()?>assets/images/logo.png" alt="" /><span>
              API BEAUTY 
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class="d-none d-lg-flex">
                    <li class="nav-item">
                   
                    </li>
                  </div>
                  <div class=" d-none d-lg-flex">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url()?>">
                        home
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url()?>index.php/home/logout">
                        Logout
                      </a>
                    </li>
                  </div>
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()"></button>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-1 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            WELCOME!!! <br />
                           
                          </h2>
                          <p>
                            Selamat Datang <?php echo $name?>
                            <br>
                            Api key anda adalah :
                            <br>
                            <h5><?php echo $key->key?></h5> 
                          </p>
                          <div class="d-flex">
                          <a href="https://documenter.getpostman.com/view/23661114/2s8ZDSb4uZ" class="slider_btn">
                              See Documentation
                            </a>
                          </div>
                          <div class="d-flex">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 float-right">
                      <div class="hero_img-box">
                        <img src="<?php echo base_url()?>assets/images/hero.png" alt="" width="100px" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>

    <!-- end slider section -->
  </div>

  

  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; <strong> 2023 D3 MI Gita Nurlita Kartini </strong> 
      <a href="https://html.design/"><strong>2203022</strong></a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>