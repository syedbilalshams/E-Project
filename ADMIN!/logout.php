<?php

session_start();
session_unset();
session_destroy();

header("location:http://localhost/e_project/e-project/admin!/login.php");

?>