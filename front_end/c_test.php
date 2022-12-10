<?php
if (isset($_POST["submit"])) {
    include "config.php";
    $pname = $_POST["name"];
    $pmobile = $_POST["mobile"];
    $pgmail = $_POST["gmail"];
    $pdob = $_POST["dob"];
    $pcnic = $_POST["cnic"];
    $paddress = $_POST["address"];
    $pcity = $_POST["city"];
    $phospital = $_POST["hospital"];
    $testtime = $_POST["testtime"];
    $query = "INSERT INTO `patient`(`name`, `phone`, `email`, `city`, `hospital`, `cnnic`, `dob`, `address`, 
    `query`,`vac_name`, `time_slot`) VALUES ('{$pname}','{$pmobile}','{$pgmail}','{$pcity}','{$phospital}',
    '{$pcnic}','{$pdob}','{$paddress}','covid-test','no','{$testtime}')";
    mysqli_query($conn, $query);
    echo "<SCRIPT>
    alert('$pname  remember your Cnic No. ($pcnic) for your test results')
    window.location.replace('index.php');
    </SCRIPT>";


}
