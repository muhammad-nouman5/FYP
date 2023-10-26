<!doctype html>
<html>
<?php
include "../conn.php";
?>

<head>
    <title>cardmobile.html</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript/modallaptop.js"></script>
    <script src="javascript/ordermodallaptop.js"></script>
    <style>
        li {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <?php
    include('sidebar.php');
    ?>
    <div class="main">
        <?php
        include 'nav.php';
        ?>
        <?php
        if (isset($_GET['login'])) {
        ?>
            <!-- here we are using a Alert because user first will do login Because User is not Register -->
            <div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
                <b>Please login First for Add to Cart</b>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        }
        ?>
        <?php
        if (isset($_GET['addtocartlaptop'])) {
        ?>
            <!-- here we are using a Alert because user first will do login -->
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                <b>Your item has been added into Cart</b>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        }
        ?>
        <div class="container-fluid">
            <div class="row mt-3">
                <?php

                $query = "select * from laptop";

                $run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($run)) {
                ?>
                    <!-- Its a Card in which mobile card is design -->
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="card">
                            <a href="#"><img class="card-img-top" style="height:200px;" src="laptop_pics/<?php echo $row['laptop_name'] ?>.jpg"></a>
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
                                    <a class="btn rounded-0 text-center btn-sky" href="editlaptopform.php" role="button" data-toggle="modal" data-laptop="<?php echo $row['id']; ?>">Edit</a>
                                    <a class="btn rounded-0 btn-sky ml-2" href="deletelaptop.php?id=<?php echo $row['id']; ?>&laptop=<?php echo $laptop . $price; ?>">Delete</a>
                                </h6>
                            </div>
                        </div>
                    </div><?php
                        } ?>
            </div>
        </div>
            <!-- Modal for Specificationtable start -->
            <div class="modal fade" id="specificationtable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center text-danger w-100 font-weight-bold">Laptop Specification</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--modal body-->
                        <div class="modal-body mx-3" id="specificationt">
                            <table class="table table-hover table-responsive-xm">
                                <thead class="thead-dark">
                                    <th></th>
                                    <h3>
                                        <Th class="text-center">Dell with Specification</th>
                                    </h3>
                                    <Th></th>
                                </thead>

                                <td>Processor</td>
                                <td></td>
                                <td>BSCS</td>
                                </tr>
                                <td>RAM</td>
                                <td></td>
                                <td>BSCS</td>
                                </tr>
                                <td>ROM</td>
                                <td></td>
                                <td>BSCS</td>
                                </tr>
                                <td>Camera</td>
                                <td></td>
                                <td>BSCS</td>
                                </tr>
                                <td>Battery</td>
                                <td></td>
                                <td>BSCS</td>
                                </tr>
                                <td>Weight</td>
                                <td></td>
                                <td>BSCS</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--model for Specificationtable ends there-->


            <!-- Modal for Order.php start from Here - for Order button-->

            <div class="modal fade" id="orderdetaillaptop" tabindex="-1" role="dialog" aria-labelledby="order" aria-hidden="true">
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