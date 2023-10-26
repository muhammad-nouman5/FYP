<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addmobileform</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>

    <?php
    include 'sidebar.php';
    include '../conn.php';
    ?>
    <div class="main">
        <?php
        include 'nav.php';
        if (isset($_GET['mobile_id'])) {
            $id = $_GET['mobile_id'];
            $query="select * from mobiles where id='$id'";
            $run=mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($run);
        }
        ?>
        <div class="container">
            <form action="admineditmobile.php?id=<?php echo $id ?>" method="POST">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Mobile-name</label>
                        <input type="text" value="<?php echo $row['mobile_name'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="mobile_name">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Ram</label>
                        <input type="text" value="<?php echo $row['ram'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="ram">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Rom</label>
                        <input type="text" value="<?php echo $row['rom'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="rom">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Processor</label>
                        <input type="text" value="<?php echo $row['processor'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="processor">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Battery</label>
                        <input type="text" value="<?php echo $row['battery'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="battery">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Weight</label>
                        <input type="text" value="<?php echo $row['weight'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="weight">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Price$</label>
                        <input type="text" value="<?php echo $row['price'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="price">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Brand</label>
                        <input type="text" value="<?php echo $row['brand'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="brand">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Camera</label>
                        <input type="text" value="<?php echo $row['camera'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="camera">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn-primary btn" name="update-mobile">
                        Update-Mobile
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>