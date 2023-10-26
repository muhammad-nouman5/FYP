<?php
            include("../conn.php");
            $user_id = $_POST['laptop_id'];
            session_start();
            if (!isset($_SESSION['user_id'])) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    Please Sign in First to Confirm Order
                </div>
            <?php
            } else {
                $id=$_POST['laptop_id'];
                $user_id=$_SESSION['user_id'];
                $name=$_SESSION["name"];
                $e_mail=$_SESSION["e_mail"];
                $laptop="Select laptop_name, price FROM laptop WHERE id='$id'";
                $run=mysqli_query($conn, $laptop);
                // COMMENTS:  if we want to execute single record of anything then we will not use Loop like while() etc 
                $row=mysqli_fetch_assoc($run);
            ?>
                <div>Name:<?php echo $name; ?></div>
                <div>E_mail:<?php echo $e_mail; ?></div>
                <div>laptop:<?php echo $row['laptop_name']; ?></div>
                <div>Price:$<?php echo $row['price']; ?></div>
                <form class="text-center" action="php/confirmorderlaptop.php?id=<?php echo $id; ?>" method="POST">
                    <div class="md-form mb-3" id="orderform">
                        <i class="far fa-money-bill-alt"></i>
                        <label data-error="wrong" data-success="right" for="orangeForm-payment">Payment
                            Method</label>
                        <select class="form-control" name="payment_method">
                            <option>Select method</option>
                            <option>Cash on Delivery</option>
                        </select>
                        </select>

                    </div>
                    <div class="md-form mb-3">
                        <i class="fas fa-address-card"></i>
                        <label data-error="wrong" data-success="right" for="orangeForm-email">Your
                            Address</label>
                        <input type="text" id="address" name="address" class="form-control validate">
                        <button class="btn btn-primary mt-3">Confirm Order</button>
                        
                    </div>
                    </div>
                </form>
            <?php
            }
            ?>
                                    <!--modal Order.php ends there-->