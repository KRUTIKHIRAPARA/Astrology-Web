<html>
    <head>  
        <title>Register</title>
        <link rel="stylesheet" href="css/register.css">
    </head>
    <body>
    <div class="wrapper">
        <div class="logo">
            <img src="images/logo1.gif" alt="Astrology">
        </div>
        <div class="text-center mt-4 name">
            <p class="title">Astrology</p>
        </div>
        <!-- <form class="p-3 mt-3" action="process_register.php" method="POST"> -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username" autocomplete="off" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="register_part">
                <!-- <input type="submit" class="btn mt-3 register_btn" value="Register"/> -->
                <button class="btn mt-3 register_btn" id="register_btn">Register</button>
            </div>
        <!-- </form> -->
        <div class="text-center fs-6">
            <br>
            <p class="anthor_btn">
                <a href="login.php">Login</a>
            </p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#register_btn').click(function(){
                var user_name = $('#userName').val();
                var user_password = $('#pwd').val();

                if(user_name != '' && user_password != '')
                {
                        $.ajax({
                            url:'process.php',
                            type:'post',
                            data:'type=registeruser&user_name='+user_name+'&user_password='+user_password,
                            success:function(register_data){
                                if(register_data == '0')
                                {
                                    $('#userName').val('');
                                    $('#pwd').val('');
                                    alert("Register Successfulyy...");
                                    if(confirm('You want to login?'))
                                    {
                                        window.location.href = "login.php";
                                    }
                                    
                                }
                                else if(register_data == '1')
                                {
                                    $('#userName').val('');
                                    $('#pwd').val('');
                                    alert("User Name Already Exits!!!");
                                }
                            }
                        });
                }
                else
                {
                    alert("Please FillUp All Data!!!");
                }
                
            });
        });
    </script>

    </body>
</html>