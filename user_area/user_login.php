<?php include "../database/dcconnect.php";
 include('../function/commonfunction.php'); 
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
     <!-- bootstrap links -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center"><b>User Login</b></h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post"> 
                     <!--userfield-->
                <div class="form-outline mb-3">
                <label for="user_username" class="form-label">Username</label>
                <input type="text" name="user_username" id="user_username" 
                class="form-control" placeholder="Enter your username" autocomplete="off" 
                required="required"/>
            </div>
            <!--password field-->
            <div class="form-outline mb-3">
                <label for="user_password" class="form-label">Password</label>
                <input type="password" name="password" id="password" 
                class="form-control" placeholder="Enter your password" autocomplete="off" 
                required="required"/>
                
            </div>
            <div class="mt-4 pt-2 ">
                <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" 
                name="user_login">
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account ? <a 
                href="user_registration.php" class="text-danger"> Register</a></p>
            </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $password=$_POST['password'];
    $select_query="SELECT * FROM `usertable` WHERE username='$user_username' and user_password='$password'";
    $result=mysqli_query($conn,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    $user_ip=getIPAddress();


    //cart_item
    $select_query_cart="SELECT * FROM `cart_details` 
    WHERE ip_address='$user_ip'";
    $select_cart=mysqli_query($conn,$select_query_cart);
    $row_count_cart=mysqli_num_rows($select_cart);
    if($row_count>0){
        $_SESSION['username']= $user_username;
       // if(password_verify($user_password,$row_data['user_password'])){
          //  echo "<script>alert('Login successful')</script>";
          if($row_count==1 and  $row_count_cart==0){
            $_SESSION['username']= $user_username;
            echo "<script>alert('Login successful')</script>";
            echo "<script>window.open('profile.php','_self')</script>";
          }
          else{
            $_SESSION['username']= $user_username;
            echo "<script>alert('Login successful')</script>";
            echo "<script>window.open('index.php','_self')</script>";
          }

        }else{
            echo "<script>alert('Invalid Credentials')</script>";
        }
    }//else{
       // echo "<script>alert('Invalid Credentials')</script>";
    //}
//}
?>
