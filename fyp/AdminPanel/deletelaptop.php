<?php

include '../conn.php';
$id = $_GET['id'];

$query = "DELETE FROM `order_laptop` WHERE laptop_id='$id'";
mysqli_query($conn, $query);

$query1 = "DELETE FROM `cart` WHERE laptop_id='$id'";
mysqli_query($conn, $query1);

$query2 = "DELETE FROM `laptop` WHERE id='$id'";
mysqli_query($conn, $query2);

header('Location:laptop.php');
