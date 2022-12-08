<?php include "header.php"; ?>

<!--End topbar header-->

<?php 

include "config.php";

$query = "SELECT * FROM `hospital`;";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
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
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sno.</th>
                            <th>Name</th>
                            <th>Mobile No.</th>
                            <th>Address</th>
                            <th>Edit</th>
                            <th>Delete</th>
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
                                <td class='edit'><a href='edithospital.php?id=<?php echo $row["hid"];  ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='deletehospital.php?id=<?php echo $row["hid"];  ?>'><i class='fa fa-trash-o'></i></a></td>
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