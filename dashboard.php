<?php
    session_start();
    if ($_SESSION['email']){

    }
    else{
        header("location: index.html");
    }

?>
<html>
    <head>
        <title>Mybox - My Dashboard</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <script src="myscripts.js"></script> 
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="header-inner-container">
                    <div>
                        <p class="header_register" style="visibility: hidden;"></p>
                        <img src="images/LogoV.png" class="header_logo" id="logochange">
                        <a href="logout.php" ><p class="header_login">Logout</p></a>
                    </div>
                    
                </div>
            </div>
            <div id="navmenu">
                <div class="navmenu-inner-container">
                    <ul class="dashnav_ul">
                      <li class="dashnav_li"><?php echo $_SESSION['email']; ?> Dashboard</li>
                      
                    </ul>
                </div>
                
            </div>
            <div id="main">
                <div >
                
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