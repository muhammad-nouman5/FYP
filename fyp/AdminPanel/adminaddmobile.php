<?php
include '../conn.php';
?>
<?php
if (isset($_POST['Add-mobile'])) {
    $mobile_name = $_POST['mobile_name'];

    $image = $_FILES['image']['name'];
    $image_name = $_FILES['image']['tmp_name'];
    $extension = pathinfo($image,PATHINFO_EXTENSION);
    $imageNew = $mobile_name . "." . $extension;
    move_uploaded_file($image_name, "../mobile_pics/$imageNew");

    $ram = $_POST['ram'];
    $rom = $_POST['rom'];
    $processor = $_POST['processor'];
    $battery = $_POST['battery'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $camera = $_POST['camera'];
    $query = "INSERT INTO mobiles VALUES(null, '$mobile_name','$ram', '$rom', '$processor', '$battery', '$weight', '$price', '$brand', '$camera', '$imageNew')";
    $run = mysqli_query($conn, $query);
    header('Location:index.php');
}
?>