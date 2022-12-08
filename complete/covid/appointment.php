<?php include "header.php"; ?>
<div class="container">
<?php
        include "config.php";
        $cnic = $_SESSION["cnic"];
        $sql = "SELECT * FROM `covidtest` WHERE `cnic`='$cnic' AND `remarks`!='0';";
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
    <?php }
    else{
        
        echo "<br><br><br><br><br>"."<a href='covidtest.php'>Book a test </a>"."<br><br><br><br><br>";
    } ?>
</div>
<?php include "footer.php"; ?>