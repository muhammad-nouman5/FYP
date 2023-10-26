<?php

include '../conn.php';
$id = $_GET['id'];

$query = "DELETE FROM `order_mobile` WHERE mobile_id='$id'";
mysqli_query($conn, $query);

$query1 = "DELETE FROM `cart` WHERE mobile_id='$id'";
mysqli_query($conn, $query1);

$query2 = "DELETE FROM `mobiles` WHERE id='$id'";
mysqli_query($conn, $query2);

header('Location:mobile.php');
