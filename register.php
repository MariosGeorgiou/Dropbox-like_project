<?php 
    session_start();
    
    //connect to database
    include 'inc/connectdb.php';
    
    if (isset($_POST['register_button'])){
        session_start();
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
        
        if ($password == $confirm_password){
            //create user
            $password = md5($password); //hash password before storing
            $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['email'] = $email;
            header("location: dashboard.php"); 
        }
        else{
            $_SESSION['message'] = "The two passwords do not match";
        }
    }

?>


<html>
    <head>
        <title>Mybox - Register</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <script src="myscripts.js"></script> 
        
        <!-- jQuery  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <!-- jQuery UI  -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="header-inner-container">
                    <div>
                        <a href="register.php" ><p class="header_register">Register</p></a>
                        <a href="index.html"><img src="images/LogoV.png" class="header_logo" id="logochange"></a>
                        <a href="login.php" ><p class="header_login">Login</p></a>
                    </div>
                    
                </div>
            </div>
            <div id="navmenu">
                <div class="navmenu-inner-container">
                    <ul>
                      <li><a href="index.html">Back to Home</a></li>
                    </ul>
                </div>
                
            </div>
            <div id="main">
                <div class="register-getstarted">
                    <div class="register-inner-container">
                        

                            <b>Register<br/></b>
                            
                            <form method="POST" action="register.php" onsubmit="return validateForm()" name="registerForm" class="loginbox-form-container">
                            Full Name<br>
                            <input type="text" name="name" placeholder="Name"  required>
                            <br><br>Email Address<br>
                            <input type="email" name="email" placeholder="Email" required>
                            <br>Password<br>
                            <input type="password" name="password" placeholder="Password" required>
                            <br>Retype Password<br>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
                                <div id="password_error" style="color:red;"></div><br>
                            <input type="submit" value="Register Now" name="register_button">
                            </form>
                        
                    </div>
                </div>
                
            </div>
            <footer id="footer">
                <p class="footer-content"></p>
                <p class="footer-content"><b id="contactus">Contact Us</b>
                    <br>+44 2333444555<br>support@safebox.org<br><br> <img src="images/email-xxl.png" height="35px" width="35px"> <img src="images/dotsmall.png" class="dot" height="30px" width="12px"> <img src="images/twitter-xxl.png" height="35px" width="35px"> <img src="images/dotsmall.png" class="dot" height="30px" width="12px"> <img src="images/facebook-3-xxl.png" height="35px" width="35px"> <img src="images/dotsmall.png" class="dot" height="30px" width="12px"> <img src="images/instagram-xxl.png" height="35px" width="35px"> </p>
                <p class="footer-content"></p>
            </footer>
            <div id="copyright-container">
                <div class="copyright-inner-container">
                    <p style="color: #b2c7e8;" >@2016 Marios Georgiou - CSD4020 Project</p>
                </div>
            </div>
        </div>
        
        
    </body>
</html>
<script>
/*
    $("document").ready(function(){
        
         $("input[type='submit']#registerbutton").onclick(function(){
            $(this).css("background-color", "red");
         });   
        
    });
*/
    
    /*  Confirm that passwords match  */
    var password = document.forms["registerForm"]["password"];
    var confirm_password = document.forms["registerForm"]["confirm_password"];
    var password_error = document.getElementById("password_error");

    function validateForm(){
        if (password.value != confirm_password.value){
            password.style.border = "1px solid red";
            confirm_password.style.border = "1px solid red";
            password_error.innerHTML = "*Passwords do not match";
            return false;
        }
        else{
            password.style.border = "1px solid black";
            confirm_password.style.border = "1px solid black";
            password_error.innerHTML = "";
            return true;
        }
    }
</script>