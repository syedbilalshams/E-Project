<?php include "header.php"; ?>
<br>
<br><br>
<form action="l_test.php" method="post">
    <div class="container card shadow mb-4">
        <br>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Gmail</label>
                <input type="text" class="form-control" id="gmail" name="gmail" placeholder="Enter Gmail" required="true">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" id="gmail" name="pass" placeholder="Enter Password" required="true">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">
            </div>
        </div>
    </div>
</form>
<?php include "footer.php"; ?>