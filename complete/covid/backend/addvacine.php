<?php include "header.php"; ?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Add Vaccine</div>
            <hr>
            <form action="" method="POST">
              <div class="form-group">
                <label for="input-1">Vaccine</label>
                <input type="text" name='vaccine' class="form-control" id="input-1" placeholder="Enter Vaccine Name">
              </div>
              <div class="form-group">
                <input type="submit" name='save' class="btn btn-light px-5" value="Register">
              </div>
            </form>
            <?php
            if (isset($_POST["save"])) {

              $vaccine = $_POST["vaccine"];


              include "config.php";
              $query = "SELECT * FROM `vaccine` WHERE `vaccine`='$vaccine' ;";
              $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) {
                echo 'Vaccine already exist';
              } else {
                $query1 = "INSERT INTO `vaccine`(`vaccine`) VALUES ('$vaccine');";
                mysqli_query($conn, $query1);
                header("location:{$host}Rvacine.php");
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!--End Row-->

    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->

  </div>
  <!-- End container-fluid-->

</div>
<!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<?php include "footer.php"; ?>