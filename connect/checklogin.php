<?php
session_start();
$host = "localhost";
$uname = "root";
$passwd = "";
$db = "lpg3"; 
$link = mysqli_connect($host, $uname, $passwd, $db);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    exit;
}
else
$sql = "SELECT * FROM tb_admin WHERE username ='" . $_POST['username'] . "' AND password ='" . $_POST['password'] . "'";
$query = mysqli_query($link, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
if (!$result) {
    echo "<script>";
    echo "alert(\" username หรือ  password ไม่ถูกต้อง\");";
    echo "window.history.back()";
    echo "</script>";
} else {
    if ($result["status"] == "admin") {
        $_SESSION['Status'] = "admin";
        header("location: ../admin/");
    } else {
        $_SESSION['Status'] = "member";
        header("location: ../php/index.php");
    }
}
mysqli_close($link);
