<?php include "header.php"; ?>
<br><br><br>

<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Search Report</h1>
    <form method="POST" action="">
        <div class="row">

            <div class="col-lg-6">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input type="text" class="form-control" id="searchdata" name="name" required="true"
                                placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label>Enter Cnic No.</label>
                                <input type="text" class="form-control" id="searchdata" name="cnic" required="true"
                                placeholder="Enter Cnic No.">
                                <a href="covidresult.php">Search Covid Result</a>
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-user btn-block" name="search"
                                value="Search">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST["search"])) {
        include "config.php";
        $name = $_POST["name"];
        $cnic = $_POST["cnic"];
        $query = "SELECT * FROM `patient` WHERE `cnic`='{$cnic}' and `name`='{$name}' ";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

     ?>
    <div class="col-lg-6">

<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Vaccine Information</h6>
    </div>
    <div class="card-body">

        <table class="table table-bordered" width="100%" cellspacing="0">
            <tr>
                <th>#</th>
                <td>
                    <?php echo $row['p_id']; ?>
                </td>
            </tr>

            <tr>
                <th>Time Slot</th>
                <td>
                    <?php echo $row['time_slot']; ?>
                </td>
            </tr>
            <tr>
                <th>Hospital</th>
                <td>
                    <?php echo $row['hospital']; ?>
                </td>
            </tr>

            <tr>
                <th>Gender</th>
                <td>
                    <?php echo $row["gender"]; ?>
                </td>
            </tr>

            <tr>
                <th>CNIC</th>
                <td>
                    <?php echo $row["cnic"]; ?>
                </td>
            </tr>
            
            <tr>
                <th>Vaccine Used</th>
                <td>
                    <?php echo $row["vac_name"]; ?>
                </td>
            </tr>

            <tr>
                <th>Email</th>
                <td>
                    <?php echo $row["email"]; ?>
                </td>
            </tr>

            <tr>
                <th>Address</th>
                <td>
                    <?php echo $row["address"]; ?>
                </td>
            </tr>
            
            <tr>
                <th>Report</th>
                <td><a href="reportfiles/<?php echo $row['FinalReport']; ?>" target="_blank">Download</a>
                </td>
            </tr>

        </table>
    </div>
</div>
<?php } }
else{
    echo "Not Found Any  A/c To This CNIC";
}
    }
?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>