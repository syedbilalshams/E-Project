<?php
session_start()
?>
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php  echo $_SESSION["user"]; ?></h6>
                        <span><?php 
                         if($_SESSION["role"]==1){
                             echo "Admin";
                        }  
                        else{
                            echo "User";
                        }
                        ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Users</a>

                    <?php
                     if($_SESSION["role"]==1){
                   
                    ?>
                    <a href="patient.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Patients</a>
                    <a href="hospital.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Hospitals</a>
                    <a href="vaccine.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Vaccine</a>
                    <a href="chart.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Post</a>
                     <?php } ?>
                </div>
            </nav>
        </div>