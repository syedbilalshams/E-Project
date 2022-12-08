<?php

if (isset($_POST["submit"])) {
    include "config.php";
    $gmail = $_POST['gmail'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `patient` WHERE `pgmail`='$gmail' AND `ppass`='$pass' ;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION["id"] = $row['pid'];
            $_SESSION["name"] = $row['pname'];
            $_SESSION["cnic"] = $row['pcnic'];


            header("location:{$host}index.php");
        }
    } else {
        echo "Gmail and Password not matched";
    }
}
?>