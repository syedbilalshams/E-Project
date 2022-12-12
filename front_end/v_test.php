<?php
if (isset($_POST["submit"])) {
    include "config.php";
    $pname = $_POST["name"];
    $pmobile = $_POST["mobile"];
    $pgender = $_POST["gender"];
    $pgmail = $_POST["gmail"];
    $pdob = $_POST["dob"];
    $pcnic = $_POST["cnic"];
    $paddress = $_POST["address"];
    $pcity = $_POST["city"];
    $pvaccine = $_POST["vaccine"];
    $phospital = $_POST["hospital"];
    $testtime = $_POST["testtime"];
    $query = "INSERT INTO `patient`( `name`, `phone`, `cnic`, `gender`, `email`, `address`, `query`,
     `city`, `hospital`, `dob`, `vac_name`,`time_slot`) VALUES ('{$pname}','{$pmobile}','{$pcnic}',
     '{$pgender}','{$pgmail}','{$paddress}','vaccination','{$pcity}','{$phospital}','{$pdob}','{$pvaccine}','{$testtime}')";
    mysqli_query($conn, $query);
    echo "<SCRIPT>
        alert('$pname  go to  $phospital hospital on ur selected time (`$testtime`) for your Vaccination')
        window.location.replace('index.php');
        </SCRIPT>";
}
?>