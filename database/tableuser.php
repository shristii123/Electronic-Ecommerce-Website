<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $hostname="localhost";
    $username="root";
    $password="";
    $db="electronic";
    $conn=mysqli_connect($hostname,$username,$password,$db);
    if(!$conn){
        die("Connection was not successful due to:".mysqli_connect_error());
    
    }
    else{
        echo "Connection is successful";
    }
  echo"<br>";
    $sql="CREATE TABLE usertable(
        user_id int,
        username varchar(50),
        user_email varchar(50),
        user_password varchar(255),
        user_address varchar(50),
        user_phone varchar(20))";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Table created";
        }
        else{
            die("Table is not created due to".mysqli_error($conn));
        }

        ?>

</body>
</html>