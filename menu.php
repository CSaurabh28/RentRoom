<?php
session_start();
pg_connect("host=localhost user=postgres password=postgres dbname=dbtyproject");?>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->




  <div class="click-closed"></div>
  <!--/ Form Search Star /-->

  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Rent<span class="color-b">Rooms</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
           <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
           <?php
                            if($_SESSION['email']==null){
            ?>
                                                          
                             <li class="nav-item"><a class="nav-link active" href="register.php">Sign Up</a></li>                        
                             <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
                      <?php
                            }
                             else{
                      ?>
                            <li class="nav-item"><a class="nav-link active" href="addproperty.php">Add Property </a></li>
                            <li class="nav-item"><a class="nav-link active" href="welcome.php">Properties</a></li>
                            <li class="nav-item"><a class="nav-link active" href="myproperty.php">My Property</li>
                              <a class="nav-link active" href="logout.php">Logout</a>
                            <li class="nav-item"><a class="nav-link active" href="sentenquiries.php">Sent</a></li>  
                            <li class="nav-item"><a class="nav-link active" href="profile.php">Profile</a></li>  
                      <?php
                        }
                       ?> 
          
         
        </ul>
      </div>
      
    </div>
  </nav>
  <br>
  <br><br><br><br >
                          
                          
                        
                           
                     