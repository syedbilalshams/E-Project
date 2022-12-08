<?php
if (isset($_POST["submit"])) {
    include "config.php";
    $pname = $_POST["pname"];
    $pmobile = $_POST["pmobile"];
    $pgmail = $_POST["pgmail"];
    $pdob = $_POST["pdob"];
    $pcnic = $_POST["pcnic"];
    $paddress = $_POST["paddress"];
    $pstate = $_POST["pstate"];
    $pvaccine = $_POST["vaccine"];
    $phospital = $_POST["hospital"];
    $testtime = $_POST["testtime"];
    $sql = "INSERT INTO `vaccination`(`name`, `mobile`, `gmail`, `dob`, `cnic`, `address`, `state`, `vaccineid`, `hospitalid`, `timeslot`, `status`, `remarks`) VALUES ('$pname','$pmobile','$pgmail','$pdob','$pcnic','$paddress','$pstate','$pvaccine','$phospital','$testtime','0','0');";
    mysqli_query($conn, $sql);
    echo "<SCRIPT>
        alert('U can go to hospital on ur selected time for your Vaccination')
        window.location.replace('index.php');
        </SCRIPT>";
}
?>