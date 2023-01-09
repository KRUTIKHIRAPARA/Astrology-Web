<?php
    require_once 'includes/db.php';

    if(isset($_POST['type']) && !empty($_POST['type']))
    {
		// Register.php backend coding Start
		
        if($_POST['type'] == 'registeruser')
        {
            $user_name = $_POST['user_name'];
            $user_password = $_POST['user_password'];

            $user_check = "SELECT * FROM users WHERE user_name='$user_name'";
            $user_check_run = mysqli_query($con,$user_check);
            $user_check_row = mysqli_num_rows($user_check_run);
            
            if($user_check_row == 1)
            {
                echo '1';
            }
            else if($user_check_row == 0)
            {
                $insert_date = "INSERT INTO users(user_name,user_password) values('$user_name','$user_password')";
                mysqli_query($con,$insert_date);

                echo '0';
            }
        }

        // Register.php backend coding End


        // today_horpscope.php backend coding Start

        else if($_POST['type'] == 'insert_data')
        {
            $horoscope_name = $_POST['horoscope_name'];
            $rp_horoscope_name = str_replace('\'','mamu',$horoscope_name);

            $horoscope_date = $_POST['horoscope_date'];
            $horoscope_planet = $_POST['horoscope_planet'];
            $horoscope_color = $_POST['horoscope_color'];
            $horoscope_mode = $_POST['horoscope_mode'];
            $horoscope_metal = $_POST['horoscope_metal'];
            $horoscope_compatibility = $_POST['horoscope_compatibility'];
            $horoscope_house = $_POST['horoscope_house'];
            $horoscope_number = $_POST['horoscope_number'];
            $horoscope_gem = $_POST['horoscope_gem'];
            $horoscope_personal = $_POST['horoscope_personal'];
            $horoscope_travel = $_POST['horoscope_travel'];
            $horoscope_money = $_POST['horoscope_money'];
            $horoscope_career = $_POST['horoscope_career'];
            $horoscope_health = $_POST['horoscope_health'];
            $horoscope_emotions = $_POST['horoscope_emotions'];

            $user_id = $_POST['user_id'];
			
			$insert_data_query = "INSERT INTO user_data(user_id,horoscope_date,horoscope_name,horoscope_planet,horoscope_color,horoscope_mode,horoscope_metal,horoscope_compatibility,horoscope_house,horoscope_number,horoscope_gem,horoscope_personal,horoscope_travel,horoscope_money,horoscope_career,horoscope_health,horoscope_emotions) VALUES('$user_id','$horoscope_date','$rp_horoscope_name','$horoscope_planet','$horoscope_color','$horoscope_mode','$horoscope_metal','$horoscope_compatibility','$horoscope_house','$horoscope_number','$horoscope_gem','$horoscope_personal','$horoscope_travel','$horoscope_money','$horoscope_career','$horoscope_health','$horoscope_emotions')";

            
             if(mysqli_query($con,$insert_data_query))
             {
                echo '1';
             }
             else 
             {
				echo '0';
             }

        }

        // today_horpscope.php backend coding End


        // account.php backend coding Start

        else if($_POST['type'] == 'get_data')
        {
            $user_main_id = $_POST['user_main_id'];

            $get_all_data_query = "SELECT * FROM user_data WHERE user_id='$user_main_id'";
            $get_all_data_run = mysqli_query($con,$get_all_data_query);
            $get_all_data_row = mysqli_num_rows($get_all_data_run);

            ?>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Horoscope</th>
                <th style="text-align:center;">Action</th>
                <!-- <th style="text-align:center;">Delete</th> -->
            </tr>
            <?php
            if($get_all_data_row > 0)
            {
                $num = 1;
                while($get_all_data = mysqli_fetch_array($get_all_data_run))
                {
                    ?>
                    <tr>
                        <td><?php echo $num; ?></td>
                        <td><?php echo $get_all_data['horoscope_date']; ?></td>
                        <td><?php echo str_replace('mamu','\'',$get_all_data['horoscope_name']); ?></td>
                        <td class="delete_part"><a href='full_details.php?id=<?php echo base64_encode($get_all_data['id']) ?>&horoscope=<?php echo base64_encode(strstr($get_all_data['horoscope_name'],' ',true)) ?>' class="more_btn">See More</a>
                        <a data-datadelid="<?php echo $get_all_data['id']; ?>"  class="del_btn">Delete</a></td>
                    </tr>
                    <?php
                    $num ++;
                }
            }
            else
            {
                ?>
                    <tr>
                        <td colspan="5" style="text-align:center; color:orange;">No Data Found!!!</td>
                    </tr>
                <?php
            }
        }

        else if($_POST['type'] == 'delete_data')
        {
            $del_id = $_POST['del_id'];
            $user_main_id = $_POST['user_main_id'];

            $delete_data_query = "DELETE FROM user_data WHERE id='$del_id' AND user_id='$user_main_id'";
            mysqli_query($con,$delete_data_query);
        }

        // account.php backend coding End


        
    }
?>