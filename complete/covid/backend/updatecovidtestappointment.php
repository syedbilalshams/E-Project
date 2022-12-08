<?php include 'header.php'; ?>
<?php

include "config.php";

$query = "SELECT * FROM `hospital`;";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
?>

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Hospital</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Mobile No.</th>
                                            <th>Address</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Mobile No.</th>
                                            <th>Address</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <tr>
                                                <td>
                                                    <?php echo $row['hid']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['hname']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['hphone']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['haddress']; ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            <?php } ?>


            <div class="col-md-offset-4 col-lg">
                <!-- Form Start -->
                <?php
                include "config.php";
                $id = $_GET["id"];
                $sql = "SELECT * FROM `covidtest` WHERE `tid`='$id';";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {

                ?>            
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <h3>Patient Detail</h3>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>State</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>State</th>
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
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
                <?php
                include "config.php";
                $id = $_GET["id"];
                $sql = "SELECT * FROM `covidtest` WHERE `tid`='$id';";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {

                ?>
                    <form action="" method="POST">
                        <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
                            <div class="form-group">
                                <label for="input-4">Hospital</label>
                                <input type="text" name='hospital' class="form-control" id="input-5" value="<?php echo $row['hospital']; ?>">
                            </div>
                        <?php } ?>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                    </form>
                <?php } ?>
                <!-- /Form -->
                <?php
                include "config.php";
                if (isset($_POST["submit"])) {
                    $hospital = $_POST["hospital"];

                    $query = "UPDATE `covidtest` SET `hospital`='' WHERE `tid`='$id';";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        header("location:{$host}covidtestappointment.php");
                    }
                }
                ?>
            </div>






            <?php include 'footer.php'; ?>