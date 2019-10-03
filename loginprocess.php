
<?php

session_start();

if (isset($_POST['username'])) {

    include('connect/connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);

        $_SESSION['userid'] = $row['id'];
        $_SESSION['uname'] = $row["pname"] . " " . $row["firstname"] . " " . $row["lastname"];
        $_SESSION['class'] = $row['class'];
        $_SESSION['user'] = $row['username'];
        $_SESSION['picture'] = $row['picture'];
        $_SESSION['status'] = $row['status'];
        $_SESSION['Std_id'] = $row['Std_id'];
        


        if ($_SESSION['status'] == 'admin') {
            header("Location: admin/");
        }
        if ($_SESSION['status'] == 'student') {
            header("Location: check_S.php");
        }
        if ($_SESSION['status'] == 'teacher') {
            header("Location: page/teacher/");
        }
    } else {
        echo "<script>";
        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");";
        echo "</script>";
        header('Refresh:0; url=index.php');
    }
} else {
    echo "<script>";
    echo "alert(\" username หรือ  password ไม่ถูกต้อง\");";
    echo "</script>";
    header('Refresh:0; url=index.php');
}

?>