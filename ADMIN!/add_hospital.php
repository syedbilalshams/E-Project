<?php
ob_start();
?>
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
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: transparent;
    }

    .all {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 30vh;
        width: 60vh;
    }

    .user {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
</style>

<body>
    <div class="col-sm-12 col-xl-6"><br><br><br>
        <div class="all">
            <div class="bg-light rounded h-100 p-4">

                <h6 class="mb-4">Add User</h6>

                <form method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input type="text" name="city" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add-User</button>
                </form>
                <?php

                if (isset($_POST["submit"])) {
                    include "config.php";

                    $name = $_POST["name"];
                    $city = $_POST["city"];
                   



                    $query =  "INSERT INTO `hospital`( `name`,`city`) VALUES ('{$name}','{$city}')";

                    mysqli_query($conn, $query);

                    header("location:http://localhost/e_project/e-project/admin!/hospital.php");
                }

                ?>
            </div>
        </div>
    </div>
</body>

</html>