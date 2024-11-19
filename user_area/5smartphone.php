<?php include('../function/commonfunction.php');
session_start(); ?>
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
              <li class="nav-item">
              <a class="nav-link" href="cart.php"> 
                <i class="fa-solid fa-cart-shopping"><sup><?php cart_item(); ?></sup></i>
              </a>
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
    <?php include('../database/dcconnect.php');
cart();
//$ip = getIPAddress();
//echo 'User Real IP Address - '.$ip;  
?>
    <!--product card -->
    <div class="container" id="product-cards">
      <h1 class="text-center">Smartphone</h1>
      <div class="row" style="margin-top: 30px;">
      <?php
       include('../database/dcconnect.php');
   //  if(isset($_GET['producttable'])){
    //  $product_categories=$_GET['5smartphone.php'];
    $select_query="Select * from `producttable` where product_categories='Smartphone'";
    $result_query=mysqli_query($conn,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
    //echo $row['product_title'];
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image=$row['product_image'];
      $product_price=$row['product_price'];
      echo "<div class='col-md-3 py-3 py-md-2'>
      <div class='card'>
        <img src='../admin_area/product_images/$product_image' class='card-img-top' alt=''>
        <div class='card-body'>
          <h3 class='text-center'> $product_title</h3>
          <p class='text-center'>$product_description</p>
          <h2>Rs $product_price<a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a></h2>
        </div>
      </div>
    </div>";
      
    }
      ?>
        
      </div>
      <div style="margin-bottom:50px"></div>
        </div>
    <!--product card-->
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