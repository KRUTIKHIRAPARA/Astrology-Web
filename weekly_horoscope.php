<?php
    include 'simple_html_dom.php';

    $other_html = file_get_html("https://www.birthastro.com/horoscopes/weekly-horoscope/aries");
    $today_horoscope_date = $other_html->find("table.table tr td",0);
    
?>
<html>
    <head>
        <title>Weekly Horoscope</title>
        <link rel="stylesheet" href="css/daily_horoscope.css">
    </head>
    <body>
        <?php
            $nowdate = date("d-M-Y");
        ?>
        
        <div class="main">
            <?php
                include_once 'includes/header.php';
            ?>
            <div class="main_content">
                <?php
                    include_once 'includes/inner_header.php';
                ?>
                <div class="inner_content">

                    <div class="daily_content_part">
                        <p class="daily_title">
                        Weekly Horoscope
                        </p>
                        <p class="daily_contents">
                        ( These are just the general predictions for the 12 signs according to Western Astrology. However if you would like to ask personally about your personalised horoscope, than you can go in the Astrology Services section and select the service you wish to take. I will answer your questions, predict your future and also will suggest you remedies / solutions for all the problems that you are facing in life.)
                        </p>
                    </div>

                    <div class="personal_horoscope">
                        <div class="personal_details">Show Your <big><b>Weakly</b></big> horoscope, Please Enter Your Name</div>
                        <form action="weekly_persnol_details.php" method="POST" autocomplete="off">
                            <div class="inputbox">
                                <input type="text" name="personalName" id="personalName" placeholder="Enter Your Name" minlength="3" maxlength="12" required ><br>
                                <input type="submit" name="btn" id="btn" value="Show">
                            </div>
                        </form>
                    </div>

                    <div class="all_horoscope">
                        <?php $today_aries = 'aries'; ?>
                        <a href="weekly_details_horoscope.php?horoscope=aries">
                            <div class="single_horoscope">
                                <div class="logo_horoscope">
                                    <img src="images/single_horoscope/1.png" class="single_logo">
                                </div>
                                <div class="title_horoscope">Aries</div>
                                <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                            </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=taurus">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/2.png" class="single_logo">
                            </div>
                            <div class="title_horoscope">Taurus</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=gemini">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/3.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Gemini</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=cancer">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/4.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Cancer</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=leo">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/5.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Leo</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=virgo">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/6.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Virgo</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=libra">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/7.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Libra</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=scorpio">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/8.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Scorpio</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=sagittarius">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/9.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Sagittarius</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=capricorn">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/10.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Capricorn</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=aquarius">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/11.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Aquarius</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>

                        <a href="weekly_details_horoscope.php?horoscope=pisces">
                        <div class="single_horoscope">
                            <div class="logo_horoscope">
                                <img src="images/single_horoscope/12.webp" class="single_logo">
                            </div>
                            <div class="title_horoscope">Pisces</div>
                            <div class="date_horoscope"><?php echo $today_horoscope_date ?></div>
                        </div>
                        </a>
                    
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>