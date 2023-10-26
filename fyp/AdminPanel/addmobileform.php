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
    ?>
    <div class="main">
        <?php
        include 'nav.php';
        ?>
        <div class="container">
            <form action="adminaddmobile.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Mobile-name</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="mobile_name">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Ram</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="ram">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Rom</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="rom">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Processor</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="processor">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Battery</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="battery">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Weight</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="weight">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Price</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="price">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Brand</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="brand">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Camera</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="camera">
                    </div>
                    <div class="col-6">
                        <label for="image" class=" col-form-label col-form-label-lg">Image</label>
                        <input type="file" class="form-control form-control-lg" id="image" name="image">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn-primary btn" name="Add-mobile">Add-Mobile</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>