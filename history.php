<?php
include("customers.php");
?>
<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <script src="Style.JS"></script>
  <title>SparkBank</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet" />
  
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
   
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
                <li class="nav-item">
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
               
                <li class="nav-item active">
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
    
    
  
   
    <div class="footer_bg">

<!-- contact section -->
<section class="contact_section layout_padding" id="contactLink">
    
<div class="row">
        <div class="col-lg-6 col-md-8 mx-auto">
        <div class="heading_container" >
        <h2>
          History
        </h2>
      </div>
      <div class="browser1"  style="margin: 0 auto;">
    <div class="container">
      <div class="row">
  <div>
            <select  name="state" id="maxRows">
                <option value="5000">Show ALL Rows</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="5">5</option>
            </select>
        </div>
        <br>
    
        <div class="table-responsive">
    <table  id="Tabla">
       <thead>
        <tr class="info">
        <th>Sent From:<span class="hidden-xs"></span></th>
         <th>Sent to:<span class="hidden-xs"></span></th>
         <th>Amount:<span class="hidden-xs"></span></th>
         </tr>
       
    </thead>
    <tbody id="TablaFamilias">
  <?php
      if(is_array($fetchData1)){      
      foreach($fetchData1 as $data1){
    ?>
      <tr>
      <td ><?php echo $data1['from_cust']??''; ?></td>
      <td><?php echo $data1['to_cust']??''; ?></td>
      <td ><?php echo $data1['amount']??''; ?></td>
     </tr>
     <?php
      }}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData1; ?>
  </td>
      </tr>
    <?php
    }?>
    </tbody>
    <tfoot></tfoot>
     </table>
     <div>
                <nav>
                    <ul class="pagination"></ul>
                </nav>
                </div>
        </div>
    </div>
</div>
   </div>
 </div>
      </div>

  </section>
 

  <div class="footer_bg">

   



    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <h3>
                Sparkbank
              </h3>
              <p>
                Transactions at
              </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h4>
                BASIC LINKS
              </h4>
              <ul class="  ">
                     <li class=" ">
                  <a class="" href="home.php">Home</a>
                </li>
                <li class="">
                  <a class="" href="about.php"> About</a>
                </li>
                <li class="">
                  <a class="" href="customers_list.php">Customers</a>
                </li>
                <li class="">
                  <a class="" href="transactions.php"> Transact</a>
                </li>
                <li class="">
                  <a class="" href="contact.php">Contact Us</a>
                </li>
                <li class="active">
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
                  emanbellahwal@outlook.com
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

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://www.linkedin.com/in/eman-bellahwal/">Eman Bellahwal</a>
        </p>
      </div>
    </section>
    <!-- footer section -->

  </div>

 
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>