<?php include_once('../../connect/connect.php') ?>
<?php
$sql = "INSERT INTO tb_teacher (Teach_code,Teach_Pname,Teach_Fname,Teach_Lname,Teach_Birth,Teach_Add,Teach_Tel,Teach_Card,Teach_Major,Teach_Faculty,picture) 
        VALUES ('".$_POST['Teach_code']."', 
        '".$_POST['Teach_Pname']."', 
        '".$_POST['Teach_Fname']."', 
        '".$_POST['Teach_Lname']."', 
        '".$_POST['Teach_Birth']."',
        '".$_POST['Teach_Add']."',
        '".$_POST['Teach_Tel']."',
        '".$_POST['Teach_Card']."',
        '".$_POST['Teach_Major']."',
        '".$_POST['Teach_Faculty']."',
        '".$_POST['picture']."');";
        
        $sql_check_username ="SELECT * FROM tb_teacher WHERE Teach_code = '".$_POST['Teach_code']."'";
        $check_username = $conn->query($sql_check_username);

        $result = $conn->query($sql);
        if($result){
          echo '<script> alert("Finished Creating!")</script>'; 
          header('Refresh:0; url=../teacher/');
      }else{
          echo '<script> alert("Creating Error!")</script>'; 
          header('Refresh:0; url=add_teacher.php');
      }
?>