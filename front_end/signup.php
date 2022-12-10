<?php include "header.php"; ?>
<br>
<br><br>
<form action="" method="post">
    <div class="container card shadow mb-4">
        <br>
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
                <input type="text" class="form-control" id="" name="phone" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true" onBlur="mobileAvailability()">
                <span id="mobile-availability-status" style="font-size:12px;"></span>
            </div>
            <div class="form-group">
                <label>Gmail</label>
                <input type="text" class="form-control" id="gmail" name="gmail" placeholder="Enter Gmail" required="true">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="gmail" name="password" placeholder="Enter Password" required="true">
            </div>
            <div class="form-group">
                <label>City</label>
                <select class="form-control option" name="city">
                    <option value="Karachi">Karachi</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Peshawar">Peshawar</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
            </div>
        </div>
    </div>
</form>
<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $gmail = $_POST["gmail"];
    $password = $_POST["password"];
    $city = $_POST["city"];
    include "config.php";
    $query = "SELECT * FROM p_user WHERE `email` = '{$gmail}'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        echo "email taken";
    }
    else{
        include "config.php";
        $query = "INSERT INTO `p_user`( `name`, `email`, `password`, `phone`, `city`) VALUES ('{$name}','{$gmail}','{$password}','{$phone}','{$city}')";
        mysqli_query($conn,$query);
    }
}
?>

<?php include "footer.php"; ?>  