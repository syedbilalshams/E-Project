
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
</head>
<style>

body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: transparent;
}
.all{
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 70vh;
}
.user{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.option{
    width: 38.5vw;
    background-color: white;
}
    </style>
<body>
<div class="col-sm-12 col-xl-6"><br><br><br>
<?php 

$id = $_GET["id"];

include "config.php";
$query= "SELECT * FROM `user` WHERE `u_id` = '{$id}'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){

?>
    <div class="all">
                                <div class="bg-light rounded h-100 p-4">

                                <h6 class="mb-4">Add User</h6>
                                <?php
                                while($row = mysqli_fetch_assoc($result)){

                                
                                ?>
                                <form method="POST">
                                        <input type="hidden" name="id" class="form-control" id="inputEmail3" value="<?php echo $row["u_id"] ?>">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="inputEmail3" value="<?php echo $row["name"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="user" class="form-control" id="inputEmail3" value="<?php echo $row["username"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="inputPassword3" value="<?php echo $row["password"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone" class="form-control" id="inputPassword3" value="<?php echo $row["phone"] ?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="inputEmail3" value="<?php echo $row["email"] ?>">
                                    </div>
                                </div>
                                <div class="form-group user">
                        <label>User Role</label>
                        <select class="form-control option" name="role" value="<?php echo $row["role"] ?>">
                            <option value="0">Normal User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                                <button type="submit" name="submit" class="btn btn-primary">Add-User</button>
                            <?php  } ?>
                            </form>
                            <?php } ?>
                        </div>
                        <?php
                        if(isset($_POST["submit"])){
                            $id = $_POST["id"];
                            $name = $_POST["name"];
                            $user = $_POST["user"];
                            $password = $_POST["password"];
                            $phone = $_POST["phone"];
                            $email = $_POST["email"];
                            $role = $_POST["role"];

                            include "config.php";
                            $query = "UPDATE `user` SET `name`='{$name}',`username`='{$user}',`password`='{$password}',`phone`='{$phone}',`email`='{$email}',`role`='{$role}' WHERE `u_id` = '{$id}'";
                            mysqli_query($conn,$query);
                            
                        }
                        // header("location:http://localhost/e_project/e-project/admin!/index.php");
                        ?>
                        </div>
                    </div>
</body>
</html>