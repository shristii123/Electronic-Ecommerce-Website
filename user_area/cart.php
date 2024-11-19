<?php
include('../function/commonfunction.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
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
    <style>
/* other cards */
#other-cards{
    margin-top: 30px;
    margin-bottom:50px;
}
#other-cards .card{
    background-color: #a9a9a92b;
}
#other-cards .card h3{
    margin-top: 30px;
    color: black;
    margin-left: 10px;
    letter-spacing: 3px;
}
#other-cards .card h5{
    margin-top: 15px;
    font-weight: 100;
    font-size: 18px;
    color: black;
    margin-left: 10px;
    letter-spacing: 3px;
    border-bottom: 2px solid black;
    width: 220px;
}
#other-cards .card p{
    margin-top: 10px;
    font-weight: 100;
    font-size: 15px;
    color: black;
    margin-left: 10px;
    letter-spacing: 3px;
}
#shopnow{
    width: 130px;
    height: 30px;
    margin-top: 10px;
    margin-left: 10px;
    letter-spacing: 3px;
    color: white;
    background-color: black;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

@media screen and (max-width:1000px){
    #other-cards .card h3{
        margin-top: 5px;
        font-size: 20px;
    }
    #other-cards .card h5{
        margin-top: 5px;
        font-size: 15px;
    }
    #other-cards .card p{
        margin-top: 0px;
    }
    #shopnow{
        margin-top: 0px;
        width: 120px;
        height: 30px;
        font-size: 16px;
    }
    
}
.cart_img{
      width:80px;
      height:80px;
      object-fit:contain;
    }
/* other cards */

</style>
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
                <a class="nav-link" href="about.html">About us</a>
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
                <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"><sup><?php cart_item(); ?></sup></i></a>
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
    <!--table-->
    <div class="container">
      <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">
          
          <tbody>
            <!--Dynamic data-->
            <?php
            include('../database/dcconnect.php');
            $get_ip_add= getIPAddress();
            $total_price=0;
            $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
            $result=mysqli_query($conn,$cart_query);
            $result_count=mysqli_num_rows($result);
            if($result_count>0){
              echo "<thead>
              <tr>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Remove</th>
                <th colspan='2'>Operation</th>
              </tr>
            </thead>";
            while($row=mysqli_fetch_array($result)){
              $product_id=$row['product_id'];
              $select_products="Select * from `producttable` where product_id='$product_id'";
              $result_products=mysqli_query($conn,$select_products);
              while($row_product_price=mysqli_fetch_array($result_products)){
                $product_price=array($row_product_price['product_price']);
                $price_table=$row_product_price['product_price'];
                $product_title=$row_product_price['product_title'];
                $product_image=$row_product_price['product_image'];
               $product_values=array_sum($product_price);
                $total_price+=$product_values;
              

          

            ?>
            <tr>
              <td><?php  echo $product_title?></td>
              <td><img src="../admin_area/product_images/<?php  echo $product_image?>" alt="" class="cart_img"></td>
              <td><input type="text" name="qty" id="" class="form-input w-50"></td>
              <?php
               $get_ip_add= getIPAddress();
               if(isset($_POST['update_cart'])){
                $quantities=$_POST['qty'];
                $update_cart="update `cart_details` set quantity=$quantities where 
                ip_address='$get_ip_add'";
                $result_product_quantity=mysqli_query($conn,$update_cart);
                $total_price=$total_price*$quantities;
               }

               ?>
              <td><?php  echo $price_table?></td>
              <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id; ?>"></td>
              <td>
                <input type="submit" value="Update Cart" class="bg-info px-3 py-2 border-0 mx-3"
                name="update_cart">
                <!--<button class="bg-info px-3 py-2 border-0 mx-3">Remove</button>-->
                <input type="submit" value="Remove Cart" class="bg-info px-3 py-2 border-0 mx-3"
                name="remove_cart">
              </td>
            </tr>
            <?php
              }
            }
          }
          else{
            echo "<h2 class='text-center text-danger'>Cart is empty</h2>";
          }
            ?>
          </tbody>
        </table>
        <!-- subtotal-->
        <div class="d-flex mb-5">
          <?php
           $get_ip_add= getIPAddress();
           $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
           $result=mysqli_query($conn,$cart_query);
           $result_count=mysqli_num_rows($result);
           if($result_count>0){
            echo "<h4 class='px-3'>Subtotal:<strong class='text-info'>Rs $total_price</strong></h4>
            <input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3'
            name='continue_shopping'>
            <button class='bg-secondary p-3 py-2 border-0'><a href='checkout.php' class='text-light text-decoration-none'>Checkout</a></button>";

           }
           else{
            echo "<input type='submit' value='Continue Shopping' class='bg-info px-3 py-2 border-0 mx-3'
            name='continue_shopping'>";

           }
           if(isset($_POST['continue_shopping'])){
            echo "<script>window.open('index.php','_self')</script>";
           }
          ?>

       
        </div>
      </div>
    </div>
    </form>
    <!--function to remove item-->
    <?php
    function remove_cart_item(){
      include('../database/dcconnect.php');
      if(isset($_POST['remove_cart'])){
      foreach($_POST['removeitem'] as $remove_id){
        echo $remove_id;
        $delete_query="Delete from `cart_details` where product_id=$remove_id";
        $run_delete=mysqli_query($conn,$delete_query);
        if($run_delete){
          echo "<script>window.open('cart.php','_self')</script>";
        }
      }
    }

    }
    echo $remove_item=remove_cart_item();

     
       ?>
   <!--table-->
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