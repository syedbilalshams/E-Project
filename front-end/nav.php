<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
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
   .dropdown {
      position: relative;
      display: inline-block;
   }

   .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      color: black;
      width: 5vw;
      height: 5vw ;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      padding: 0px 5px;
      z-index: 1;
   }

   .dropdown:hover .dropdown-content {
      display: block;
      margin-left: -20px;
   }
</style>

<body>

   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- top -->
      <!-- header -->
      <header class="header-area">
         <div class="left">
            <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
         </div>
         <div class="right">
            <div class="dropdown">
               <span><?php echo $_SESSION["name"]; ?></span>
               <div class="dropdown-content">
                  <a href="logout.php">Logout</a>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row d_flex">
               <div class="col-sm-3 logo_sm">
                  <div class="logo">
                     <a href="index.html"></a>
                  </div>
               </div>
               <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                  <div class="navbar-area">
                     <nav class="site-navbar">
                        <ul>
                           <li><a class="active" href="index.html">Home</a></li>
                           <li><a href="about.php">About</a></li>
                           <li><a href="action.php">take action</a></li>
                           <li><a href="index.php" class="logo_midle">covido</a></li>
                           <li><a href="news.php">news</a></li>
                           <li><a href="doctores.php">doctores</a></li>

                           <li><a href="contact.html">Contact </a></li>
                        </ul>
                        <button class="nav-toggler">
                           <span></span>
                        </button>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </body>

</html>