<!doctype html>
<html lang="en">

<head>
  <title>Covid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="index.php" class="mb-0">Covid<span class="text-primary">.</span> </a>
            </div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="prevention.php" class="nav-link">Prevention</a>
                  <ul class="dropdown">
                    <li><a href="prevention.php" class="nav-link">Keep social distancing</a></li>
                    <li><a href="prevention.php" class="nav-link">Stay at home</a></li>
                    <li><a href="prevention.php" class="nav-link">Wear facemask</a></li>
                    <li><a href="prevention.php" class="nav-link">Wash your hands</a></li>
                  </ul>
                </li>
                <li><a href="symptoms.php" class="nav-link">Symptoms</a></li>
                <li><a href="about.php" class="nav-link">About</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="has-children">
                  <a href="" class="nav-link">Covid</a>
                  <ul class="dropdown">
                    <li><a href="covidtest.php" class="nav-link">Book a Test</a></li>
                    <li><a href="covidresult.php" class="nav-link">Check results</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="" class="nav-link">Vaccination</a>
                  <ul class="dropdown">
                    <li><a href="vaccine.php" class="nav-link">Availible Vaccine</a></li>
                    <li><a href="Hospital.php" class="nav-link">Availible Hospitals</a></li>
                    <li><a href="vaccination.php" class="nav-link">Book an Vaccination appointment</a></li>
                  </ul>
                </li>
                <?php
                session_start();
                if (!isset($_SESSION["id"])) {
                  echo
                    '<li class="has-children">
                  <a href="" class="nav-link">Login</a>
                  <ul class="dropdown">
                    <li><a href="login.php" class="nav-link">Login</a></li>
                    <li><a href="signup.php" class="nav-link">Signup</a></li>
                  </ul>
                </li>';
                }

                if (isset($_SESSION["name"])) {
                  echo
                    '
                  <li class="has-children">
                    <a href="profile.php" class="nav-link">' . $_SESSION['name'] . ' </a>
                    <ul class="dropdown">
                      <li><a href="profile.php" class="nav-link">Profile</a></li>
                      <li><a href="appointment.php" class="nav-link">View Appointment result</a></li>
                      <li><a href="logout.php" class="nav-link">Logout</a></li>
                    </ul>
                  </li>';
                }
                ?>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a>
          </div>

        </div>
      </div>

    </header>