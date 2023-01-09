<?php
    session_start();
    $is_user = '';

    if(isset($_SESSION['isUserName']))
    {
        $is_user = $_SESSION['isUserName'];
    }


$host_name = 'www.google.com';
$port_no = '80';

$st = (bool)@fsockopen($host_name, $port_no, $err_no, $err_str, 10);
if ($st) {
    //echo 'You are connected to internet.';
} else {
?>
	<h1 style="text-align:center; margin-top:200px;"><?php echo 'Sorry! You are offline. Please Connect Internet....	'; ?></h1>
<?php
   // echo 'Sorry! You are offline. Please Connect Internet....	';
exit;
}

?>
<link rel="stylesheet" href="./css/header.css">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<div class="header">
                <div class="logo">
                    <a href="index.php"><img src="images/logo1.gif" height="70px" width="100px" class="logo_image" ></a>
                    <!-- <h1 class="title">Astrology</h1> -->
                </div>
                <div class="page_part">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="contact.php">Contact</a>
                </div>
                <div class="language">
                    <?php
                        if($is_user == '')
                        {
                            ?>
                            <div><a class="login link_btn" href="login.php"><i class="ri-logout-circle-r-line"></i></a></div>
                            <?php
                        }
                        else 
                        {
                            ?>
                            <div><a class="logout link_btn" href="logout.php"><i class="ri-logout-circle-fill"></i></a></div>
                            <div><a class="account link_btn" href="account.php"><i class="ri-account-pin-circle-fill"></i></a></div>
                            <?php

                        }
                    ?>
                    
                    <!-- <div><a class="logout">Logout</a></div> -->
                    <!-- <div><a class="register link_btn" href="register.php">Register</a></div> -->
                    
                </div>
            </div>