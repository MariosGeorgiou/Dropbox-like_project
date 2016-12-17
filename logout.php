<?php
session_start();
session_destroy();
?>
<html>
<head>
    <title>Mybox - My Dashboard</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="myscripts.js"></script>
    <meta http-equiv="refresh" content="5;url=index.html" />
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div class="header-inner-container">
            <div>
                <p class="header_register" style="visibility: hidden;"></p>
                <img src="images/LogoV.png" class="header_logo" id="logochange">
                <p class="header_login" style="visibility: hidden;">Logout</p>
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
        <div >
            <h2 style="color: #1b801b;">
                <br><br>You have been logged out successfully!
            </h2>
            <p>
                Redirecting to Home Page...
            </p>
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
