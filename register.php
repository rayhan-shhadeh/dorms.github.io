<?php
$conn=mysqli_connect('localhost','root','');
if(isset($_POST['login_Btn'])){
    $username=$_POST['Email'];
    $password=$_POST['Password'];
    $stmt = mysqli_prepare($conn, "SELECT * FROM dorms.logindetails WHERE Email=?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) > 0) {
        $row=mysqli_fetch_assoc($result);
        $resultPassword=$row['Password'];
        if( $password == $resultPassword ){
            // Redirect to register.php
            header('Location: register.php');
            exit(); // Stop executing the current script
        }
    }
    // Show an error message if the email and password don't match
    echo "Invalid email or password.";
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<form method="post" action="register.php">
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="txt" placeholder="User name" required="">
                <input type="Email" name="Email" placeholder="Email" required="">
                <input type="Password" name="Password" placeholder="Password" required="">
                <button>Sign up</button>
            </form>
        </div>

        <div class="login">
            <label for="chk" aria-hidden="true">Login</label>
            <form action="index.php" method="post">
                <input type="Email" name="Email" placeholder="Email" required="">
                <input type="password" name="Password" placeholder="Password" required="">
                <button name="login_Btn">Login</button>
            </form>
        </div>
    </div>
</form>
</body>
</html>