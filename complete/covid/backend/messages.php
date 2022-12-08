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
            <h6 class="m-0 font-weight-bold text-primary">Feedback messages</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sno.</th>
                            <th>Gmail</th>
                            <th>Messages</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Sno.</th>
                            <th>Gmail</th>
                            <th>Messages</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        include "config.php";
                        $query = mysqli_query($conn, "SELECT * FROM `feedback`;");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                        ?>

                        <tr>
                            <td>
                                <?php echo $cnt++; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['message']; ?>
                            </td>
                            <td class='reply'><a href='replyemail.php?id=<?php echo $row["mid"];  ?>'><i class='fa fa-edit'></i></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<br><br><br>
<?php include "footer.php"; ?>