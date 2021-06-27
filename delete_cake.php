<?php
require 'config.php';
mysqli_query($conn,"DELETE FROM `cake` WHERE `cake_id` = '$_REQUEST[cake_id]'") or die(mysqli_error($conn));
header("location:cake_table.php");

?>

