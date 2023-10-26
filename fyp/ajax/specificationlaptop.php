<?php
include("../conn.php");
$laptop_id = $_POST['laptop_id'];
$query = "SELECT * FROM laptop WHERE id='$laptop_id'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($run)) {
?>
    <table class="table table-hover table-responsive-xm">
        <thead class="thead-dark">
            <th></th>
            <h3>
                <Th class="text-center"><?php echo $row["laptop_name"]; ?> Specification</th>
            </h3>
            <Th></th>
        </thead>

        <td>laptop_name</td>
        <td></td>
        <td><?php echo $row["laptop_name"]; ?></td>
        </tr>
        <td>core</td>
        <td></td>
        <td><?php echo $row["core"]; ?></td>
        </tr>
        <td>generation</td>
        <td></td>
        <td><?php echo $row["generation"]; ?></td>
        </tr>
        <td>processor</td>
        <td></td>
        <td><?php echo $row["processor"]; ?></td>
        </tr>
        <td>hard_disk</td>
        <td></td>
        <td><?php echo $row["hard_disk"]; ?></td>
        </tr>
        
    </table>
<?php
}
?>