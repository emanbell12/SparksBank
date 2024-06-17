<?php
include("customers.php");
?>
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

  <title>SparkBank</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="Home.php">
            <span>
              SparkBank
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="customers_list.php">Customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="transactions.php"> Transact </a>
                </li>
                
                <li class="nav-item ">
                  <a class="nav-link" href="history.php">History</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
              </ul>
            </div>
  
          </div>
        </nav>
      </div>
    </header>
   
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       
            <div class="container">
              <div class="row">
                <div class="col-md-6 ">
                  
                  <div class="detail_box">
                    <h1>
                      The best Transactions
                    </h1>
                    <p>
                     Make your Transactions at ease
                    </p>
                    <div class="btn-box">
                      <a href="transactions.php" class="btn-1">
                        Start
                      </a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="img-box">
            <img src="images/transactions.jpg" alt="">
          </div>
                   
            </div>
          </div>
        </div>
        
      </div>
    </section>
    
  </div>

  
  <div class="footer_bg">
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <h3>
                SPARKBANK
              </h3>
              <p>
                Transactions at Ease
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h4>
                BASIC LINKS
              </h4>
              <ul class="  ">
              <li class="active">
                  <a class="" href="home.php">Home</a>
                </li>
                <li class="">
                  <a class="" href="about.php"> About</a>
                </li>
                <li class="">
                  <a class="" href="customers_list.php">Customers</a>
                </li>
                <li class="">
                  <a class="" href="transactions.php"> Transact </a>
                </li>
                <li class="">
                  <a class="" href="contact.php">Contact Us</a>
                </li>
                <li class="">
                  <a class="" href="history.php">History</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <h4>
                CONTACT DETAILS
              </h4>
              <a href="">
                <div class="img-box">
                  <img src="images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                  +966 54 304 6174
                </p>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                  EmanBellahwal@outlook.com
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_form ">
              <h4>
                NEWSLETTER
              </h4>
              <form action="">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
              <div class="social_box">
                <a href="">
                  <img src="images/info-fb.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-twitter.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-linkedin.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-youtube.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    


    
    <section class="container-fluid footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://www.linkedin.com/in/eman-bellahwal/">Eman Bellahwal</a>
        </p>
      </div>
    </section>
    </div>
 

  </div>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  


</body>

</html>