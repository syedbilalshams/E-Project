<?php include "header.php"; ?>
<br>
<br>
<br>
<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hospitals</h6>
        </div>
        <div class="card-body">
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
                        include "config.php";
                        $query = mysqli_query($conn, "SELECT * FROM `hospital`");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                        ?>

                            <tr>
                                <td>
                                    <?php echo $cnt++; ?>
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
<!-- /.container-fluid -->
<?php include "footer.php"; ?>