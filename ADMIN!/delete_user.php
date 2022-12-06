<?php

$id = $_GET["u_id"];

include "config.php";
$query = "DELETE FROM `user` WHERE `u_id`='{$id}'";
mysqli_query($conn,$query);
header("location:http://localhost/e_project/e-project/admin!/index.php");

?>