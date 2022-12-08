<?php

session_start();

if (isset($_SESSION["name"])) {
  include "config.php";
  header("location:{$host}dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

  <!-- start loader -->
  <div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
      <div class="loader-wrapper-inner">
        <div class="loader"></div>
      </div>
    </div>
  </div>
  <!-- end loader -->

  <!-- Start wrapper-->
  <div id="wrapper">

    <div class="card card-authentication1 mx-auto my-4">
      <div class="card-body">
        <div class="card-content p-2">
          <div class="text-center">
            <img src="assets/images/logo-icon.png" alt="logo icon">
          </div>
          <div class="card-title text-uppercase text-center py-3">Sign Up</div>
          <form action="" method="POST">
            <div class="form-group">
              <label for="exampleInputName" class="sr-only">Name</label>
              <div class="position-relative has-icon-right">
                <input type="text" name="name" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Name">
                <div class="form-control-position">
                  <i class="icon-user"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmailId" class="sr-only">Email ID</label>
              <div class="position-relative has-icon-right">
                <input type="email" name="email" id="exampleInputEmailId" class="form-control input-shadow" placeholder="Enter Your Email ID">
                <div class="form-control-position">
                  <i class="icon-envelope-open"></i>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword" class="sr-only">Password</label>
              <div class="position-relative has-icon-right">
                <input type="text" name="pass" id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password">
                <div class="form-control-position">
                  <i class="icon-lock"></i>
                </div>
              </div>
            </div>
            <input type="submit" name="save" class="btn btn-light btn-block waves-effect waves-light" value="LOGIN">
          </form>
          <?php

          if (isset($_POST["save"])) {
            include "config.php";

            $user_email = $_POST["email"];
            $user_pass = $_POST["pass"];


            $sql = "SELECT `aid`,`aname` FROM `admin` WHERE `aemail`='$user_email' AND `apassword`='$user_pass'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["name"] = $row['aname'];
                $_SESSION["email"] = $row['aemail'];
                $_SESSION["id"] = $row['ADMIN.ID'];
                $_SESSION["panel"] = "ADMIN PANEL";
                $_SESSION["img"] ="upload/".$row['aname'].".jpg";
                
                header("location:{$host}dashboard.php");
              }
            } else {
              echo "Email and Password not matched";
            }
          }

          ?>
          <div class="text-center mt-3">Sign Up With</div>

          <div class="form-row mt-4">
            <div class="form-group mb-0 col-6">
              <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
            </div>
            <div class="form-group mb-0 col-6 text-right">
              <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--start color switcher-->
    <div class="right-sidebar">
      <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
      </div>
      <div class="right-sidebar-content">

        <p class="mb-0">Gaussion Texture</p>
        <hr>

        <ul class="switcher">
          <li id="theme1"></li>
          <li id="theme2"></li>
          <li id="theme3"></li>
          <li id="theme4"></li>
          <li id="theme5"></li>
          <li id="theme6"></li>
        </ul>

        <p class="mb-0">Gradient Background</p>
        <hr>

        <ul class="switcher">
          <li id="theme7"></li>
          <li id="theme8"></li>
          <li id="theme9"></li>
          <li id="theme10"></li>
          <li id="theme11"></li>
          <li id="theme12"></li>
          <li id="theme13"></li>
          <li id="theme14"></li>
          <li id="theme15"></li>
        </ul>

      </div>
    </div>
    <!--end color switcher-->

  </div>
  <!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>

  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

</body>

</html>