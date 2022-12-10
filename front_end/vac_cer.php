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
        $query = "SELECT * FROM `patient` WHERE `cnnic`='{$cnic}' and `name`='{$name}' ";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

     ?>
    
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