<?php include "header.php"; ?>
<br>
<br>
<br>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Vaccination</h1>
    <form name="newtesting" action="v_test.php" method="post">
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
                            <input type="text" class="form-control" id="fullname" name="name" placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" id="mobilenumber" name="mobile" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true" onBlur="mobileAvailability()">
                            <span id="mobile-availability-status" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group">
                            <label>Gmail</label>
                            <input type="text" class="form-control" id="gmail" name="gmail" placeholder="Enter Gmail" required="true">
                        </div>
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" class="form-control" id="dob" name="dob" required="true">
                        </div>
                        <div class="form-group">
                            <label>CNIC</label>
                            <input type="text" class="form-control" id="cnic" name="cnic" placeholder="CNIC" required="true">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" id="address" name="address" required="true" placeholder="Enter your full addres here"></textarea>
                        </div>
                        <div class="form-group">
                            <label>CITY</label>
                            <select class="form-control" id="testtype" name="city" required="true">
                                <option value="">Select City</option>
                                <?php
                                include "config.php";
                                $query = "SELECT * FROM `hospital` ";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='{$row['city']}'>{$row['city']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Vaccination Information</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Vaccine</label>
                            <select class="form-control" id="testtype" name="vaccine" required="true">
                                <option value="">Select Vaccine</option>
                                <?php
                                include "config.php";
                                $query = "SELECT * FROM `vaccine` ";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='{$row['name']}'>{$row['name']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>hospital</label>
                            <select class="form-control" id="testtype" name="hospital" required="true">
                                <option value="">Select hospital</option>
                                <?php
                                include "config.php";
                                $query = "SELECT * FROM `hospital`;
                                ";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='{$row['name']}'>{$row['name']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Time Slot for Test</label>
                            <input type="datetime-local" class="form-control" id="birthdaytime" name="testtime" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
                        </div>
                        <p>U can go to hospital on ur selected time for your Vaccination
                        </p>

                    </div>
                </div>


            </div>

        </div>
    </form>

</div>
<?php include "footer.php"; ?>