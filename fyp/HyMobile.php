<!doctype html>
<html>
<?php
        session_start(); ?>
<head>
    <title>HyMobile.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
    if(isset($_GET["login"])){
?>
        <!-- if user not Register then it will show a Message  by Using Session-->
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <b>Please login First for View Cart</b>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div><?php } ?>  <!-- here user not Register Code end-->

        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                    <h4 class="my-4">Mobile select by Price</h4>
                    <div class="list-group">
                        <a class="list-group-item text-center" href="mobile.php?mobile=huawei&startprice=15000&endprice=30000">Huawei 15000-30000</a>
                        <a class="list-group-item text-center" href="mobile.php?mobile=samsung&startprice=20000&endprice=35000">SAMSUNG 20000-35000</a>
                        <a class="list-group-item text-center" href="mobile.php?mobile=Oppo&startprice=20000&endprice=45000">OPPO 20000-45000</a>
                        <a class="list-group-item text-center" href="mobile.php?mobile=Qmobile&startprice=10000&endprice=25000">Q-mobile 10000-25000</a>


                        <h4 class="my-4">Laptop select by Price</h4>
                        <div class="list-group">
                            <a class="list-group-item text-center" href="laptop.php?laptop=hp&startprice=20000&endprice=40000">Hp 20000-40000</a>
                            <a class="list-group-item text-center" href="laptop.php?laptop=dell&startprice=20000&endprice=50000">Dell 20000-50000</a>
                            <a class="list-group-item text-center" href="laptop.php?laptop=lenovo&startprice=20000&endprice=35000">lenovo 20000-35000</a>
                            <a class="list-group-item text-center" href="laptop.php?laptop=acer&startprice=15000&endprice=30000">acer 15000-30000</a>
                        </div>
                    </div>
                </div>

                            <!-- my Slider is Start from here -->
                <div class="col-lg-9">
                    <div class="carousel slide" data-ride="carousel" data-interval="2000" id="nouman">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <!--<div style="width:900px; height:590px; background-image:url('oppo f9.jpg');background-repeat:no-repeat; background-position:center center; background-size:cover;"></div>-->
                                <a href="huawei.php"><img style="height:550px;width:900px;"
                                        src="mobile_pics/huawei honor 7c.jpg"></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h3></h3>
                                </div>
                            </div>
                
                            <div class="carousel-item">
                                <a href="samsung.php"><img style="height:550px;width:900px;"
                                        src="mobile_pics/Samsung Galaxy j7 pro.jpg"></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h3></h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <a href="oppo.php"><img style="height:550px;width:900px;"
                                        src="mobile_pics/oppo f11.jpg"></a>
                                <div class="carousel-caption d-none d-md-block">
                                    <h3></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#nouman" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                    <a href="#nouman" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>

                    <ul class="carousel-indicators">
                        <li data-target="#khan" data-slide-to="0" class="active">0</li>
                        <li data-target="#khan" data-slide-to="1">1</li>
                        <li data-target="#khan" data-slide-to="2">2</li>

                    </ul>
                </div>         <!-- My Slider is Ends here -->
            </div>
        </div>
    </div>
    <?php
        include "footer.html";
        ?>
</body>

</html>