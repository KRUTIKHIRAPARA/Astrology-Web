<?php
    include 'simple_html_dom.php';
    require_once 'includes/db.php';

    $today_horoscope =  $_GET['horoscope'];

    // $html = file_get_html("https://astrotalk.com/horoscope/monthly-horoscope/".$today_horoscope);
    $html = file_get_html("https://astrotalk.com/horoscope/todays-horoscope/".$today_horoscope);
    $other_html = file_get_html("https://www.birthastro.com/horoscopes/daily-horoscope/".$today_horoscope);

    $today_horoscope_ruler_planet = $other_html->find("table.table tr td",2);
    $today_horoscope_basic_color = $other_html->find("table.table tr td",3);
    $today_horoscope_mode = $other_html->find("table.table tr td",4);
    $today_horoscope_lucky_metal = $other_html->find("table.table tr td",5);
    $today_horoscope_compatibility = $other_html->find("table.table tr td",6);
    $today_horoscope_house = $other_html->find("table.table tr td",7);
    $today_horoscope_lucky_number = $other_html->find("table.table tr td",8);
    $today_horoscope_lucky_gem = $other_html->find("table.table tr td",11);
    
    
    // $today_horoscope_date = $html->find("h6.birthRange",0);
    $today_horoscope_personal = $html->find("div.parah_aries_horocope p",0);
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

<p id="horoscope_planet" style="display:none;"><?php echo $today_horoscope_ruler_planet ?></p>
<p id="horoscope_color" style="display:none;"><?php echo $today_horoscope_basic_color ?></p>
<p id="horoscope_mode" style="display:none;"><?php echo $today_horoscope_mode ?></p>
<p id="horoscope_metal" style="display:none;"><?php echo $today_horoscope_lucky_metal ?></p>
<p id="horoscope_compatibility" style="display:none;"><?php echo $today_horoscope_compatibility ?></p>
<p id="horoscope_house" style="display:none;"><?php echo $today_horoscope_house ?></p>
<p id="horoscope_number" style="display:none;"><?php echo $today_horoscope_lucky_number ?></p>
<p id="horoscope_gem" style="display:none;"><?php echo $today_horoscope_lucky_gem ?></p>

<pre id="horoscope_personal" style="display:none;"><?php echo $today_horoscope_personal ?></pre>
<pre id="horoscope_travel" style="display:none;"><?php echo $today_horoscope_travel ?></pre>
<pre id="horoscope_money" style="display:none;"><?php echo $today_horoscope_money ?></pre>
<pre id="horoscope_career" style="display:none;"><?php echo $today_horoscope_career ?></pre>
<pre id="horoscope_health" style="display:none;"><?php echo $today_horoscope_health ?></pre>
<pre id="horoscope_emotions" style="display:none;"><?php echo $today_horoscope_emotions ?></pre>

<html>
    <head>
        <title>Today Horoscope</title>
        <link rel="stylesheet" href="css/today_horoscope.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="main">
            <?php
                include_once 'includes/header.php';
            ?>

            <?php
                
                if(isset($_SESSION['isUserName']))
                {
                    $is_user = $_SESSION['isUserName'];

                    $get_user_query = "SELECT id FROM users WHERE user_name='$is_user'";
                    $get_user_run = mysqli_query($con,$get_user_query);
                    $get_user_data = mysqli_fetch_array($get_user_run);

                    $dd = implode (" ",$get_user_data); 
                    $rest = substr("$dd", 1);   
                }
            ?>

            <input type="hidden" value="<?php echo $rest ?>" id="user_id">
            <div class="main_content">
                <?php
                    include_once 'includes/inner_header.php';

                    $nowdate = date('d-M-Y');
                ?>
                <div class="inner_content" >
                    <img src="images/daily_single_page.webp" class="daily_single_page_img">
                    <div class="single_conetnt_part">

                        <div class="single_content_header">
                            <h1>Daily Horoscope – Astrology Today</h1>
                        </div>

                        <?php
                            if(isset($_SESSION['isUserName']))
                            {
                                ?>
                                    <button type="button" id="save_btn"  style="margin-left:1115px; font-size:40px;"><i class="ri-heart-add-line"></i></button>
                                <?php
                            }
                        ?>
                        
                        <div class="single_content_bio">
                            <div class="bio_logo">
                                <img src="images/single_page_horoscope/<?php echo $today_img ?>" class="bio_logo_img">
                            </div>
                            <div class="bio_title"><p><?php echo $today_title ?></p></div>
                            <div class="bio_data"><p><?php echo $nowdate; ?></p></div>
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
                                <?php echo $today_horoscope_travel ?><br>
                                <?php echo $today_horoscope_money ?><br>
                                <?php echo $today_horoscope_career ?><br>
                                <?php echo $today_horoscope_health ?><br>
                                <?php echo $today_horoscope_emotions ?><br>
                            </p>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#save_btn').click(function(){
                    var horoscope_name = $('.bio_title').text();
                    var horoscope_date = $('.bio_data').text();
                    var horoscope_planet = $('#horoscope_planet').text();
                    var horoscope_color = $('#horoscope_color').text();
                    var horoscope_mode = $('#horoscope_mode').text();
                    var horoscope_metal = $('#horoscope_metal').text();
                    var horoscope_compatibility = $('#horoscope_compatibility').text();
                    var horoscope_house = $('#horoscope_house').text();
                    var horoscope_number = $('#horoscope_number').text();
                    var horoscope_gem = $('#horoscope_gem').text();

                    var horoscope_personal = $('#horoscope_personal').text();
                    var horoscope_travel = $('#horoscope_travel').text();
                    var horoscope_money = $('#horoscope_money').text();
                    var horoscope_career = $('#horoscope_career').text();
                    var horoscope_health = $('#horoscope_health').text();
                    var horoscope_emotions = $('#horoscope_emotions').text();

                    var user_id = $('#user_id').val();
					
                    $.ajax({
                        url:'process.php',
                        type:'post',
                        data:'type=insert_data&horoscope_name='+horoscope_name+'&horoscope_date='+horoscope_date+'&horoscope_planet='+horoscope_planet+'&horoscope_color='+horoscope_color+'&horoscope_mode='+horoscope_mode+'&horoscope_metal='+horoscope_metal+'&horoscope_compatibility='+horoscope_compatibility+'&horoscope_house='+horoscope_house+'&horoscope_number='+horoscope_number+'&horoscope_gem='+horoscope_gem+'&horoscope_personal='+horoscope_personal+'&horoscope_travel='+horoscope_travel+'&horoscope_money='+horoscope_money+'&horoscope_career='+horoscope_career+'&horoscope_health='+horoscope_health+'&horoscope_emotions='+horoscope_emotions+'&user_id='+user_id,
                        success:function(save_data){
                            if(save_data == '1')
                            {
                                alert('Data Successfully Saved...');
                            }
                            else if(save_data == '0')
                            {
                                alert('Some Error!!!');
                            }
                        }   
                    });
                });
            });
        </script>
    </body>
</html>