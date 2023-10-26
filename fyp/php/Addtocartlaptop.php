<?php
include("../conn.php");
session_start();
$price = '';
$laptop = $_GET['laptop'];
if (isset($_GET['startprice'])) {
    $price = "&startprice=" . $_GET['startprice'] . "&endprice=" . $_GET['endprice'];
}

$laptop_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$query = "INSERT into cartlaptop (laptop_id,user_id, date) values('$laptop_id', '$user_id', NOW())";
$run = mysqli_query($conn, $query);

if (!isset($_SESSION['user_id'])) {
    header("location:../laptop.php?login&laptop=" . $laptop . $price);
}
else{
    header("location:../mobile.php?addtocart&mobile=" . $mobile . $price);
}

