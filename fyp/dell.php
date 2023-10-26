<!doctype html>
<html>

<head>
    <title>cardmobile.html</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
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

        <div class="row mt-3" style="margin-left:5px;">
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                    <a href="#"><img class="card-img-top" style="height:200px; width:312px;"
                            src="Dell i3 laptop.jpg"></a>
                    <div class="card-body">
                        <h5><a class="nav-link text-center" role="button" data-toggle="modal" href="#specificationtable">
                                <p class="card-title"><i>Dell i3<br>(3512 3rd Generation)</i></p>
                            </a></h5>
                        <div class="card-text d-flex flex-row justify-content-between">
                            <div>
                                <img src="dollar-symbol.svg" width="20px" alt="$">125
                                <br>
                                <b>PKR </b>20000
                            </div>
                            <div class="text-center">
                                Delivery Charges <br>
                                <b>PKR </b>500
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <h6 class="text-right">
                            <a class="btn rounded-0 text-center btn-sky" href="#">ORDER</a>
                            <a class="btn rounded-0 btn-sky ml-2" href="#">Add to Cart</a>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                    <a href="#"><img class="card-img-top" style="height:200px; width:312px;"
                            src="Dell i5 4th Generation.jpg"></a>
                    <div class="card-body">
                        <h5><a class="nav-link text-center" role="button" data-toggle="modal" href="#specificationtable">
                                <p class="card-title"><i>Dell i5<br>(6440 4th Generation)</i></p>
                            </a></h5>
                        <div class="card-text d-flex flex-row justify-content-between">
                            <div>
                                <img src="dollar-symbol.svg" width="20px" alt="$">150
                                <br>
                                <b>PKR </b>24000
                            </div>
                            <div class="text-center">
                                Delivery Charges <br>
                                <b>PKR </b>500
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <h6 class="text-right">
                            <a class="btn rounded-0 text-center btn-sky" href="#">ORDER</a>
                            <a class="btn rounded-0 btn-sky ml-2" href="#">Add to Cart</a>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                    <a href="#"><img class="card-img-top" style="height:200px; width:312px;"
                            src="Dell i7 7th Generation.jpg"></a>
                    <div class="card-body">
                        <h5><a class="nav-link text-center" role="button" data-toggle="modal" href="#specificationtable">
                                <p class="card-title"><i>Dell i7<br>(7th Generation)</i></p>
                            </a></h5>
                        <div class="card-text d-flex flex-row justify-content-between">
                            <div>
                                <img src="dollar-symbol.svg" width="20px" alt="$">250
                                <br>
                                <b>PKR </b>40000
                            </div>
                            <div class="text-center">
                                Delivery Charges <br>
                                <b>PKR </b>500
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <h6 class="text-right">
                            <a class="btn rounded-0 text-center btn-sky" href="#">ORDER</a>
                            <a class="btn rounded-0 btn-sky ml-2" href="#">Add to Cart</a>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-2">
                <div class="card">
                    <a href="#"><img class="card-img-top" style="height:200px; width:312px;"
                            src="Dell i7 7th Generation E6530.jpg"></a>
                    <div class="card-body">
                        <h5><a class="nav-link text-center" role="button" data-toggle="modal" href="#specificationtable">
                                <p class="card-title"><i>Dell i7<br>(E6530 7th Generation)</i></p>
                            </a></h5>
                        <div class="card-text d-flex flex-row justify-content-between">
                            <div>
                                <img src="dollar-symbol.svg" width="20px" alt="$">300
                                <br>
                                <b>PKR </b>50000
                            </div>
                            <div class="text-center">
                                Delivery Charges <br>
                                <b>PKR </b>500
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <h6 class="text-right">
                            <a class="btn rounded-0 text-center btn-sky" href="#">ORDER</a>
                            <a class="btn rounded-0 btn-sky ml-2" href="#">Add to Cart</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include "footer.html";
        ?>

        <!-- Modal for Specificationtable start -->
        <div class="modal fade" id="specificationtable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center text-danger w-100 font-weight-bold">Mobile Specification</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--modal body-->
                    <div class="modal-body mx-3">
                        <table class="table table-hover table-responsive-xm">
                            <thead class="thead-dark">
                                <th></th>
                                <h3>
                                    <Th class="text-center">Huawei y6 prime 2019 Specification</th>
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
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit" id="submit">Order Now</button>
                    </div>

                </div>
            </div>
        </div>
        <!--model for Specificationtable ends there-->


</body>

</html>