<?php
include '../conn.php';
?>
<?php
if (isset($_POST['update-laptop'])) {
    $id=$_GET['id'];
    $laptop_name = $_POST['laptop_name'];
    $core = $_POST['core'];
    $generation = $_POST['generation'];
    $processor = $_POST['processor'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $hard_disk = $_POST['hard_disk'];
    $image = $_POST['image'];
    $query = "UPDATE laptop SET `laptop_name`='$laptop_name',`core`='$core',`generation`='$generation',`processor`='$processor',`price`='$price',`brand`='$brand',`hard_disk`='$hard_disk','image'='$image', WHERE `id`='$id'";
    $run = mysqli_query($conn, $query);
    header('Location:laptop.php');
}
?>