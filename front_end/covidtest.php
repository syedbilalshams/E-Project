<?php include "header.php"; ?>
<br>
<br>
<br>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Covid19-Testing</h1>
    <p class="danger">If ur Registered Please <a href="login.php">login</a></p>
   
    <form action="c_test.php" method="post">
        <div class="row">

            <div class="col-lg-6">

                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="pname" placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" id="mobilenumber" name="pmobile" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true" onBlur="mobileAvailability()">
                            <span id="mobile-availability-status" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group">
                            <label>Gmail</label>
                            <input type="text" class="form-control" id="gmail" name="pgmail" placeholder="Enter Gmail" required="true">
                        </div>
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" class="form-control" id="dob" name="pdob" required="true">
                        </div>
                        <div class="form-group">
                            <label>CNIC</label>
                            <input type="text" class="form-control" id="cnic" name="pcnic" placeholder="CNIC" required="true">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" id="address" name="paddress" required="true" placeholder="Enter your full addres here"></textarea>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control" id="state" name="pstate" placeholder="Enter your State Here" required="true">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Testing Information</h6>
                    </div>
                    <div class="card-body">


                        <div class="form-group">
                            <label>Time Slot for Test</label>
                            <input type="datetime-local" class="form-control" id="birthdaytime" name="testtime" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
                        </div>
                        <p>An email will be sended to u by email,oR u will get a phone call regarding ur appointment
                            details
                        </p>
                        <p>OR</p>
                        <p>U can login/signup to view ur remaining appointments</p>

                    </div>
                </div>


            </div>

        </div>
    </form>



</div>
<?php include "footer.php"; ?>