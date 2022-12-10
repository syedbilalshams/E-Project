<?php include "header.php"; ?>
<br><br><br>

<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Search Report</h1>
    <form method="POST" action="">
        <div class="row">

            <div class="col-lg-6">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="form-group">
                            <label>Search By Cnic No.</label>
                            <input type="text" class="form-control" id="searchdata" name="searchdata" required="true"
                                placeholder="Enter Cnic No.">
                                <a href="vac_cer.php">Search Vaccination Certificate</a>
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
        $res = $_POST["searchdata"];
        $query = "SELECT * FROM `patient` WHERE `cnnic`='{$res}' and `query`='covid-test' ";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

     ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Test Details#
        <?php echo $row['name']; ?>
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
                                <?php echo $row['phone']; ?>
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
                                <?php echo $row['cnnic']; ?>
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
                                <?php echo $row['city']; ?>
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
                                <?php echo $row['p_id']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Time Slot</th>
                            <td>
                                <?php echo $row['time_slot']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Hospital</th>
                            <td>
                                <?php echo $row['hospital']; ?>
                            </td>
                        </tr>

                        <tr>
                            <th>Report Status</th>
                            <td>
                                <?php echo "Negative" ?>
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
<?php } }
else{
    echo "Not Found Any Report A/c To This CNIC";
}
    }
?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>