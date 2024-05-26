<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- <link rel="stylesheet" href="adminlogin.css"> -->
    <link rel="stylesheet" href="./assets/css/adminlogin.css">
    <title> Animated Login Page </title>
</head>
<body>

<div class="container" id="container">
    <div class="form-container Admin">
        <form action="#" method="POST" autocomplete="off">
            <h1> Hi!, Admin </h1>
            <span>use your Username And Password</span>
            <input type="text" placeholder="Username" name="user">
            <input type="password" placeholder="password" name="pass">
            <input type="submit" name="Admin" value="Login"></button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form action="#" method="POST" autocomplete="off">
            <h1> User </h1>
            <div class="social-icons">
                <a href="https://myaccount.google.com" target="_blank" class="social-icons"><i class="fab fa-google-plus-g"></i></a>
                <a href="https://facebook.com" target="_blank" class="social-icons"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com" target="_blank" class="social-icons"><i class="fab fa-linkedin"></i></a>
            </div>
            <span> or use your Username password </span>
            <input type="text" placeholder="Username" name="user">
            <input type="password" placeholder="Password" name="pass">
            <a href="registration.php"> Don't have an account ? Register</a>
            
            <input type="submit" name="User" value="Login"></button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back</h1>
                <p> Enter your personal details to use all of site features</p>
                <button class="hidden" id="login"> user </button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p> Enter your personal details to use all of site features</p>
                <button class="hidden" id="register"> Admin </button>
            </div>
        </div>
    </div>
</div>
    <script src="./assets/js/javascript.js"></script>
</body>
</html>
<?php
include("config/dbconnect.php");
session_start();

if(isset($_POST['User'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM `register` WHERE user='$username' AND password='$password' AND admin=1";
    $result = mysqli_query($con, $sql);

    if($result && mysqli_num_rows($result) == 1){
        $_SESSION['User'] = true;
        echo "<script>alert('User login successful!')</script>";
        header("Location: UserIndex.php");
    } else {
        echo "<script>alert('Invalid username or password for User!')</script>";
    }
}

if(isset($_POST['Admin'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM `register` WHERE user='$username' AND password='$password' AND admin=0";
    $result = mysqli_query($con, $sql);

    if($result && mysqli_num_rows($result) == 1){
        $_SESSION['Admin'] = true;
        echo "<script>alert('Admin login successful!')</script>";
        header("Location: index.php");
    } else {
        echo "<script>alert('Invalid email or password for Admin!')</script>";
    }
}
?>
