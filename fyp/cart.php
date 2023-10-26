<!doctype html>
<html>
<?php
$price = $brand = '';
include "conn.php";
session_start();
if (!isset($_SESSION['user_id'])) {
    $brand = $_GET['brand'];
    if (isset($_GET['startprice'])) {
        $price = "&startprice=" . $_GET['startprice'] . "&endprice=" . $_GET['endprice'];
    }
    $return = $_GET['return'];
    switch ($return) {
        case 'mobile':
            header('location:mobile.php?login&mobile='.$brand. $price);
            break;
        case 'laptop':
            header('location:laptop.php?login&laptop='.$brand. $price);
            break;
        default:
            header('location:hymobile.php?login');
            break;
    }
}
?>

<head>
    <title>cardmobile.html</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript/modal.js"></script>
    <script src="javascript/ordermodal.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        li {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div id="#home">
        <?php
        include 'nav.php';
        
        ?>

        <h2 class="text-center"><i>Your Add to Cart Mobiles</i></h2>
        <div class="row mt-3" style="margin-left:5px;">
            <?php
            $user_id = $_SESSION['user_id'];
            $query = "SELECT * FROM cart JOIN mobiles ON(cart.`mobile_id`= mobiles.id) WHERE user_id='$user_id'";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($run)) {
            ?>
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card">
                        <a href="#"><img class="card-img-top" style="height:200px; width:312px;" src="mobile_pics/<?php echo $row['mobile_name'] ?>.jpg"></a>
                        <div class="card-body">
                            <h5><a class="nav-link text-center" role="button" data-toggle="modal" data-mobile="<?php echo $row['id']; ?>" href="#specificationtable">
                                    <p class="card-title"><i><?php echo $row["mobile_name"]; ?></i></p>
                                </a></h5>
                            <div class="card-text d-flex flex-row justify-content-between">
                                <div>
                                    <img src="dollar-symbol.svg" width="20px" alt="$"><?php echo $row["price"]; ?>
                                    <br>
                                    <b>PKR </b><?php echo $row["price"] * 156; ?>
                                </div>
                                <div class="text-center">
                                    Delivery Charges <br>
                                    <b>PKR </b>500
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h6 class="text-right">
                                <a class="btn rounded-0 text-center btn-sky" href="#orderdetail" role="button" data-toggle="modal" data-mobile="<?php echo $row['id']; ?>">ORDER</a>
                                <a class="btn rounded-0 btn-sky ml-2" href="#">Add to Cart</a>
                            </h6>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <h2 class="text-center"><i>Your Add to Cart Laptops</i></h2>

        <div class="row mt-3" style="margin-left:5px;">
            <?php
            $user_id = $_SESSION['user_id'];
            $query = "SELECT * FROM cartlaptop JOIN laptop ON(cartlaptop.`laptop_id`= laptop.id) WHERE user_id='$user_id'";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($run)) {
            ?>
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card">
                        <a href="#"><img class="card-img-top" style="height:200px; width:312px;" src="laptop_pics/<?php echo $row['laptop_name'] ?>.jpg"></a>
                        <div class="card-body">
                            <h5><a class="nav-link text-center" role="button" data-toggle="modal" data-laptop="<?php echo $row['id']; ?>" href="#specificationtable">
                                    <p class="card-title"><i><?php echo $row["laptop_name"]; ?></i></p>
                                </a></h5>
                            <div class="card-text d-flex flex-row justify-content-between">
                                <div>
                                    <img src="dollar-symbol.svg" width="20px" alt="$"><?php echo $row["price"]; ?>
                                    <br>
                                    <b>PKR </b><?php echo $row["price"] * 156; ?>
                                </div>
                                <div class="text-center">
                                    Delivery Charges <br>
                                    <b>PKR </b>500
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <h6 class="text-right">
                                <a class="btn rounded-0 text-center btn-sky" href="#orderdetail" role="button" data-toggle="modal" data-mobile="<?php echo $row['id']; ?>">ORDER</a>
                                <a class="btn rounded-0 btn-sky ml-2" href="#">Add to Cart</a>
                            </h6>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <?php
        include "footer.html";
        ?>
    </div>
    <!-- Modal for Specificationtable start -->
    <div class="modal fade" id="specificationtable" tabindex="-1" role="dialog" aria-labelledby="order" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center text-danger w-100 font-weight-bold">Mobile Specification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--modal body-->
                <div class="modal-body mx-3" id="specificationt">
                </div>
            </div>
        </div>
    </div>
    <!--model for Specificationtable ends there-->


    <!-- Modal for Order.php start from Here - for Order button-->

    <div class="modal fade" id="orderdetail" tabindex="-1" role="dialog" aria-labelledby="order" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--modal body-->
                <div class="modal-body mx-3" id="orderform">
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Modal Order.php ends there-->

</body>

</html>