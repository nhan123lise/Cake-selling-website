<?php
require 'config.php';
$cake_id = $_REQUEST['cake_id'];
$cake_name = $_REQUEST['cake_name'];
$type = $_REQUEST['type'];
$image_url = $_REQUEST['image_url'];
$price = $_REQUEST['price'];
$sql = "INSERT INTO cake (cake_id,cake_name,Type,price,image) VALUES ('$cake_id','$cake_name','$type','$price','$image_url')";
mysqli_query($conn,$sql);
header("location:cake_table.php");

?>