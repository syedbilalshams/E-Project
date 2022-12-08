<?php include "header.php"; ?>
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Add Hospital</div>
            <hr>
            <form action="" method="POST">
              <div class="form-group">
                <label for="input-1">Name</label>
                <input type="text" name='hname' class="form-control" id="input-1" placeholder="Enter Hospital Name">
              </div>
              <div class="form-group">
                <label for="input-2">Email</label>
                <input type="email" name='email' class="form-control" id="input-2" placeholder="Enter Hospital Email">
              </div>
              <div class="form-group">
                <label for="input-3">Password</label>
                <input type="text" name='password' class="form-control" id="input-4" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <label for="input-4">Phone NO</label>
                <input type="text" name='phone' class="form-control" id="input-5" placeholder="Enter phone">
              </div>
              <div class="form-group">
                <label for="input-4">Address</label>
                <input type="text" name='address' class="form-control" id="input-5" placeholder="Enter Address">
              </div>

              <div class="form-group">
                <input type="submit" name='save' class="btn btn-light px-5" value="Register"> 
              </div>
            </form>
            <?php
            if (isset($_POST["save"])) {

              $hos_name = $_POST["hname"];
              $hos_email = $_POST["email"];
              $hos_password = $_POST["password"];
              $hos_phone = $_POST["phone"];
              $hos_address = $_POST["address"];

              include "config.php";
              $query = "SELECT * FROM hospital WHERE `hemail` =  '{$hos_email}'";
              $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) {
                echo 'Hospital email already exist';
              } else {
                $query1 = "INSERT INTO `hospital`(`hname`, `hemail`, `hpassword`, `hphone`, `haddress`) VALUES ('{$hos_name}','{$hos_email}','{$hos_password}','{$hos_phone}','{$hos_address}');";
                mysqli_query($conn, $query1);
                header("location:{$host}Rhospital.php");
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