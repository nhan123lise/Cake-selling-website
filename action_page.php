<?php
    $user_name = $_REQUEST["username"];
    $user_password = $_REQUEST["password"];
    
    require 'config.php';
    $sql = "SELECT * FROM admin WHERE username = '$user_name' AND password = '$user_password'";
    $query = $conn->query($sql);
    $result = mysqli_num_rows($query);
    if($result != 0){
      header("Location:cake_table.php");
    }
    else{
      
      header("Location:account.php?error=Wrong Username or Password! Please enter again");
    }
    mysqli_close($conn);
    
?>