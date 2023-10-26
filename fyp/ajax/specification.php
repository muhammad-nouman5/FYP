<?php
include("../conn.php");
$mobile_id = $_POST['mobile_id'];
$query = "SELECT * FROM mobiles WHERE id='$mobile_id'";
$run = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($run)) {
?>
    <table class="table table-hover table-responsive-xm"> <!-- it's a Specification table for fetching Data from Database -->
        <thead class="thead-dark">
            <th></th>
            <h3>
                <Th class="text-center"><?php echo $row["mobile_name"]; ?> Specification</th>
            </h3>
            <Th></th>
        </thead>

        <td>Processor</td>
        <td></td>
        <td><?php echo $row["processor"]; ?></td>
        </tr>
        <td>RAM</td>
        <td></td>
        <td><?php echo $row["ram"]; ?></td>
        </tr>
        <td>ROM</td>
        <td></td>
        <td><?php echo $row["rom"]; ?></td>
        </tr>
        <td>Camera</td>
        <td></td>
        <td><?php echo $row["camera"]; ?></td>
        </tr>
        <td>Battery</td>
        <td></td>
        <td><?php echo $row["battery"]; ?></td>
        </tr>
        <td>Weight</td>
        <td></td>
        <td><?php echo $row["weight"]; ?></td>
        </tr>
    </table>
<?php
}
?>