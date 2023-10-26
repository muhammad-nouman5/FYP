<?php
include '../conn.php';
?>
<?php
if (isset($_POST['update-mobile'])) {
    $id=$_GET['id'];
    $mobile_name = $_POST['mobile_name'];
    $ram = $_POST['ram'];
    $rom = $_POST['rom'];
    $processor = $_POST['processor'];
    $battery = $_POST['battery'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $camera = $_POST['camera'];
    $image=$_POST['image'];
    $query = "UPDATE mobiles SET `mobile_name`='$mobile_name',`ram`='$ram',`rom`='$rom',`processor`='$processor',`battery`='$battery',`weight`='$weight',`price`='$price',`brand`='$brand',`camera`='$camera','image'='$image', WHERE `id`='$id'";
    $run = mysqli_query($conn, $query);
    header('Location:mobile.php');
}
?>