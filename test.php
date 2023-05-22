<?php
if(isset($_POST['numCols']) && isset($_POST['numRows']))
    {
        $uname = $_POST['numRows'];
        $upass = $_POST['numCols'];

        try {
            $db = new mysqli('localhost','root','','');
            $qryStr = "select * from student";
            $rs= $db->query($qryStr);
            for($i=0 ; $i<$rs->num_rows ; $i++)
            {
                    //fetch_array()-> i should enter the index   fetch_object same as assoc()
                $rows = $rs->fetch_object();
                if ($rows->studentN == $uname &&    sha1($upass)== $rows->studentPass  )
                {
                    header('about.php');
                }else{
                    echo "<h1> incorrect pass or name</h1>";
                }
            }
            $db->close();
        }catch(Exception $e){


    }

    }


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>An-Najah Dorms</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="img-fluid" src="img/icon-logo.gif" alt="Icon" style="width: 30px; height: 30px;">
                </div>
                <h1 class="m-0 text-primary">ANNU Droms</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dorms</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="property-list.php" class="dropdown-item">dorm List</a>
                            <a href="property-type.php" class="dropdown-item">dorm Type</a>
                            <a href="all-dorms.php" class="dropdown-item">dorm Agent</a>
                        </div>
                    </div>

                    <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>

                </div>
                <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Sign Up</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <div class="container">
        <form action="test.php" method="post">
            <table>
                <tr>
                    <td><label for="numRows">Username</label> </td>
                    <td><input type="text" id="numRows" name="numRows"></td>
                </tr>
                <tr>
                    <td><label for="numCols">Password</label> </td>
                    <td><input type="text" id="numCols" name="numCols"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Generate Pages"></td>
                </tr>
            </table>
        </form>




    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Nablus Al-Makhfyah</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+970599158596</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>ANNUdorms@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/qwariq"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/diana.qwariq"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link text-white-50" href="">About Us</a>
                    <a class="btn btn-link text-white-50" href="">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="">Our Services</a>
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Photo Gallery</h5>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="height:100px;">

                    <div  class="position-relative  "   style=" margin-right: 100px; >

                        <form action="register.php" method="post">

                    <button id="box" type="submit" class="animate__zoomOutUp btn btn-primary   btn-lg  position-absolute top-0 end-0 mt-9 " style="height:110px; " >
                        Sign In/ Up
                    </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 ">
                    &copy; <a class="border-bottom" href="#">ANNU Dorms</a>, All Right Reserved.


                    Designed By <a class="border-bottom" href="https://www.facebook.com/diana.qwariq">Diana Qwariq</a> & <a class="border-bottom" href="https://www.facebook.com/profile.php?id=100011195175081"> Rayhan Mahmoud</a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>