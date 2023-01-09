<?php
    include 'simple_html_dom.php';


    $today_horoscope =  $_GET['horoscope'];

    $html = file_get_html("https://astrotalk.com/horoscope/weekly-horoscope/".$today_horoscope);
    $other_html = file_get_html("https://www.birthastro.com/horoscopes/weekly-horoscope/".$today_horoscope);

    $today_horoscope_ruler_planet = $other_html->find("table.table tr td",2);
    $today_horoscope_basic_color = $other_html->find("table.table tr td",3);
    $today_horoscope_mode = $other_html->find("table.table tr td",4);
    $today_horoscope_lucky_metal = $other_html->find("table.table tr td",5);
    $today_horoscope_compatibility = $other_html->find("table.table tr td",6);
    $today_horoscope_house = $other_html->find("table.table tr td",7);
    $today_horoscope_lucky_number = $other_html->find("table.table tr td",8);
    $today_horoscope_lucky_gem = $other_html->find("table.table tr td",11);
    $today_horoscope_date = $other_html->find("table.table tr td",0);
    $today_horoscope_weekly_date = $other_html->find("div strong",0);
    
    
    // $today_horoscope_date = $html->find("h6.birthRange",0);
    $today_horoscope_personal = $html->find("div.parah_aries_horocope p",0);
    $today_horoscope_title_one = $html->find("div.parah_aries_horocope h2",0);
    $today_horoscope_title_two = $html->find("div.parah_aries_horocope h2",1);
    $today_horoscope_title_three = $html->find("div.parah_aries_horocope h2",2);
    $today_horoscope_title_four = $html->find("div.parah_aries_horocope h2",3);
    $today_horoscope_title_five = $html->find("div.parah_aries_horocope h2",4);
    $today_horoscope_travel = $html->find("div.parah_aries_horocope p",1);
    $today_horoscope_money = $html->find("div.parah_aries_horocope p",2);
    $today_horoscope_career = $html->find("div.parah_aries_horocope p",3);
    $today_horoscope_health = $html->find("div.parah_aries_horocope p",4);
    $today_horoscope_emotions = $html->find("div.parah_aries_horocope p",5);
    $today_title = $html->find("div.left_side_text_chinese h1",0);

    $today_img = null;
    if($today_horoscope == 'aries')
    {
        $today_img = '1.avif';
    }
    else if($today_horoscope == 'taurus')
    {
        $today_img = '2.avif';
    }
    else if($today_horoscope == 'gemini')
    {
        $today_img = '3.avif';
    }
    else if($today_horoscope == 'cancer')
    {
        $today_img = '4.avif';
    }
    else if($today_horoscope == 'leo')
    {
        $today_img = '5.avif';
    }
    else if($today_horoscope == 'virgo')
    {
        $today_img = '6.avif';
    }
    else if($today_horoscope == 'libra')
    {
        $today_img = '7.avif';
    }
    else if($today_horoscope == 'scorpio')
    {
        $today_img = '8.avif';
    }
    else if($today_horoscope == 'sagittarius')
    {
        $today_img = '9.avif';
    }
    else if($today_horoscope == 'capricorn')
    {
        $today_img = '10.avif';
    }
    else if($today_horoscope == 'aquarius')
    {
        $today_img = '11.avif';
    }
    else if($today_horoscope == 'pisces')
    {
        $today_img = '12.avif';
    }
?>

<html>
    <head>
        <title>Weekly Horoscope</title>
        <link rel="stylesheet" href="css/weekly_details_horoscope.css">
    </head>
    <body>
        
        <div class="main">
            <?php
                include_once 'includes/header.php';
            ?>
            <div class="main_content">
                <?php
                    include_once 'includes/inner_header.php';

                    $nowdate = date('d-M-Y');
                ?>
                <div class="inner_content" >
                    <img src="images/weekly_horoscope.jpg" class="daily_single_page_img">
                    <div class="single_conetnt_part">

                        <div class="single_content_header">
                            <h1>Weekly Horoscope – Astrology Weekly</h1>
                        </div>

                        <div class="single_content_bio">
                            <div class="bio_logo">
                                <img src="images/single_page_horoscope/<?php echo $today_img ?>" class="bio_logo_img">
                            </div>
                            <div class="bio_title"><p><?php echo $today_title ?></p></div>
                            <div class="bio_data"><p><?php echo $today_horoscope_date; ?></p></div>
                        </div>

                        <div class="main_content_horosocpe">

                        <p class="content_head"><big><b>Ruler Planet :</b></big> <?php echo $today_horoscope_ruler_planet ?> <br>
                        </p>

                        <p class="content_head"><big><b>Basic Color :</b></big> <?php echo $today_horoscope_basic_color ?> <br>
                        </p>

                        <p class="content_head"><big><b>Mode & Element :</b></big> <?php echo $today_horoscope_mode ?><br>
                        </p>

                        <p class="content_head"><big><b>Lucky Metal :</b></big> <?php echo $today_horoscope_lucky_metal ?> <br>
                        </p>

                        <p class="content_head"><big><b>Best Compatibility :</b></big> <?php echo $today_horoscope_compatibility ?> <br>
                        </p>

                        <p class="content_head"><big><b>House :</b></big> <?php echo $today_horoscope_house ?> <br>
                        </p>

                        </p>
                            <p class="content_head"><big><b>Lucky Number :</b></big> <?php echo $today_horoscope_lucky_number ?> <br>
                        </p>

                        </p>
                            <p class="content_head"><big><b>Lucky Gem :</b></big> <?php echo $today_horoscope_lucky_gem ?> <br>
                        </p>

                            <p class="content_head">
                                <big><b>Details :</b></big><br>
                                <?php echo $today_horoscope_personal ?><br>
                                <h4><?php echo $today_horoscope_title_one; ?></h4>
                                <?php echo $today_horoscope_travel ?><br>
                                <h4><?php echo $today_horoscope_title_two; ?></h4>
                                <?php echo $today_horoscope_money ?><br>                                
                                <h4><?php echo $today_horoscope_title_three; ?></h4>
                                <?php echo $today_horoscope_career ?><br>
                                <h4><?php echo $today_horoscope_title_four; ?></h4>
                                <?php echo $today_horoscope_health ?><br>
                                <h4><?php echo $today_horoscope_title_five; ?></h4>
                                <?php echo $today_horoscope_emotions ?><br>
                            </p>

                          
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>