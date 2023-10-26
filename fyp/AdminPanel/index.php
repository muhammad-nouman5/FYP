<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @media (max-width: 768px)
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
</head>

<body class="body">
    <?php
    include 'sidebar.php';
    ?>
    <div class="main">
        <?php
        include 'nav.php';
        ?>
        <div class="container mt-3">
            <div class="row">
            <div class="col-6 my-2">
                    <div class="card mobileordercolor" style="border-radius:20px;">
                        <div class="card-header border-bottom">
                            <h5 class="card-title text-center">Mobiles</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="text-center">
                                <a href="mobile.php" class="btn btn-opacity shadow-sm" style="border-radius:20px;">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-2">
                    <div class="card mobileordercolor" style="border-radius:20px;">
                        <div class="card-header border-bottom">
                            <h5 class="card-title text-center">Laptop</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="text-center">
                                <a href="laptop.php" class="btn btn-opacity shadow-sm" style="border-radius:20px;">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-2">
                    <div class="card mobileordercolor" style="border-radius:20px;">
                        <div class="card-header border-bottom">
                            <h5 class="card-title text-center">Mobile Orders</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="text-center">
                                <a href="mobileorders.php" class="btn btn-opacity shadow-sm" style="border-radius:20px;">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-2">
                    <div class="card mobileordercolor" style="border-radius:20px;">
                        <div class="card-header border-bottom">
                            <h5 class="card-title text-center">Laptop Orders</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="text-center">
                                <a href="laptoporders.php" class="btn btn-opacity shadow-sm" style="border-radius:20px;">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>        
</html>