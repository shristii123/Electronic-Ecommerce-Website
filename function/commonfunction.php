<?php
//including connect file
//include('../database/dcconnect.php');

//get ip address function
 function getIPAddress() {  
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
       }  
    //whether ip is from the proxy  
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
//whether ip is from the remote address  
  else{  
  $ip = $_SERVER['REMOTE_ADDR'];  
 }  
     return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  

//cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  include('../database/dcconnect.php');
 $get_ip_add = getIPAddress();
// $get_user_id=$_GET['user_id'];
  $get_product_id=$_GET['add_to_cart'];
  $select_query="Select * from `cart_details` where ip_address='$get_ip_add'  and 
  product_id= $get_product_id";
  $result_query=mysqli_query($conn,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo "<script>alert('This item is already present inside cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";

  }else{
    $insert_query="insert into `cart_details` (product_id,ip_address,quantity)
    values ($get_product_id,'$get_ip_add',0)";
    $result_query=mysqli_query($conn,$insert_query);
    echo "<script>alert('Item is added to cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";

  }




}
}
//function to get cart item numbers
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    include('../database/dcconnect.php');
   $get_ip_add = getIPAddress();
    $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
    $result_query=mysqli_query($conn,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
  
    }else{
      include('../database/dcconnect.php');
      $get_ip_add = getIPAddress();
      $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
      $result_query=mysqli_query($conn,$select_query);
      $count_cart_items=mysqli_num_rows($result_query);
    
  
    }
    echo $count_cart_items;

  }
  

?>
