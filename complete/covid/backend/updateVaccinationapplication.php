<?php include 'header.php'; ?>
<br><br><br><br><br><br>
<div class="col-md-offset-4 col-lg mt-6 "  >
    <!-- Form Start -->
    <?php
    include "config.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM `vaccination` LEFT JOIN vaccine ON `vaccination`.`vaccineid` = `vaccine`.`vid` WHERE `apointmentid`='$id';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

    ?>
        <table class="ml-12 table table-bordered" id="dataTable" width="50%" cellspacing="0">
            <thead>
                <h3>Patient Detail</h3>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Vaccine</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Vaccine</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <tr>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['address']; ?>
                        </td>
                        <td>
                            <?php echo $row['state']; ?>
                        </td>
                        <td>
                        <?php echo $row['vaccine']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>
    <?php
    include "config.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM `vaccination` WHERE `apointmentid`='$id';";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

    ?>
        <form action="" method="POST">
            <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
                <div class="form-group">
                    <label for="input-4">Status</label>
                    <input type="text" name='status' class="form-control" id="input-5" value="<?php echo $row['status']; ?>">
                </div>
                <div class="form-group">
                    <label for="input-4">Remarks</label>
                    <input type="text" name='remarks' class="form-control" id="input-5" value="<?php echo $row['remarks']; ?>">
                </div>
            <?php } ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
        </form>
    <?php } ?>
    <!-- /Form -->
    <?php
    include "config.php";
    if (isset($_POST["submit"])) {
        $status = $_POST["status"];
        $remarks = $_POST["remarks"];

        $query = "UPDATE `vaccination` SET `status`='$status',`remarks`='$remarks' WHERE `apointmentid='$id';";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("location:{$host}Vaccinationapplication.php");
        }
    }
    ?>
</div>






<?php include 'footer.php'; ?>