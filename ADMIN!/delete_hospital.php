<?php

$id = $_GET["id"];

include "config.php";
$query = "DELETE FROM `hospital` WHERE `h_id`='{$id}'";
mysqli_query($conn,$query);
header("location:http://localhost/e_project/e-project/admin!/hospital.php");

?>