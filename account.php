<?php include_once 'includes/db.php'; ?>
<html>
    <head>
        <title>Your Account</title>
        <link rel="stylesheet" href="css/style.css" >
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: center;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }    
        </style>
        <link rel="stylesheet" href="css/account.css" >
    </head>
    <body>
        <?php
            include_once 'includes/header.php';
        ?>
        <?php
            $is_user = $_SESSION['isUserName'];

            $get_id_query = "SELECT * FROM users WHERE user_name='$is_user'";
            $get_id_run = mysqli_query($con,$get_id_query);
            $get_id_data = mysqli_fetch_array($get_id_run);

            $main_id = $get_id_data['id'];
            
        ?>
        <h2 style="text-align:center; letter-spacing:2px; color:blue;"><big>User :-</big> <i><u><?php echo $is_user; ?></u></i> </h2>
        <hr>
        <input type="hidden" value="<?php echo $main_id ?>" id="user_main_id">
        
        <table id="show_data">
            
            <!-- <?php
                // $get_all_data_query = "SELECT * FROM user_data WHERE user_id='$main_id'";
                // $get_all_data_run = mysqli_query($con, $get_all_data_query);
                // $get_all_data_row = mysqli_num_rows($get_all_data_run);

                
            ?> -->

            </table>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function(){

                    get_data();
                    function get_data()
                    {
                        var user_main_id = $('#user_main_id').val();

                        $.ajax({
                            url:'process.php',
                            type:'post',
                            data:'type=get_data&user_main_id='+user_main_id,
                            success:function(get_all_data)
                            {
                                $('#show_data').html(get_all_data);
                            }
                        });
                    }

                    $(document).on('click','.del_btn',function(){
                        var user_main_id = $('#user_main_id').val();
                        var del_id = $(this).data('datadelid');
                   
                        $.ajax({
                            url:'process.php',
                            type:'post',
                            data:'type=delete_data&del_id='+del_id+'&user_main_id='+user_main_id,
                            success:function(del){
                                // alert("Data Delete Successfully!!!");
                                get_data();
                            }
                        });
                    });
                });
            </script>
    </body>
</html>