<?php include "header.php"; ?>
<br><br><br>
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    <form action="" method="post" name="adminprofile">
        <div class="row">
            <div class="col-lg-8">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <?php
                    include "config.php";
                    $pid =$_SESSION["id"];
                    $ret = mysqli_query($conn,"SELECT * FROM `patient` WHERE `pid`='$pid';");
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($ret)) {
                    ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="pname" value="<?php echo $row['pname']; ?>"
                                required='true'>
                        </div>

                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="pmobile" value="<?php echo $row['pmobile']; ?>"
                                readonly='true'>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="pgmail" value="<?php echo $row['pgmail']; ?>"
                                required='true'>
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="paddress" value="<?php echo $row['paddress']; ?>"
                                required='true' maxlength='10'>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control" name="pstate" value="<?php echo $row['pstate']; ?>"
                                required='true' maxlength='10'>
                        </div>


                        <?php } ?>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="update"
                                value="Update">
                        </div>

                    </div>
                </div>

            </div>



        </div>
    </form>
    <?php
    error_reporting(E_ALL ^ E_WARNING);
    if (isset($_POST["submit"])) {
        include "config.php";
        $pid =$_SESSION["id"];
        $pname = $_POST["pname"];
        $pmobile = $_POST["pmobile"];
        $pgmail = $_POST["pgmail"];
        $paddress = $_POST["paddress"];
        $pstate = $_POST["pstate"];
        $query = "UPDATE `patient` SET `pname`='$pname',`pmobile`='$pmobile',`pgmail`='$pgmail'`paddress`='$paddress',`pstate`='$pstate' WHERE `pid`=$pid;";
        mysqli_query($conn, $query);
        header("location:{$host}index.php");
    }
    ?>

</div>
<?php include "footer.php"; ?>