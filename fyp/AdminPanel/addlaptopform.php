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
            <form action="adminaddlaptop.php" method="POST">
                <div class="form-group row">
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Laptop-name</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="laptop_name">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Core</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="core">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Generation</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="generation">
                    </div>
                    <div class="col-6">
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">Processor</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="processor">
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
                        <label for="colFormLabelLg" class=" col-form-label col-form-label-lg">hard_disk</label>
                        <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="hard_disk">
                    </div>
                    <div class="col-6">
                        <label for="image" class=" col-form-label col-form-label-lg">Image</label>
                        <input type="file" class="form-control form-control-lg" id="image" name="image">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn-primary btn" name="Add-laptop">Add-laptop</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>