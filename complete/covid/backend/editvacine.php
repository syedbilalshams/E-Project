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
                $sql = "SELECT * FROM `vaccine` WHERE `vid`='$id';";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {

                ?>
                    <form action="" method="POST">
                        <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
                            <div class="form-group">
                                <label for="input-1">Vaccine</label>
                                <input type="text" name='vaccine' class="form-control" id="input-1" value="<?php echo $row['vaccine']; ?>">
                            </div>
                        <?php } ?>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                    </form>
                <?php } ?>
                <!-- /Form -->
                <?php
                include "config.php";
                if (isset($_POST["submit"])) {
                    $vaccine = $_POST["vaccine"];

                    $query = "UPDATE `vaccine` SET `vaccine`='$vaccine' WHERE `vid` = '$id';";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        header("location:{$host}Rvacine.php");
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<?php include "footer.php"; ?>