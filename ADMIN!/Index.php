
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

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

</style>

<body>
    <!-- Sidebar Start -->
    <?php
    include "nav.php";
    include "config.php";
    $query = "SELECT * FROM `user`";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
    ?>

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12  col-xl-8">
                <?php 
                if($_SESSION['role'] == 1){
                    ?>
                    <a type="button" href="add-user.php" class="btn btn-primary m-2">Add-User</a>  
                <?php } ?>
                    <div class="bg-light all rounded h-100 p-4">
                        <h6 class="mb-4">Users</h6>
                        <table class="table">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <?php 
                                    if($_SESSION['role'] == 1){
                                        ?>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {


                            ?>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $row["u_id"]; ?></th>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["username"]; ?></td>
                                        <td><?php echo $row["phone"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>

                                        <td><?php
                                            if ($row["role"] == 1) {
                                                echo "Admin";
                                            } else {
                                                echo "Admin";
                                            }
                                            ?></td>
                                              <?php 
                                               if($_SESSION['role'] == 1){
                                               ?>
                                        <td><a href="update_user.php?id=<?php echo $row["u_id"]; ?>">Update</a></td>
                                        <td><a href="delete_user.php?id=<?php echo $row["u_id"]; ?>">Delete</a></td>
                                        <?php } ?>
                                    </tr>
                                </tbody> <?php }
                                    } ?>
                        </table>
                    </div>
                </div> <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="lib/chart/chart.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/waypoints/waypoints.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/tempusdominus/js/moment.min.js"></script>
                <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
                <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>
</body>

</html>