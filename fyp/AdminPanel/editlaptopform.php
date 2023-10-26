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
        if (isset($_GET['laptop_id'])) {
            $id = $_GET['laptop_id'];
            $query="select * from laptop where id='$id'";
            $run=mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($run);
        }
        ?>
        <div class="container">
            <form action="admineditlaptop.php?id=<?php echo $id ?>" method="POST">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Laptop-name</label>
                        <input type="text" value="<?php echo $row['laptop_name'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="laptop_name">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Core</label>
                        <input type="text" value="<?php echo $row['core'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="core">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Generation</label>
                        <input type="text" value="<?php echo $row['generation'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="generation">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Processor</label>
                        <input type="text" value="<?php echo $row['processor'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="processor">
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
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">hard_disk</label>
                        <input type="text" value="<?php echo $row['hard_disk'] ?>" class="form-control form-control-lg" id="colFormLabelLg" name="hard_disk">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn-primary btn" name="update-laptop">
                        Update-laptop
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>