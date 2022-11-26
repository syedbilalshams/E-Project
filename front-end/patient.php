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
      <h1>Sign Up</h1>
      <p>It's Free and Only takes a minute</p>
      <!-- Form Start -->
      <form method="POST">
        <div class="form-group">
          <label for="first-name"> Name</label>
          <input type="text" name="name" id="first-name">
        </div>
   
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="first-name">
        </div>
        <div class="form-group">
      
        <button type="submit" name="save">Sign Up</button>
    
      </form>
      <!-- Form Close -->
    </div>
    <!-- Form Wrap Close -->

  </div>
  <!-- Container Close -->


</body>
<?php

if(isset($_POST["save"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

include "config.php";
$query = "INSERT INTO `p_user`( `name`, `email`, `password`) VALUES ('{$name}','{$email}','{$password}')";
mysqli_query($conn,$query);
header("location:http://localhost/e_project/e-project/front-end/");
}
?>
</html>