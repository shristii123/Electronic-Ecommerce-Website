<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic gadget</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
    <!-- navbar -->
    <!-- top navbar -->
  
     
         <!-- <a class="nav-link" href="#"><b>WELCOME GUEST</b></a></div>-->
          <?php
        if(!isset($_SESSION['username'])){
          echo "
          <div class='top-navbar'>
     
          <a class='nav-link' href='#'><b>WELCOME GUEST</b></a></div>";
        }
        else{
          echo "
          <div class='top-navbar'>
          <a class='nav-link' href='#'><b>WELCOME"." ". $_SESSION['username']."</b></a></div>";
        }
        ?>

    
    <!-- top navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" id="logo"><span id="span1">Electronic gadget</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./img/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(73, 151, 147);">
                <li><a class="dropdown-item" href="./5smartphone.php">Smart Phone</a></li>
                  <li><a class="dropdown-item" href="./6tablets.php">Tablets</a></li>
                  <li><a class="dropdown-item" href="./3laptop.php">Laptop</a></li>
                  <li><a class="dropdown-item" href="./4camera.php">Camera</a></li>
                  <li><a class="dropdown-item" href="./2headphone.php">Headphone</a></li>


                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>
            </ul>
                 <!-- left navbar -->
                 <div class="left-navbar">
      <div class="icons">
      <?php
        if(!isset($_SESSION['username'])){
          echo "
          <a class='nav-link' href='user_login.php'>Login</a></li>";
        }
        else{
          echo "
          <a class='nav-link' href='logout.php'>Logout</a></li>";
        }
        ?>
        </div>
      </div>
<div class="left-navbar">
      <div class="icons">
          <a href="user_registration.php">Register</a>
      </div>
  </div>
  <!-- left navbar -->
          </div>
        </div>
      </nav>
    <!-- navbar -->
    <!-- home content -->
    <div class="container" id="about">
        <h3>About us</h3>
        <hr><p>If you are looking for a website that offers the very best online shopping in Nepal, 
           choose Deal Ayo. We are a trusted and easy to use shopping site 
          that offers a surprising, and exciting, range of top quality products, at affordable prices.</p>
        <hr>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card">
                    <img src="./img/aboutus.jpg" alt="">
                </div>
            </div>
            <div class="col-md-7 py-3 py-md-0">
                <p>Electronic gadget has been able to keep up with the expectation of the buyers. 
                   It is the result of our creative and dedicated team.</p>

                 <p>We assure that our buyers get what they see at the best quality and price. 
                  Deliver the order within 2-24 hours of order placement without intermediaries. 
                  Also, pay to vendors within 3-5 days which sometimes takes months by others.
                  </p>
                   
                  
                 <p>Every work comes with responsibilities. At electronic gadget, we take our responsibilities as principles.
                   To execute our responsibilities, every department commits to excellence.
                    From CRM to logistics, our delivery represents us.</p>
                
            </div>
            <div class="row" style="margin-bottom: 50px;"></div>
            <hr>
        </div>
    </div>

        <!-- home content -->
        <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Electronic Gadget</h3>
              <p>Newroad,Kathmandu.
              </p>
              <strong>Phone:</strong>9841000000<br>
              <strong>Email:</strong>electrogadget@.com <br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policey</a></li>
             </ul>
            </div>



           

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

             <ul>
              <li><a href="#">Laptop</a></li>
              <li><a href="#">Computer</a></li>
              <li><a href="#">Tablet</a></li>
              <li><a href="#">Mobile Phone</a></li>
              <li><a href="#">Camera</a></li>
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <div class="socail-links mt-3">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              </div>
            
            </div>

          </div>
        </div>
      </div>
     
    
    </footer>
    <!-- footer -->

      



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      </body>
      </html>