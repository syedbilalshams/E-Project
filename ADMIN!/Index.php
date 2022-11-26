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
<body>
     <!-- Sidebar Start -->
     <?php include "nav.php"; ?>
            <!-- Sidebar End -->
            
            
            <!-- Content Start -->
            <div class="content">
              

            <!-- Navbar End -->
            <br>
            <div class="bt">
                <?php
                include "config.php";
                $query = "SELECT * FROM `user`";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {

                ?>

                    <?php
                    
                    if ($_SESSION['role'] == 1) {
                    ?>
                        <a href="add-user.php" type="button" class="btn btn-primary m-2 ">Add-User</a>

                    <?php } ?>

            </div>
            <div class="col-12">

                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Users</h6>


                    <div class="table-responsive">
                        <table class="table">

                            <thead>
                                <tr>

                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {


                            ?>


                                <tbody>
                                    <tr>
                                        <td><?php echo $rows["u_id"]; ?></td>
                                        <th scope="row"><?php echo $rows["name"]; ?></th>
                                        <td><?php echo $rows["username"]; ?></td>
                                        <td><?php echo $rows["phone"]; ?></td>
                                        <td><?php echo $rows["email"]; ?></td>
                                        <td><?php if ($rows["role"] == 1) {
                                                echo "Admin";
                                            } else {
                                                echo "User";
                                            }
                                            ?></td>
                                        <td><a class="aa" href="update_user.php?id=<?php echo $rows["u_id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td><a class="aa" href="delete_user.php?id=<?php echo $rows["u_id"]; ?>"><i class="fa-solid fa-xmark"></i></a></td>
                                    </tr>

                                <?php  } ?>
                                </tbody>
                        </table>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

            
            <!-- Footer Start -->
                <!--  -->
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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