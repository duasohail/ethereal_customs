<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login/css/util.css">
    <link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
    <script src="sweetalert.min.js.download"></script>
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('login/images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Login
                </span>
                <form   method="post" class="login100-form validate-form p-b-33 p-t-5" method="post" name="fm">

                    <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                        <input class="input100" type="email" name="email" placeholder="Email">
                    
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <input class="login100-form-btn" type="submit" name="submit" value="submit">
                       </div> 
                       <br>
                        <center>
                            <span> 
                        <?php
                            session_start();
                            include('../conn_db/conn.php');
                            /*if($conn){
                                echo "success";
                            }else{
                                echo "fail";
                            }*/


                            if(isset($_POST['submit'])){
                                $email=$_POST['email'];
                                $pass=$_POST['password'];
                                
                                $log_query="SELECT *FROM admin WHERE email='$email' AND password='$pass'";
                                $run=mysqli_query($conn,$log_query);
                                
                                if(mysqli_num_rows($run)){
                                    
                                   header('Location:dashboard.php');
                                    }else{
                                        echo "invalid email or password";
                                    }


                                }/*end of section 1*/   
    
                                ?>
                            </span>
                        </center>

                

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/bootstrap/js/popper.js"></script>
    <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/daterangepicker/moment.min.js"></script>
    <script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="login/js/main.js"></script>

</body>
</html>