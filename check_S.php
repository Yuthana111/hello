<?php

session_start();

    include('connect/connect.php');

  
    $query = "SELECT * FROM tb_student WHERE Std_id = '".$_SESSION['Std_id']."'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_array($result);

        $_SESSION['name'] = $row['Std_Pname']." ".$row['Std_Fname']." ".$row['Std_Lname'];
        $_SESSION['birth'] = $row['Std_Birth'];
        $_SESSION['card'] = $row['Std_Card'];
        $_SESSION['code'] = $row['Std_Code'];
        $_SESSION['tel'] = $row['Std_Tel'];
        $_SESSION['add'] = $row['Std_Add'];
        $_SESSION['faculty'] = $row['Std_Faculty'];
        $_SESSION['major'] = $row['Std_Major'];                 
        $_SESSION['class'] = $row['class'];
        
        
            header("Location: page/student/");
    
        if ($_SESSION['status'] == 'teacher') {
            header("Location: page/teacher/");
        }
    } else {
        echo "<script>";
        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");";
        echo "</script>";
        header('Refresh:1111110; url=index.php');
    }
?>