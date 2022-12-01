<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/patient.css">
    <title>Registration Form Using HTML/CSS</title>
</head>

<body>

    <!-- Container Start -->
    <div id="container">
        <!-- Form Wrap Start -->
        <div class="form-wrap">
            <h1>Sign in</h1>
            <p>It's Free and Only takes a minute</p>
            <!-- Form Start -->
            <form method="POST">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="first-name">
                </div>
                <div class="form-group">

                    <button type="submit" name="save">Sign in</button>

            </form>
            <!-- Form Close -->
        </div>
        <!-- Form Wrap Close -->
        <footer>
            <p>Don't have an Account? <a href="patient.php">Sign in Here</a></p>
        </footer>
    </div>
    <!-- Container Close -->


</body>
<?php

if (isset($_POST["save"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    include "config.php";
    $query = "SELECT `email`,`password`,`name` FROM `p_user` WHERE `email`='{$email}' AND `password`='{$password}'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['email'] =  $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['name'] = $row['name'];
           
            header("location:http://localhost/e_project/e-project/front-end/");
        }
    } else {
        echo "Login Unsuccessful";
    }
}
?>

</html>