<?php
    session_start();
    require_once 'includes/db.php';

    if(isset($_POST['login_btn']))
    {
        $user_name = $_POST['userName'];
        $user_password = $_POST['password'];

        $login_check_query = "SELECT * FROM users WHERE user_name='$user_name' && user_password='$user_password'";
        $login_check_run = mysqli_query($con,$login_check_query);
        $login_check_row = mysqli_num_rows($login_check_run);

        if($login_check_row == 1)
        {
            $_SESSION['isUserName'] = $user_name;
			
            header('location:index.php');
        }
        else
        {
            echo '<script>alert("Please Enter Valid User & Password")</script>';
        }
    }
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
    <div class="wrapper">
        <div class="logo">
            <img src="images/logo1.gif" alt="Astrology">
        </div>
        <div class="text-center mt-4 name">
            <p class="title">Astrology</p>
        </div>
        <form class="p-3 mt-3" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="login_part">
                <!-- <input type="submit" class="btn mt-3 loginbtn" value="Login" /> -->
                <button type="submit" class="btn mt-3 loginbtn" name="login_btn" id="login_btn">Login</button>
            <div>
        </form>
        <div class="text-center fs-6">
            <br>
            <p class="anthor_btn">
                <a href="register.php">Register</a>
            </p>
        </div>
    </div>
    </body>
</html>