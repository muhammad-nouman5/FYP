<?php
$price = $brand = '';
$page = basename($_SERVER['SCRIPT_FILENAME']);
switch ($page) {
    case 'mobile.php':
        $page = 'mobile';
        $brand =  '&brand=' .$_GET['mobile'];
        if (isset($_GET['startprice'])) {
            $price = "&startprice=" . $_GET['startprice'] . "&endprice=" . $_GET['endprice'];
        }
        break;
    case 'laptop.php':
        $page = 'laptop';
        $brand =  '&brand=' .$_GET['laptop'];
        if (isset($_GET['startprice'])) {
            $price = "&startprice=" . $_GET['startprice'] . "&endprice=" . $_GET['endprice'];
        }
        break;

    default:
        $page = 'hymobile';
        break;
}
?>
<nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="HyMobile.php">HyMobile.com</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#demo" aria-expanded="false" aria-label="toggle-navigation">
                <span class="navbar-toggler-icon"></span></button>
            <div class="navbar-collapse" id="demo">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="HyMobile.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Mobile Buy</a>
                        <ul class="dropdown-menu">
                            <li style="margin-right:30px;"><a class="dropdown-item" href="mobile.php?mobile=Huawei">Huawei-Mobiles</a>
                            </li>
                            <li style="margin-right:30px;"><a class="dropdown-item" href="mobile.php?mobile=Samsung">SAMSUNG-Mobiles</a></li>
                            <li style="margin-right:30px;"><a class="dropdown-item" href="mobile.php?mobile=Oppo">OPPO-Mobiles</a>
                            </li>
                            <li style="margin-right:30px;"><a class="dropdown-item" href="mobile.php?mobile=Qmobile">Q-mobile</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Laptop Buy</a>
                        <ul class="dropdown-menu">
                            <li style="margin-right:30px;"><a class="dropdown-item" href="laptop.php?laptop=hp">HP-laptop</a>
                            </li>
                            <li style="margin-right:30px;"><a class="dropdown-item" href="laptop.php?laptop=dell">Dell-laptop</a></li>
                            <li style="margin-right:30px;"><a class="dropdown-item" href="laptop.php?laptop=acer">acer-laptop</a></li>
                            <li style="margin-right:30px;"><a class="dropdown-item" href="laptop.php?laptop=lenovo">lenovo-laptop</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" data-toggle="modal" href="#contact-us">
                            <i class="fas fa-phone-volume"></i> Contact-us</a></li>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                    ?>
                        <a class="nav-link" href="logout.php"><i class="fas fa-unlock-alt mr-lg-1" style="font-size:14px"></i>Sign out</a><?php } else {
                                                                                                                                            ?>
                        <a class="nav-link" role="button" data-toggle="modal" href="#myModal1"><i class="fas fa-unlock-alt mr-lg-1" style="font-size:14px"></i>Sign in</a>
                    <?php
                                                                                                                                        }
                    ?>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" role="button" data-toggle="modal" href="#myModal"><span class="fas fa-user-plus" aria-hidden="true" style="font-size:14px"></span>Sign up</a>

                    </li>
                    <li class="nav-item">
                        <a href="cart.php?return=<?php echo $page . $price . $brand ?>" class="nav-link"><i class="fas fa-shopping-cart mr-lg-1" style="font-size:14px"></i>View
                            cart($0.00)</a>
                    </li>

                    <!-- Modal for Contact-us start -->
                    <div class="modal fade" id="contact-us" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--modal body-->
                                <div class="modal-body mx-3">
                                    <h4 class="modal-title text-center text-danger w-100 font-weight-bold">Contact-us
                                    </h4>
                                    <p class="text-center">Send a Message or E-mail to Us</p>

                                    <form action="contact.php" method="POST">
                                        <div class="md-form mb-3">
                                            <i class="fas fa-user prefix grey-text"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">Name</label>
                                            <input type="text" id="name" name="name" pattern="[A-Za-z -.]+" title="Please enter your Correct Name" class="form-control validate" required>
                                        </div>
                                        <div class="md-form mb-3">
                                            <i class="fas fa-envelope prefix grey-text"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-email">E-mail</label>
                                            <input type="email" id="email" name="email" class="form-control validate" required>
                                        </div>
                                        <div class="md-form mb-2">
                                            <i class="fas fa-phone-volume"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Phone
                                                no</label>
                                            <input type="text" id="pass" name="phone_no" pattern="[0-4]{4}[0-9]{7}" title="Please enter valid number" class="form-control validate" required>
                                        </div>
                                        <div class="md-form">
                                            <i class="fas fa-envelope prefix grey-text"></i>
                                            <label>Message</label>
                                            <textarea name="message" class="mb-2 d-block form-control" required></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-primary" type="submit" id="submit">Send Message</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--model for Contact-us ends there-->

                    <!--model sign in strt from there-->
                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body mx-3">
                                    <form action="php/login.php" method="POST">
                                        <h4 class="modal-title text-center text-danger w-100 font-weight-bold">
                                            Sign in</h4>
                                        <p class="text-center">Sign In now with your Account:</p>
                                        <div class="md-form mb-5">
                                            <span class="fas fa-user prefix grey-text"></span>
                                            <label data-error="wrong" data-success="right" for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email" required>
                                        </div>

                                        <div class="md-form mb-4">
                                            <i class="fas fa-lock prefix grey-text"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your
                                                password</label>

                                            <input type="password" id="pass" name="pass" class="form-control validate" placeholder="password" required>
                                        </div>

                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-primary" type="submit" id="submit" name="signin">Sign
                                        in</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- Modal Sign in Ends there -->

                    <!-- Modal  sign up Start -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--modal body-->
                                <div class="modal-body mx-3">
                                    <h4 class="modal-title text-center text-danger w-100 font-weight-bold">Sign
                                        up</h4>
                                    <p class="text-center">Don't have an account? Let setup your account?</p>

                                    <form action="php/register.php" method="POST">
                                        <div class="md-form mb-3">
                                            <i class="fas fa-user prefix grey-text"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">Your
                                                name</label>
                                            <input type="text" id="name" name="name" pattern="[A-Za-z -.]+" title="Please enter your Correct Name" class="form-control validate" required>
                                        </div>
                                        <div class="md-form mb-3">
                                            <i class="fas fa-envelope prefix grey-text"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-email">Your
                                                email</label>

                                            <input type="email" id="email" name="email" class="form-control validate" required>
                                        </div>

                                        <div class="md-form mb-4">
                                            <i class="fas fa-lock prefix grey-text"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Your
                                                password</label>

                                            <input type="password" id="pass" name="pass" pattern="[A-Za-z -.0-9!@#$%^&*()_+>?<]+" title="Six or more characters" class="form-control validate" required>
                                        </div>

                                        <div class="md-form mb-4">
                                            <i class="fas fa-lock prefix grey-text"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-pass">Confirm
                                                password</label>

                                            <input type="password" id="pass" name="pass" pattern="[A-Za-z -.0-9!@#$%^&*()_+>?<]+" title="Please enter your strong password" class="form-control validate" required>
                                        </div>

                                        <div class="md-form mb-3">
                                            <i class="fas fa-address-card"></i>
                                            <label data-error="wrong" data-success="right" for="address">Your
                                                Address</label>

                                            <input type="text" id="address" name="address" class="form-control validate" required>
                                        </div>


                                        <div class="md-form mb-3">
                                            <i class="fas fa-phone-volume"></i>
                                            <label data-error="wrong" data-success="right" for="phone_no">
                                                Phone no</label>

                                            <input type="text" id="phone_no" name="phone_no" pattern="[0-4]{4}[0-9]{7}" title="Please enter valid number" class="form-control validate" required>
                                        </div>

                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-primary" type="submit" id="submit" name="signup">Sign up</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--model  sign up ends there-->

                </ul>
            </div>
        </div>
    </nav>
</nav>