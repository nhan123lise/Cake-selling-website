<?php
  session_start();
  require 'config.php';
  $date = $_SESSION['date'];
  $name = $_POST['firstName']." ".$_POST['lastName'];
  
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'].", " .$_POST['state'].", ". $_POST['country'];
  $cake_name = $_SESSION['cake_name'];
  $cake_id = $_SESSION['cake_id'];
  $flavor = $_SESSION['flavor'];
  $total = $_SESSION['quantity']*$_SESSION['price'];
  
  $sql = "INSERT INTO bill (date, cake_id, flavor_id, total, name, email, address, phone) VALUES ('$date', '$cake_id', (SELECT flavor_id FROM flavor WHERE cake_id ='$cake_id' AND flavor = '$flavor'), '$total', '$name', '$email', '$address', '$phone')";
  
  mysqli_query($conn,$sql);
  $last_id =$conn->insert_id;
  
  header("Location:confirm.php?bill_id=$last_id");

?>