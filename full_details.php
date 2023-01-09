<?php
    require_once 'includes/db.php';

    $today_horoscope =  base64_decode($_GET['horoscope']);
    $my_id = base64_decode($_GET['id']);

    $today_img = null;
    if($today_horoscope == 'Aries')
    {
        $today_img = '1.avif';
    }
    else if($today_horoscope == 'Taurus')
    {
        $today_img = '2.avif';
    }
    else if($today_horoscope == 'Gemini')
    {
        $today_img = '3.avif';
    }
    else if($today_horoscope == 'Cancer')
    {
        $today_img = '4.avif';
    }
    else if($today_horoscope == 'Leo')
    {
        $today_img = '5.avif';
    }
    else if($today_horoscope == 'Virgo')
    {
        $today_img = '6.avif';
    }
    else if($today_horoscope == 'Libra')
    {
        $today_img = '7.avif';
    }
    else if($today_horoscope == 'Scorpio')
    {
        $today_img = '8.avif';
    }
    else if($today_horoscope == 'Sagittarius')
    {
        $today_img = '9.avif';
    }
    else if($today_horoscope == 'Capricorn')
    {
        $today_img = '10.avif';
    }
    else if($today_horoscope == 'Aquarius')
    {
        $today_img = '11.avif';
    }
    else if($today_horoscope == 'Pisces')
    {
        $today_img = '12.avif';
    }

    $get_data_query = "SELECT * FROM user_data WHERE id='$my_id'";
    $get_data_run = mysqli_query($con, $get_data_query);
    $get_data = mysqli_fetch_array($get_data_run);

?>

<html>
    <head>
        <title>Your Horoscope</title>
        <link rel="stylesheet" href="css/full_details.css">
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
                        
                        <div class="single_content_bio">
                            <div class="bio_logo">
                                <img src="images/single_page_horoscope/<?php echo $today_img ?>" class="bio_logo_img">
                            </div>
                            <div class="bio_title"><p><?php echo str_replace('mamu','\'',$get_data['horoscope_name']);  ?></p></div>
                            <div class="bio_data"><p><?php echo $get_data['horoscope_date']; ?></p></div>
                        </div>

                        <div class="main_content_horosocpe">

                        <p class="content_head"><big><b>Ruler Planet :</b></big> <?php echo $get_data['horoscope_planet'] ?> <br>
                        </p>

                        <p class="content_head"><big><b>Basic Color :</b></big> <?php echo $get_data['horoscope_color'] ?> <br>
                        </p>

                        <p class="content_head"><big><b>Mode & Element :</b></big> <?php echo $get_data['horoscope_mode'] ?><br>
                        </p>

                        <p class="content_head"><big><b>Lucky Metal :</b></big> <?php echo $get_data['horoscope_metal'] ?> <br>
                        </p>

                        <p class="content_head"><big><b>Best Compatibility :</b></big> <?php echo $get_data['horoscope_compatibility'] ?> <br>
                        </p>

                        <p class="content_head"><big><b>House :</b></big> <?php echo $get_data['horoscope_house'] ?> <br>
                        </p>

                        </p>
                            <p class="content_head"><big><b>Lucky Number :</b></big> <?php echo $get_data['horoscope_number'] ?> <br>
                        </p>

                        </p>
                            <p class="content_head"><big><b>Lucky Gem :</b></big> <?php echo $get_data['horoscope_gem'] ?> <br>
                        </p>

                            <p class="content_head">
                                <big><b>Details :</b></big><br><br>
                                <?php echo $get_data['horoscope_personal'] ?><br><br>
                                <?php echo $get_data['horoscope_travel'] ?><br><br>
                                <?php echo $get_data['horoscope_money'] ?><br><br>
                                <?php echo $get_data['horoscope_career'] ?><br><br>
                                <?php echo $get_data['horoscope_health'] ?><br><br>
                                <?php echo $get_data['horoscope_emotions'] ?><br><br>
                                
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