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
        $sql = "DELETE FROM `$email` WHERE `id`='$id'";
        mysqli_query($db, $sql);
        header("location: dashboard.php");
    }
}
else{
    header("location: dashboard.php");
}


?>
</body>
</html>

