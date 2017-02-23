<?php
    session_start();
    if ($_SESSION['email']){
        $email = $_SESSION['email'];
        if (isset($_POST['upload'])) {

            //get the file from the submit
            $file = $_FILES['file']['name'];
            $type = $_FILES['file']['type'];
            //access the user's table to upload the files
            include 'inc/connectfiledb.php';
            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }
            $sql = "INSERT INTO `$email`(file, filety) VALUES('$file', '$type')";
            mysqli_query($db, $sql);
        }
    }
    else{
        header("location: index.php");
    }

?>
<html>
    <head>
        <title>Mybox - My Dashboard</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
        <script type="text/javascript" src="js/myscripts.js"></script> 
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
                      <li class="dashnav_li"><?php echo $_SESSION['name']; ?>'s Dashboard</li>
                      
                    </ul>
                </div>
                
            </div>
            <div id="main">
                <br>
                <h2>Choose a file to upload</h2>
                <div class="uploadbox">
                    <form method="post" action="dashboard.php" enctype="multipart/form-data">
                        <input type="file" name="file" required><br>
                        <input type="submit" name="upload" value="Upload" class="uploadbutton">
                    </form>
                </div>

                <img src="images/line.png">
                <?php
                    include 'inc/connectfiledb.php';
                    if ($db->connect_error) {
                        die("Connection failed: " . $db->connect_error);
                    }
                    $sql = "SELECT * FROM `$email`";
                    $result = mysqli_query($db, $sql);
                    $count = 0;
                    while ($row = mysqli_fetch_array($result)){
                        $count = $count + 1;
                    }
                    echo "<h2>My files (".$count." files)</h2>";
                ?>

                <?php
                    include 'inc/connectfiledb.php';
                    if ($db->connect_error) {
                        die("Connection failed: " . $db->connect_error);
                    }
                    $sql = "SELECT * FROM `$email`";
                    $result = mysqli_query($db, $sql);
                    echo "<table class='filetable'><tr class='filerow'>";
                    //$count = 0;
                    while ($row = mysqli_fetch_array($result)){
                        echo "<td>";
                        if ($row['filety'] == "image/jpeg"){
                            echo "<img src='images/jpg.png' height='50px' width='50px'>";
                        }
                        else if ($row['filety'] == "text/plain"){
                            echo "<img src='images/txt.png' height='50px' width='50px'>";
                        }
                        else if ($row['filety'] == "application/pdf"){
                            echo "<img src='images/pdf.png' height='50px' width='50px'>";
                        }
                        else if ($row['filety'] == "image/png"){
                            echo "<img src='images/png.png' height='50px' width='50px'>";
                        }
                        else if ($row['filety'] == "application/zip"){
                            echo "<img src='images/zip.ico' height='50px' width='50px'>";
                        }
                        else if ($row['filety'] == "audio/mp3"){
                            echo "<img src='images/mp3.png' height='50px' width='50px'>";
                        }
                        else{
                            echo "<img src='images/file.png' height='50px' width='50px'>";
                        }
                        echo "<td><p>".$row['file']."</p></td>";
                        $id = $row['id'];
                        echo "<td><a href=\"download.php?id=$id\">Download</a></td>";
                        echo "<td><a href=\"delete.php?id=$id\">Delete</a></td>";

                        echo "</tr>";

                        //$count = $count + 1;
                        //if ($count == 3){
                        //    echo "</tr><tr>";
                        //    $count = 0;
                        //}
                    }
                    echo "</tr></table>";
                ?>
                <br><br><br><br><br><br><br>
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