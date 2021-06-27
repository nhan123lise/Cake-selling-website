<?php
  session_start();
  $cake_id=$_SESSION['cake_id'];
  $_SESSION['quantity'] = $_POST['quantity'];
  $_SESSION['flavor'] = $_POST['flavor'];
  if($_SESSION['flavor'] == ""||$_SESSION['quantity']==""||$_SESSION['quantity'] <=0){
    header("Location:product-details.php?cake_id=$cake_id&error=Please select flavor or input quantity");
  }else{
    header("Location:checkout.php");
  }
  

?>