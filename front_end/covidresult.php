<?php include "header.php"; ?>
<br><br><br>

<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Search Report</h1>
    <form method="post" action="">
        <div class="row">

            <div class="col-lg-6">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="form-group">
                            <label>Search By Order number</label>
                            <input type="text" class="form-control" id="searchdata" name="searchdata" required="true"
                                placeholder="Enter Order number">
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-user btn-block" name="search"
                                value="Search">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST["search"])) {
        include "config.php";
        $mobile = $_POST["searchdata"];
        $sql = "SELECT `orderno`, `name`, `mobile`, `gmail`, `dob`, `cnic`, `address`, `state`, `timeslot`, `hospital`, `remarks` FROM `covidtest` WHERE `orderno`='$mobile';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        }
    ?>
    <?php
        $cnt = 1;
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Test Details#
        <?php echo $row['orderno']; ?>
    </h1>
    <div class="row">
        <!-- personal information --->
        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                </div>
                <div class="card-body">

                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Full Name</th>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Mobile Number</th>
                            <td>
                                <?php echo $row['mobile']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th>DOB (Date of Birth)</th>
                            <td>
                                <?php echo $row['dob']; ?>
                            </td>
                        </tr>


                        <tr>
                            <th>Cnic</th>
                            <td>
                                <?php echo $row['cnic']; ?>
                            </td>
                        </tr>


                        <tr>
                            <th>Full Address</th>
                            <td>
                                <?php echo $row['address']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th>State</th>
                            <td>
                                <?php echo $row['state']; ?>
                            </td>
                        </tr>
                    </table>



                </div>
            </div>
        </div>

        <!-- Test Information --->
        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Test Information</h6>
                </div>
                <div class="card-body">

                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <tr>
                            <th>Order Number</th>
                            <td>
                                <?php echo $row['orderno']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Time Slot</th>
                            <td>
                                <?php echo $row['timeslot']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Hospital</th>
                            <td>
                                <?php if ($row['hospital'] == '0')
                echo "Not Processed yet";
            else
                echo $row['hospital'];
            ;

                                ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Report Status</th>
                            <td>
                                <?php if ($row['remarks'] == '0')
                echo "Not Processed yet";
            else
                echo $row['remarks'];
            ;

                                ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Report</th>
                            <td><a href="reportfiles/<?php echo $row['FinalReport']; ?>" target="_blank">Download</a>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>
    </div>
    <?php } ?>
    <?php } ?>
</div>
<?php include "footer.php"; ?>