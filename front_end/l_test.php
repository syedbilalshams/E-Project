<?php

if (isset($_POST["submit"])) {
    include "config.php";
    $gmail = $_POST['gmail'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `p_user` WHERE `email`='$gmail' AND `password`='$pass' ;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION["id"] = $row['w_id'];
            $_SESSION["name"] = $row['name'];


            header("location:{$host}index.php");
        }
    } else {
        echo "Gmail and Password not matched";
    }
}
?>