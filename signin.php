<?php
//include('C:\xampp\htdocs\rdprojectd\dbconnect.php');

function contest(){
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $user = $_POST['email'];
        $pass = $_POST['password'];
        try {

            $db = new mysqli('localhost', 'root', '', 'annudorms');
            if ($db->connect_error) {
                echo "error connection";
            }

            $query = "SELECT * FROM agent";
            $res = $db->query($query);
            $flag = 0;
            for ($i = 0; $i < $res->num_rows; $i++) {
                $row = $res->fetch_object();
                if ($row->Name == $user && $row->password == $pass) {
                    header("location: property-list.php");
                    $flag = 1;
                }

            }
            if ($flag == 0) {
                echo "<h3 style='color:#bc1939'>Username or password is incorrect</h3>";
            }
            $db->close();
        } catch (Exception $exception) {

        }
    }

}



//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $database);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//// SQL query to retrieve student names
//$sql = "SELECT Name FROM Student";
//
//// Execute the query
//$result = $conn->query($sql);
//
//// Check if any records found
//if ($result->num_rows > 0) {
//    // Output data of each row
//    while ($row = $result->fetch_assoc()) {
//        echo "      " . $row["Name"] . "<br>";
//    }
//} else {
//    echo "No students found.";
//}
//
//// Close the database connection
//$conn->close();
//





?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>Slide Navbar</title>

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
        background: -webkit-linear-gradient(left, #19A7CE, #0A4D68);
        margin-top: 3%;
        padding: 3%;
    }
    .register-left{
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }
    .register-left input{
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        width: 60%;
        background: #0A4D68;
        font-weight: bold;
        color: #fff;
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
        background: #19A7CE;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }
    .btnSignIn{
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #19A7CE;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }
    .register .nav-tabs{
        margin-top: 3%;
        border: none;
        background: #19A7CE;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }
    .register .nav-tabs .nav-link{
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }
    .register .nav-tabs .nav-link:hover{
        border: none;
    }
    .register .nav-tabs .nav-link.active{
        width: 100px;
        color:#0A4D68;
        border: 2px solid #3E4491;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }
    .register-heading{
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #0A4D68;
    }
</style>

<body>
<div class="  modal-fullscreen  ">
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
                            <a href="master-dorms.php" class="dropdown-item">Master Dorms</a>
                            <a href="twin-dorms.php" class="dropdown-item">Twin Dorms</a>
                            <a href="double-dorms.php" class="dropdown-item">Double Dorms</a>
                        </div>
                    </div>

                    <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>

                </div>
                <a href="register.php" class="btn btn-primary px-3 d-none d-lg-flex">Sign Up</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="  modal-fullscreen-xxl register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome</h3>
                <p>Welcome to ANNU DORMS! We're excited to have you join our community of students, young professionals, and property owners. Please fill out the form below to create your account and start exploring our platform:</p>
                <form action="register.php" method="post">
                    <!-- form fields go here -->
                    <input type="submit" name="signup" value="Sign Up" /><br/>
                </form>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="agent-tab" data-toggle="tab" href="#agent" role="tab" aria-controls="agent" aria-selected="true">Agent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="false">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="owner-tab" data-toggle="tab" href="#owner" role="tab" aria-controls="owner" aria-selected="false">Admin</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="agent" role="tabpanel" aria-labelledby="agent-tab">
                        <h3 class="register-heading">Agent Form</h3>
                        <div class="row register-form">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email *" value="" />
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <input type="button" class="btnSignIn"  value="Sign In" onclick="cotest()"/>
                                <p>If you already have an account, sign in else sign up </p>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade show" id="student" role="tabpanel" aria-labelledby="student-tab">
                        <h3 class="register-heading">Student  Form</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <form action="dorm-main.php" method ="post ">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  name="email" placeholder="Email *" value="txtUserLogin" />
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control"  name="password" placeholder="Password *" value="" />
                                    </div>


                                    <input type="button" class="btnSignIn" value="Sign In" onclick="contest()"/>
                                    <p>If you already have an account, sign in else sign up </p>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="tab-pane fade show" id="owner" role="tabpanel" aria-labelledby="owner-tab">
                        <h3 class="register-heading">Property Owner</h3>
                        <div class="row register-form">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" />
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="txtUserPass"             placeholder="Password *" value="" />
                                </div>





                                <input type="button" class="btnSignIn" value="Sign In" onclick="signin.php"/>
                                <p>If you already have an account, sign in else sign up </p>
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
