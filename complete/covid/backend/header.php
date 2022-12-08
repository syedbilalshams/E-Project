<?php
include "config.php";
session_start();
if (!isset($_SESSION["name"])) {
  header("location:{$host}");
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
  <title> <?php
          echo $_SESSION["panel"];
          ?></title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="dashboard.php">
          <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
          <h5 class="logo-text">
            <?php
            echo $_SESSION["panel"];
            ?>
          </h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <?php
        if ($_SESSION["panel"] == "ADMIN PANEL") {
          echo '
          <li>
          <a href="dashboard.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
                <a href="addhospital.php">
                  <i class="zmdi zmdi-view-dashboard"></i> <span>Addhospital</span>
                </a>
              </li>
              <li>
                <a href="addvacine.php">
                  <i class="zmdi zmdi-view-dashboard"></i> <span>Addvaccine</span>
                </a>
              </li>
              <li>
              <a href="Rhospital.php">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Hospital</span>
              </a>
            </li>
            <li>
            <a href="Rpatient.php">
              <i class="zmdi zmdi-view-dashboard"></i> <span>Patient</span>
            </a>
          </li>
          <li>
            <a href="Rvacine.php">
              <i class="zmdi zmdi-view-dashboard"></i> <span>Vaccine</span>
            </a>
          </li>
          <li>
                <a href="covidtestappointment.php">
                  <i class="zmdi zmdi-view-dashboard"></i> <span>Covid Test Appointment</span>
                </a>
              </li>       
          <li>
                <a href="messages.php">
                  <i class="zmdi zmdi-view-dashboard"></i> <span>Feedback Messages</span>
                </a>
              </li>       
        ';
        }
        ?>
        <?php
        if ($_SESSION["panel"] == "HOSPITAL PANEL") {
          echo
          '
          <li>
          <a href="hospitalprofile.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Hospital Profile</span>
          </a>
        </li>
        <li>
        <a href="addvacine.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Addvaccine</span>
        </a>
      </li>
      <li>
      <a href="Rpatient.php">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Patient</span>
      </a>
    </li>
    <li>
    <a href="Rvacine.php">
      <i class="zmdi zmdi-view-dashboard"></i> <span>Vaccine</span>
    </a>
  </li>
  <li>
  <a href="Vaccinationapplication.php">
    <i class="zmdi zmdi-view-dashboard"></i> <span>Vaccination Appointment</span>
  </a>
</li> 

          ';
        }
        ?>
      </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
      <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
              <i class="icon-menu menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <form class="search-bar">
              <input type="text" class="form-control" placeholder="Enter keywords">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>
          </li>
        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
          <li class="nav-item">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
              <span class="user-profile"><img src="<?php echo $_SESSION["img"]; ?>" class="img-circle" alt="user avatar"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class="dropdown-item user-details">
                <a href="javaScript:void();">
                  <div class="media">
                    <div class="avatar"><img class="align-self-start mr-3" src="<?php echo $_SESSION["img"]; ?>" alt="user avatar"></div>
                    <div class="media-body">
                      <h6 class="mt-2 user-title"><?php echo $_SESSION["name"]; ?></h6>
                      <p class="user-subtitle"><?php echo $_SESSION["email"]; ?></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    <!--End topbar header-->