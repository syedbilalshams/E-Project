<?php include "header.php"; ?>
<br>
<br><br>
<?php
error_reporting(E_ALL ^ E_WARNING);
if (isset($_POST["submit"])) {
    include "config.php";
    $pname = $_POST["pname"];
    $pmobile = $_POST["pmobile"];
    $pgmail = $_POST["pgmail"];
    $ppass = $_POST["ppass"];
    $pdob = $_POST["pdob"];
    $pcnic = $_POST["pcnic"];
    $paddress = $_POST["paddress"];
    $pstate = $_POST["pstate"];
    $query = "SELECT * FROM `patient` WHERE `pgmail`='$pgmail' OR `pmobile`='$pmobile' ;";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "User already exits with same gmail OR phone number";
    } else {
        $query1 = "INSERT INTO `patient`(`pname`, `pmobile`, `pgmail`, `ppass`, `pdob`, `pcnic`, `paddress`, `pstate`) VALUES ('$pname','$pmobile','$pgmail','$ppass','$pdob','$pcnic','$paddress','$pstate');";
        mysqli_query($conn, $query1);
        header($host."/covid/login.php");
    }
}
?>
<form action="" method="post">
    <div class="container card shadow mb-4">
        <br>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" id="fullname" name="pname" placeholder="Enter your full name..."
                    pattern="[A-Za-z ]+" title="letters only" required="true">
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" id="mobilenumber" name="pmobile"
                    placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only"
                    required="true" onBlur="mobileAvailability()">
                <span id="mobile-availability-status" style="font-size:12px;"></span>
            </div>
            <div class="form-group">
                <label>Gmail</label>
                <input type="text" class="form-control" id="gmail" name="pgmail" placeholder="Enter Gmail"
                    required="true">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" id="gmail" name="ppass" placeholder="Enter Password"
                    required="true">
            </div>
            <div class="form-group">
                <label>DOB</label>
                <input type="date" class="form-control" id="dob" name="pdob" required="true">
            </div>
            <div class="form-group">
                <label>CNIC</label>
                <input type="text" class="form-control" id="cnic" name="pcnic" placeholder="CNIC" required="true">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" id="address" name="paddress" required="true"
                    placeholder="Enter your full addres here"></textarea>
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" class="form-control" id="state" name="pstate" placeholder="Enter your State Here"
                    required="true">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
            </div>
        </div>
    </div>
</form>
<?php include "footer.php"; ?>