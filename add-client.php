<!DOCTYPE html>
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

    <link href='https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/css/bootstrap-switch.css' rel='stylesheet' type='text/css'>
    <link href='https://davidstutz.github.io/bootstrap-multiselect/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.8/js/bootstrap-switch.min.js' type='text/javascript'></script>
    <script src='https://davidstutz.github.io/bootstrap-multiselect/js/bootstrap-multiselect.js' type='text/javascript'></script>

    <script> $(document).ready(function () {

            $(".multiselect").multiselect();
            $(".datepicker").datepicker();
        });
    </script>


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

</div>

    <!--  Start Rigester Page  -->
    <div class='container'>
        <div class='panel panel-primary dialog-panel'>
            <div class='panel-heading'>
                <h5>Almaguin Campground - Reservation</h5>
            </div>
            <div class='panel-body'>
                <form class='form-horizontal' role='form'>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Accomodation</label>
                        <div class='col-md-2'>
                            <select class='form-control' id='id_accomodation'>
                                <option>RV</option>
                                <option>Tent</option>
                                <option>Cabin/Lodging</option>
                            </select>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
                        <div class='col-md-8'>
                            <div class='col-md-2'>
                                <div class='form-group internal'>
                                    <select class='form-control' id='id_title'>
                                        <option>Mr</option>
                                        <option>Ms</option>
                                        <option>Mrs</option>
                                        <option>Miss</option>
                                        <option>Dr</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-md-3 indent-small'>
                                <div class='form-group internal'>
                                    <input class='form-control' id='id_first_name' placeholder='First Name' type='text'>
                                </div>
                            </div>
                            <div class='col-md-3 indent-small'>
                                <div class='form-group internal'>
                                    <input class='form-control' id='id_last_name' placeholder='Last Name' type='text'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Guests</label>
                        <div class='col-md-8'>
                            <div class='col-md-2'>
                                <div class='form-group internal'>
                                    <input class='form-control col-md-8' id='id_adults' placeholder='18+ years' type='number'>
                                </div>
                            </div>
                            <div class='col-md-3 indent-small'>
                                <div class='form-group internal'>
                                    <input class='form-control' id='id_children' placeholder='2-17 years' type='number'>
                                </div>
                            </div>
                            <div class='col-md-3 indent-small'>
                                <div class='form-group internal'>
                                    <input class='form-control' id='id_children_free' placeholder='&lt; 2 years' type='number'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
                        <div class='col-md-6'>
                            <div class='form-group'>
                                <div class='col-md-11'>
                                    <input class='form-control' id='id_email' placeholder='E-mail' type='text'>
                                </div>
                            </div>
                            <div class='form-group internal'>
                                <div class='col-md-11'>
                                    <input class='form-control' id='id_phone' placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Checkin</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control datepicker' id='id_checkin'>
                                    <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                                </div>
                            </div>
                            <label class='control-label col-md-2' for='id_checkout'>Checkout</label>
                            <div class='col-md-3'>
                                <div class='form-group internal input-group'>
                                    <input class='form-control datepicker' id='id_checkout'>
                                    <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Equipment type</label>
                        <div class='col-md-8'>
                            <div class='col-md-3'>
                                <div class='form-group internal'>
                                    <select class='form-control' id='id_equipment'>
                                        <option>Travel trailer</option>
                                        <option>Fifth wheel</option>
                                        <option>RV/Motorhome</option>
                                        <option>Tent trailer</option>
                                        <option>Pickup camper</option>
                                        <option>Camper van</option>
                                    </select>
                                </div>
                            </div>
                            <div class='col-md-9'>
                                <div class='form-group internal'>
                                    <label class='control-label col-md-3' for='id_slide'>Slide-outs</label>
                                    <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_slide_switch'>
                                        <input id='id_slide' type='checkbox' value='chk_hydro'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Required Service</label>
                        <div class='col-md-8'>
                            <select class='multiselect' id='id_service' multiple='multiple'>
                                <option value='hydro'>Hydro</option>
                                <option value='water'>Water</option>
                                <option value='sewer'>Sewer</option>
                            </select>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_pets'>Pets</label>
                        <div class='col-md-8'>
                            <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_pets_switch'>
                                <input id='id_pets' type='checkbox' value='chk_hydro'>
                            </div>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Comments</label>
                        <div class='col-md-6'>
                            <textarea class='form-control' id='id_comments' placeholder='Additional comments' rows='3'></textarea>
                        </div>
                    </div>
                    <div class='form-group'>
                        <div class='col-md-offset-4 col-md-3'>
                            <button class='btn-lg btn-primary' type='submit'>Request Reservation</button>
                        </div>
                        <div class='col-md-3'>
                            <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  End Rigester Page  -->




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Nablus Almakhfyah</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+970599158596</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>diana.qwariq2002@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/home?lang=ar"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
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
                <div class="col-lg-3 col-md-6">

                    <div class="position-relative mx-auto" style="max-width: 400px;">


                        <form action="register.php" method="post">

                            <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" >
                                SignUp
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">AN-Najah Dorms</a>, All Right Reserved.


                        Designed By <a class="border-bottom" href="https://htmlcodex.com">Diana Qwariq & Rayhan Mahmoud</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
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