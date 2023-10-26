<?php
include("../conn.php");
session_start();
$id=$_GET['id'];
// $mobile=$_POST['mobile_id'];
$user_id=$_SESSION['user_id'];
$payment_method=$_POST['payment_method'];
$address=$_POST['address'];
$query="INSERT into order_mobile values(null, '$id', '$user_id', '$payment_method','$address')";
$run=mysqli_query($conn, $query);
header('location:../Hymobile.php');
