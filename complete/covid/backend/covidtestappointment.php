<?php include "header.php"; ?>

<!--End topbar header-->

<?php

include "config.php";

$query = "SELECT * FROM `covidtest` WHERE `hospital`= '0';";

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
                            <h5 class="card-title">Update covid hospital</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Gmail</th>
                                            <th>Cnic</th>
                                            <th>Address</th>
                                            <th>State</th>
                                            <th>hospital</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Gmail</th>
                                            <th>Cnic</th>
                                            <th>Address</th>
                                            <th>State</th>
                                            <th>hospital</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <tr>
                                                <td>
                                                    <?php echo $row['tid']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['mobile']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['gmail']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['cnic']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['address']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['state']; ?>
                                                </td>
                                                <td class='edit'><a href='updatecovidtestappointment.php?id=<?php echo $row["tid"];  ?>'><i class='fa fa-edit'></i></a></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            <?php } ?>
            <!-- /.container-fluid -->
            <?php include "footer.php"; ?>