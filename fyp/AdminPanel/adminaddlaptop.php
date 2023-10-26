<?php
include '../conn.php';
?>
<?php
if (isset($_POST['Add-laptop'])) {
    $laptop_name = $_POST['laptop_name'];
    $mobile_name = $_POST['mobile_name'];

    $image = $_FILES['image']['name'];
    $image_name = $_FILES['image']['tmp_name'];
    $extension = pathinfo($image,PATHINFO_EXTENSION);
    $imageNew = $laptop_name . "." . $extension;
    move_uploaded_file($image_name, "../laptop_pics/$imageNew");

    $core = $_POST['core'];
    $generation = $_POST['generation'];
    $processor = $_POST['processor'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $hard_disk = $_POST['hard_disk'];
    $query = "INSERT INTO laptop VALUES(null, '$laptop_name','$core', '$generation', '$processor', '$price', '$brand', '$hard_disk', '$imageNew')";
    $run = mysqli_query($conn, $query);
    header('Location: index.php');
}
?>