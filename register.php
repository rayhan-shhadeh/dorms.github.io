<!DOCTYPE html>
<html lang="">
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <title>An-Najah Dorms</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Header Start -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

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
<style>
    .register{
        background: -webkit-linear-gradient(left, #146C94, #19A7CE);
        margin-top: 3%;
        padding: 3%;
    }
    .register-left{
        text-align: center;
        color: #146C94;
        margin-top: 4%;
    }
    .register-left input{
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #19A7CE;
        font-weight: bold;
        color: #146C94;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }
    .register-right{
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }
    .register-left img{
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite  alternate;
        animation: mover 1s infinite  alternate;
    }
    @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-20px); }
    }
    .register-left p{
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }
    .register .register-form{
        padding: 10%;
        margin-top: 10%;
    }
    .btnRegister{
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #146C94;
        color: #d8dee0;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }
    .btnSignIn{
        float: right;
        margin-top: 60%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #19A7CE;
        color: #eaf2f5;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }
    .register .nav-tabs{
        margin-top: 3%;
        border: none;
        background: #AFD3E2;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }
    .register .nav-tabs .nav-link{
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #dfe3e5;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }
    .register .nav-tabs .nav-link:hover{
        border: none;
    }
    .register .nav-tabs .nav-link.active{
        width: 100px;
        color:#19A7CE;
        border: 2px solid #19A7CE;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }
    .register-heading{
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #146C94;
    }
</style>

<body>
<div class="modal-fullscreen  ">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent ">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4  ">
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
                            <a href="property-list.php" class="dropdown-item">All Dorms</a>
                            <a href="master-dorms.php.php" class="dropdown-item">Master Dorms</a>
                            <a href="property-type.php" class="dropdown-item">Twin Dorms</a>
                            <a href="all-dorms.php" class="dropdown-item">Double Dorms</a>
                        </div>
                    </div>

                    <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>

                </div>
                <a href="signin.php" class="btn btn-primary px-3 d-none d-lg-flex">Sign Up</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



    <body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="container register  modal-fullscreen">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3 style="color: whitesmoke">Welcome</h3>
                <p style="color: #e9e7e7">Welcome to ANNU DORMS! We're excited to have you join our community of students, young professionals, and property owners. Please fill out the form below to create your account and start exploring our platform:</p>
                <input type="submit" name="" value="Login"/><br/>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="agent-tab" data-toggle="tab" href="#agent" role="tab" aria-controls="agent" aria-selected="true">Agent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="false">Student</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="agent" role="tabpanel" aria-labelledby="agent-tab">
                        <h3 class="register-heading">Agent Registration Form</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Birth Date *" value="" min="1930-01-01" max="2005-12-31" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Choose the province in which you live *</option>
                                        <option>Ramallah</option>
                                        <option>Hebron</option>
                                        <option>Gaza</option>
                                        <option>Jenin</option>
                                        <option>Jericho</option>
                                        <option>Tulkarm</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your major*" value="" />
                                </div>

                                <input type="submit" class="btnRegister"  value="Register"/>
                                <input type="button" class="btnSignIn" value="Sign In" onclick="location.href='signin.php';"/>
                                <p>If you already have an account, sign in</p>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade show" id="student" role="tabpanel" aria-labelledby="student-tab">
                        <h3 class="register-heading">Student Registration Form</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Birth Date *" value="" min="1930-01-01" max="2005-12-31" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Choose the province in which you live *</option>
                                        <option>Ramallah</option>
                                        <option>Hebron</option>
                                        <option>Gaza</option>
                                        <option>Jenin</option>
                                        <option>Jericho</option>
                                        <option>Tulkarm</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your College *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your phone number *" value="" />
                                </div>
                                <input type="submit" class="btnRegister"  value="Register"/>
                                <input type="button" class="btnSignIn" value="Sign In" onclick="location.href='signin.html';"/>
                                <p>If you already have an account, sign in</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="owner" role="tabpanel" aria-labelledby="owner-tab">
                        <h3 class="register-heading">Property Owner Registration Form</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone number *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Choose the province in which you live *</option>
                                        <option>Ramallah</option>
                                        <option>Hebron</option>
                                        <option>Gaza</option>
                                        <option>Jenin</option>
                                        <option>Jericho</option>
                                        <option>Tullkarm</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Type of Properties" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Property Address" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Job" />
                                </div>
                                <input type="submit" class="btnRegister"  value="Register"/>
                                <input type="button" class="btnSignIn" value="Sign In" onclick="location.href='signin.php';"/>
                                <p>If you already have an account, sign in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#myTab a').on('click', function (e) {
                e.preventDefault();
                if ($(this).attr('id') === 'student-tab') {
                    $('#agent-tab').removeClass('active');
                    $('#owner-tab').removeClass('active');
                    $('#agent').removeClass('show active');
                    $('#owner').removeClass('show active');
                    $(this).addClass('active');
                    $('#student').addClass('show active');
                } else if ($(this).attr('id') === 'owner-tab') {
                    $('#agent-tab').removeClass('active');
                    $('#student-tab').removeClass('active');
                    $('#agent').removeClass('show active');
                    $('#student').removeClass('show active');
                    $(this).addClass('active');
                    $('#owner').addClass('show active');
                } else {
                    $('#student-tab').removeClass('active');
                    $('#owner-tab').removeClass('active');
                    $('#student').removeClass('show active');
                    $('#owner').removeClass('show active');
                    $(this).addClass('active');
                    $('#agent').addClass('show active');
                }
            });
        });
    </script>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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