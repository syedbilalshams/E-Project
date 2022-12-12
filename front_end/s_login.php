<?php


    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $gmail = $_POST["gmail"];
    $password = $_POST["password"];
    $city = $_POST["city"];
    include "config.php";
    $query = "SELECT * FROM p_user WHERE `email` = '{$gmail}'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        echo "email taken";
    }
    else{
        include "config.php";
        $query = "INSERT INTO `p_user`( `name`, `email`, `password`, `phone`, `city`) VALUES ('{$name}','{$gmail}','{$password}','{$phone}','{$city}')";
        mysqli_query($conn,$query);
    }
    header("location:http://localhost/e_project/e-project/front_end/login.php");

?>