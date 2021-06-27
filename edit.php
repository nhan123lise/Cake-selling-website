<?php
require 'config.php';
$cake_id = $_REQUEST['Id1'];
$cake_name = $_REQUEST['cake_name1'];
$type = $_REQUEST['type1'];
$image_url = $_REQUEST['image1'];
$price = $_REQUEST['price1'];
$sql = "UPDATE cake SET cake_name='$cake_name',Type ='$type',image ='$image_url',price='$price' WHERE cake_id = '$cake_id'";
mysqli_query($conn,$sql);
header("location:cake_table.php");
?>