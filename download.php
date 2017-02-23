<html>
<head>

</head>
<body>
<?php
session_start();
if ($_SESSION['email']) {
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $email = $_SESSION['email'];
        include 'inc/connectfiledb.php';
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $sql = "SELECT * FROM `$email` WHERE `id`='$id'";
        $results = mysqli_query($db, $sql);
        // $row = mysqli_fetch_row($result)
        //while ($row = mysqli_fetch_row($result)) {
        //    echo $row['name'];
        //}
        //echo $row['filety'];
        //header("Content-type: $filety");
        //header("Content-Disposition: attachment; filename=$name");
        //echo stripslashes($row);
        //readfile($results);
        //header()
        //header("location: dashboard.php");
    }
}
else{
    header("location: dashboard.php");
}


?>
</body>
</html>