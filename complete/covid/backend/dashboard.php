<?php include "header.php"; ?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">

    <!--Start Dashboard Content-->

    <div class="card mt-3">
      <div class="card-content">
        <div class="row row-group m-0">
          <div class="col-12 col-lg-6 col-xl-3 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">
                <?php

              include "config.php";

              $query = "SELECT COUNT(`pid`) FROM `patient`;";

              $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["COUNT(`pid`)"];
                }
              }
              ?> <span class="float-right"><i class="fa fa-eye"></i></span>
              </h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Total Patient<span class="float-right">+4.2% <i
                    class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">
                <?php

              include "config.php";

              $query = "SELECT COUNT(`hid`) FROM `hospital`;";

              $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["COUNT(`hid`)"];
                }
              }
              ?><span class="float-right"><i class="fa fa-eye"></i></span>
              </h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Total Hospital <span class="float-right">+1.2% <i
                    class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">
                <?php

              include "config.php";

              $query = "SELECT COUNT(`vid`) FROM `vaccine`;";

              $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["COUNT(`vid`)"];
                }
              }
              ?><span class="float-right"><i class="fa fa-eye"></i></span>
              </h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Total vaccine <span class="float-right">+5.2% <i
                    class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">
                <?php

              include "config.php";

              $query = "SELECT COUNT(`mid`) FROM `feedback`;";

              $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row["COUNT(`mid`)"];
                }
              }
              ?>

                                
              <span class="float-right"><i class="fa fa-envira"></i></span></h5>
                              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
                              </div>
              <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                  <?php include 'footer.php' ?>