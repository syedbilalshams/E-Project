<?php include "header.php"; ?>
<br><br><br>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <h1 class="admin-heading"></h1>
            </div>
            <div class="col-md-offset-4 col-lg">
                <!-- Form Start -->
                <?php
                include "config.php";
                $id = $_GET["id"];
                $sql = "SELECT * FROM `patient` WHERE `pid`='$id';";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {

                ?>
                    <form action="" method="POST">
                        <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="pname" value="<?php echo $row['pname']; ?>" required='true'>
                                </div>

                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" class="form-control" name="pmobile" value="<?php echo $row['pmobile']; ?>" readonly='true'>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="pgmail" value="<?php echo $row['pgmail']; ?>" required='true'>
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="paddress" value="<?php echo $row['paddress']; ?>" required='true' maxlength='10'>
                                </div>
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="pstate" value="<?php echo $row['pstate']; ?>" required='true' maxlength='10'>
                                </div>
                            <?php } ?>
                            <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                    </form>
                <?php } ?>
                <!-- /Form -->
                <?php
                include "config.php";
                if (isset($_POST["submit"])) {
                   
                    $pname = $_POST["pname"];
                    $pmobile = $_POST["pmobile"];
                    $pgmail = $_POST["pgmail"];
                    $paddress = $_POST["paddress"];
                    $pstate = $_POST["pstate"];
                    $query = "UPDATE `patient` SET `pname`='$pname',`pmobile`='$pmobile',`pgmail`='$pgmail',`paddress`='$paddress',`pstate`='$pstate' WHERE `pid` = '$id';";
                    mysqli_query($conn, $query);
                    header("location:{$host}index.php");
                }
                ?>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<?php include "footer.php"; ?>