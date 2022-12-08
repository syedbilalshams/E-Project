<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Search Report</h1>
    <form method="post" action="">
        <div class="row">

            <div class="col-lg-6">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="form-group">
                            <label>Search By Mobile number</label>
                            <input type="text" class="form-control" id="searchdata" name="searchdata" required="true"
                                placeholder="Enter mobile number">
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
        include "config.php";
        $mobile = $_POST["searchdata"];
        $sql = "SELECT `name`,`gmail`,`address`,`state`,`timeslot`,`hospital`,`remarks` FROM `covidtest` WHERE `orderno`='$mobile';";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
    ?>

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sno.</th>
                            <th>Name</th>
                            <th>Gmail</th>
                            <th>address</th>
                            <th>state</th>
                            <th>timeslot</th>
                            <th>Hospital</th>
                            <th>remarks</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sno.</th>
                            <th>Name</th>
                            <th>Gmail</th>
                            <th>address</th>
                            <th>state</th>
                            <th>timeslot</th>
                            <th>Hospital</th>
                            <th>remarks</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
        $cnt = 1;
        while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                        <tr>
                            <td>
                                <?php echo $cnt++; ?>
                            </td>
                            <td>
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <?php echo $row['gmail']; ?>
                            </td>
                            <td>
                                <?php echo $row['address']; ?>
                            </td>
                            <td>
                                <?php echo $row['state']; ?>
                            </td>
                            <td>
                                <?php echo $row['timeslot']; ?>
                            </td>
                            <td>
                                <?php echo $row['hospital']; ?>
                            </td>
                            <td>
                                <?php echo $row['remarks']; ?>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php } ?>

</div>
</div>