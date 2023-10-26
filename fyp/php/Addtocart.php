<?php
include("../conn.php");
session_start();
$price = '';
$mobile = $_GET['mobile'];
if (isset($_GET['startprice'])) {
    $price = "&startprice=" . $_GET['startprice'] . "&endprice=" . $_GET['endprice'];
}
$mobile_id = $_GET['id'];
$user_id = $_SESSION['user_id'];
$query = "INSERT into cart (mobile_id,user_id, date) values('$mobile_id', '$user_id', NOW())";
$run = mysqli_query($conn, $query);

if (!isset($_SESSION['user_id'])) {
    header("location:../mobile.php?login&mobile=" . $mobile . $price);
}else {
    header("location:../mobile.php?addtocart&mobile=" . $mobile . $price);
}

