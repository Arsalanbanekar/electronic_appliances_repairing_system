<html>
    <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <!-- <style>
        .main {
            position: relative;
            width: 800px;
            background-color: #fff;
            border: 4px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: black;
            border-radius: 10px;
            padding: 30px 40px;
            margin: auto;
        }

        .main h1 {
            font-size: 36px;
            text-align: center;
        }

        .main .Input-box {
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }

        .Input-box input {
            height: 100%;
            width: 100%;
            border: none;
            outline: none;
            background: transparent;
            border: 2px solid black;
            border-radius: 40px;
            font-size: 16px;
            color: red;
            padding: 20px 40px 20px 20px;
        }

        .Input-box input::placeholder {
            color: black;
        }

        .main .register-link {
            font-size: 14px;
            text-align: center;
            margin: 20px 0 15px;
        }

        .register-link p a {
            color: #388e3c;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link p a:hover {
            text-decoration: underline;
        }

        .main .btn {
            width: 100%;
            height: 40px;
            background-color: #388e3c;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }
    </style> -->
    </head>
    <div class="main">
        <form action="#" method="POST">
           <h1>Register</h1>
     
        <div class="Input-box">
           <input type="text" name="user" required="required" placeholder="Name" autofocus required></input>
        </div>

     
         <div class="Input-box">
             <input type="text" name="email" required="required" placeholder="Email" ></input>
         </div> 
         
         <div class="Input-box">
            <input type="text" name="phone" required="required" placeholder="Phone" ></input>
        </div>

        <div class="Input-box">
            <input type="password" name="pass" required="required" placeholder="Password" ></input>
        </div>

        <div class="Input-box">
            <input type="password" name="cpass" required="required" placeholder="Password" ></input>
        </div>

     
         <div class="btn">
             <button type="submit" class="btn" title="Log In" name="login" value="Login">Sign Up</button>
         </div>
      </form>

      	 
	   <div class="register-link">
        <p>Have an account ? <a href="login.php">Login Here</a></p>
       
       </div>

</div>



</body>
</html>
<?php 
include("config/dbconnect.php");

if(isset($_POST['login'])){
    $username = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

    if($password == $cpassword ){
        // Prepare the SQL statement using placeholders
        $sql = "INSERT INTO `register`(`user`, `email`, `phone`, `password`, `admin`) VALUES (?, ?, ?, ?, 1)";

        // Prepare the SQL statement
        $stmt = mysqli_prepare($con, $sql);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $phone, $password);

        // Execute the statement
        $success = mysqli_stmt_execute($stmt);

        if($success) {
            echo "<script>alert('Registered successfully!')</script>";
            header("Refresh:1; URL=http://localhost/admin_panel/login.php");
        } else {
            echo "Error: " . mysqli_error($con);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Please Check Your Password. It's Incorrect";
    }
}
?>

