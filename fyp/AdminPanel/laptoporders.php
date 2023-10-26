<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
        $query = "SELECT * FROM order_laptop
                JOIN laptop ON (order_laptop.laptop_id = laptop.id)
                    JOIN user ON (order_laptop.user_id = user.id)";
        ?>
        <div class="container mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr.#</th>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $run = mysqli_query($conn, $query);
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($run)) {
                    ?>
                        <tr>
                            <th><?php echo $i; ?></th>
                            <td> <?php echo $row['laptop_name'] ?> </td>
                            <td> <?php echo $row['name'] ?> </td>
                            <td> <?php echo $row['e_mail'] ?> </td>
                            <td> <?php echo $row['address'] ?> </td>
                            <td>
                                <a href="mail.php?email=<?php echo $row['e_mail'] ?>&product=<?php echo $row['laptop_name'] ?>&status=confirm" class="btn btn-primary">Confirm</a>
                                <a href="mail.php?email=<?php echo $row['e_mail'] ?>&product=<?php echo $row['laptop_name'] ?>&status=cancle" class="btn btn-danger">Cancle</a>
                            </td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>