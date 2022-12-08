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
                $id = $_SESSION["id"];
                $sql = "SELECT * FROM `hospital` WHERE `hid`='$id';";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {

                ?>
                    <form action="" method="POST">
                        <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
                            <div class="form-group">
                                <label for="input-1">Name</label>
                                <input type="text" name='hname' class="form-control" id="input-1" value="<?php echo $row['hname']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="input-2">Email</label>
                                <input type="email" name='email' class="form-control" id="input-2" value="<?php echo $row['hemail']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="input-4">Phone NO</label>
                                <input type="text" name='phone' class="form-control" id="input-5" value="<?php echo $row['hphone']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="input-4">Address</label>
                                <input type="text" name='address' class="form-control" id="input-5" value="<?php echo $row['haddress']; ?>">
                            </div>
                        <?php } ?>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                    </form>
                <?php } ?>
                <!-- /Form -->
                <?php
                include "config.php";
                if (isset($_POST["submit"])) {
                    $hos_name = $_POST["hname"];
                    $hos_email = $_POST["email"];
                    $hos_phone = $_POST["phone"];
                    $hos_address = $_POST["address"];

                    $query = "UPDATE `hospital` SET `hname`='$hos_name',`hemail`='$hos_email',`hphone`='$hos_phone',`haddress`='$hos_address' WHERE `hid`='$id';";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        header("location:{$host}Rhospital.php");
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<?php include "footer.php"; ?>