
<html>
    <head>
        <title>Astrology</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <div class="main">
            <?php
                include_once 'includes/header.php';
            ?>
            <div class="main_content">
                <?php
                    // include_once 'includes/inner_header.php';
                ?>
                <div class="inner_content">

                    <div class="personal_horoscope">
                        <div class="personal_details">Show Your <big><b>Today</b></big> horoscope, Please Enter Your Name</div>
                        <form action="persnol_details.php" method="POST" autocomplete="off">
                            <div class="inputbox">
                                <input type="text" name="personalName" id="personalName" placeholder="Enter Your Name" minlength="3" maxlength="12" required ><br>
                                <input type="submit" name="btn" id="btn" value="Show">
                            </div>
                        </form>
                    </div>

                    <div class="horoscope">
                        <div class="inner_horoscope">
                            <div class="horoscope_title">
                                <p>DAILY</p>
                            </div>
                            <div class="horoscope_img">
                                <img src="images/daily.png">
                            </div>
                            <div class="horoscope_visit">
                                <a href="daily_horoscope.php">Visit</a>
                            </div>
                        </div>

                        <div class="inner_horoscope">
                            <div class="horoscope_title">
                                <p>WEEKLY</p>
                            </div>
                            <div class="horoscope_img">
                                <img src="images/week.svg">
                            </div>
                            <div class="horoscope_visit">
                                <a href="weekly_horoscope.php">Visit</a>
                            </div>
                        </div>

                        <div class="inner_horoscope">
                            <div class="horoscope_title">
                                <p>MONTHLY</p>
                            </div>
                            <div class="horoscope_img">
                                <img src="images/month.svg">
                            </div>
                            <div class="horoscope_visit">
                                <a href="monthly_horoscope.php">Visit</a>
                            </div>
                        </div>

                        <div class="inner_horoscope">
                            <div class="horoscope_title">
                                <p>YEARLY</p>
                            </div>
                            <div class="horoscope_img">
                                <img src="images/year.svg">
                            </div>
                            <div class="horoscope_visit">
                                <a href="yearly_horoscope.php">Visit</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>

        <!-- <script src="js/main.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
           
            $(document).ready(function(){
                $('#personalName').keypress(function (e) {    
                var charCode = (e.which) ? e.which : event.keyCode    
                if (String.fromCharCode(charCode).match(/[^0-9]/g))  
                {  
                    return true;  
                    }
                    else 
                    {
                    return false;
                    }

                });
            });
        </script>
    </body>
</html>