<?php include "../database/dcconnect.php";
 include('../function/commonfunction.php'); 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">

    <!--bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--bootstrap-->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<style>
  .product_img{
    width:100px;
    object-fit:contain;
    
  }
  </style>
<body>
    <!--navbar-->
    <!--1-->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" id="logo"><span id="span1">Electronic gadget</span></a>
          <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
                   <!-- <a href="" class="nav-link">Welcome guest</a>-->
                    <?php
      if(!isset($_SESSION['admin_name'])){
          echo "
         <div class='top-navbar'>
     
         <a class='nav-link' href='#'><b>WELCOME GUEST</b></a></div>";
       }
      else{
         echo "
          <div class='top-navbar'>
          <a class='nav-link' href='#'><b>WELCOME"." ". $_SESSION['admin_name']."</b></a></div>";
        }
        ?>
                </li>
</ul>
         </nav>
        </div>
      </nav>
      <!--1-->
      <!--2-->
      <div class="bg-light" style="margin-top:5px">
        <h3 class="text-center p-2">Manage Details</h3>
        <hr>
      </div>
      <!--2-->
      <!--3-->
      
        <!--<div class="col-md-12" style=" background-color: rgb(83, 165, 147); p-1 d-flex align-items
        -center">-->
          <!--<div>
            <a href="#"><img src=".../img/images.jpg" alt=""></a>
            <p class="text-black text-center">Admin name</p>
          </div>-->
          <div style="margin-top:20px"></div>
          <div class="button text-center">
            <button class="m-3"><a href="insert_product.php" class="nav-link text-black  my-1">Insert Products</a></button>
            <button class="m-3"><a href="index.php?view_products" class="nav-link text-black  my-1">View Products</a></button>
           <button class="m-3"><a href="index.php?list_orders" class="nav-link text-black  my-1">All order</a></button>
            <button class="m-3"><a href="index.php?all_payments" class="nav-link text-black  my-1">All payments</a></button>
            <button class="m-3"><a href="index.php?list_users" class="nav-link text-black  my-1">List users</a></button>
            <!--<button class="m-3"><a href="logout.php" class="nav-link text-black  my-1">-->
            <?php
        if(!isset($_SESSION['admin_name'])){
          echo "
          <button class='m-3'><a href='admin_login.php' class='nav-link text-black my-1'>Login</a></button>";
        }
        else{
          echo "
          <button class='m-3'><a href='ad_logout.php' class='nav-link text-black my-1'>Logout</a></button>";
        }
        ?>
            </a></button>
          </div>
          <div style="margin-bottom:20px"></div>
        </div>
        <!--aother-->
      <div class="container my-3">
        <?php
        if(isset($_GET['view_products'])){
          include('view_products.php');
        }
        if(isset($_GET['delete_product'])){
         include('delete_product.php');
       }
       if(isset($_GET['list_orders'])){
        include('list_orders.php');
      }
      if(isset($_GET['all_payments'])){
        include('all_payments.php');
      }
      if(isset($_GET['list_users'])){
        include('list_users.php');
      }
      if(isset($_GET['delete_user'])){
        include('delete_user.php');
      }


        ?>

      </div>

      <!--3-->
    <!-- navbar -->
    <!--bootrap js link-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>