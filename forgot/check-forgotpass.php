<?php
session_start();
$host = "localhost";
$username = "root";
$email = "";
$db = "lpg3";
$link = mysqli_connect($host,$username,$email,$db);
if(!$link) {
    echo "Error: Unable to connect to MySQL.". PHP_EOL;
    exit;
}
$sql = "SELECT * FROM tb_admin WHERE username ='".$_POST['username']."' AND email='".$_POST['email']."'";
$query = mysqli_query($link, $sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
if(!$result)
 {
    echo '<script> alert("Username and Email ไม่ถูกต้อง !")</script>'; 
    header('Refresh:0; url=forgotpass.php');
}
else
{   
        header("location: set-newpass.php"); 
}
mysqli_close($link);
?>