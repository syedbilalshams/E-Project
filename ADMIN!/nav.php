<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("location:http://localhost/e_project/e-project/admin!/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Sidebar Start -->

    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">COVID.</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <?php
                    if ($_SESSION["panel"] == "admin") {


                    ?>
                        <img class="rounded-circle" src="upload/<?php echo $_SESSION["image"]; ?>" alt="" style="width: 40px; height: 40px;">
                    <?php } else {
                    ?>
                        <img class="rounded-circle" src="img/hos.webp" alt="" style="width: 40px; height: 40px;">

                    <?php } ?>
                    <?php
                    if ($_SESSION["panel"] == "admin") {
                    ?>
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    <?php } ?>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?php echo $_SESSION["user"]; ?></h6>
                    <span class="d-none d-lg-inline-flex">
                        <?php
                        if ($_SESSION["panel"] == "admin") {
                            if ($_SESSION["role"] == 1) {
                                echo "Admin";
                            } else {
                                echo "User";
                            }
                        } else {
                            echo "Hospital";
                        }
                        ?>
                    </span>
                </div>
            </div>

            <div class="navbar-nav w-100">
                <?php

                if ($_SESSION["panel"] == "admin") {
                    if ($_SESSION['role'] == 1) {              ?>
                                        <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>USERS</a>

                        <a href="PATIENT.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>PATIENT</a>
                        <a href="hospital.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>HOSPITAL</a>
                        <a href="vaccine.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>VACCINE</a>
                        <a href="web_user.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>WEB-USER</a>
                        
                        <?php }
                else {
                    ?>
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>USERS</a>
                <?php } }?>
                <?php

                if ($_SESSION["panel"] == "hospital") {             ?>
                        <a href="PATIENT.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>PATIENT</a>
                <?php }?>
            </div>
    </div>
    </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control border-0" type="search" placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <?php
                        if ($_SESSION["panel"] == "admin") {


                        ?>
                            <img class="rounded-circle" src="upload/<?php echo $_SESSION["image"]; ?>" alt="" style="width: 40px; height: 40px;">
                        <?php } else {
                        ?>
                            <img class="rounded-circle" src="img/hos.webp" alt="" style="width: 40px; height: 40px;">

                        <?php } ?>
                        <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["user"]; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="logout.php" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>




</body>

</html>