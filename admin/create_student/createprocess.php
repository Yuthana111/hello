<?php include_once('../../connect/connect.php') ?>
<?php
$sql = "INSERT INTO tb_student (Std_Code,Std_Pname,Std_Fname,Std_Lname,Std_Tel,Std_Add,Std_Birth,Std_Card,Std_Major,Std_Faculty,Std_Image,class) 
        VALUES ('".$_POST['Std_Code']."', 
        '".$_POST['Std_Pname']."', 
        '".$_POST['Std_Fname']."', 
        '".$_POST['Std_Lname']."', 
        '".$_POST['Std_Tel']."',
        '".$_POST['Std_Add']."',
        '".$_POST['Std_Birth']."',
        '".$_POST['Std_Card']."',
        '".$_POST['Std_Major']."',
        '".$_POST['Std_Faculty']."',
        '".$_POST['fileUpload']."',
        '".$_POST['class']."');";
        
        $sql_check_username ="SELECT * FROM tb_student WHERE Std_Card = '".$_POST['Std_Card']."'";
        $check_username = $conn->query($sql_check_username);

        $result = $conn->query($sql);
        if($result){
          echo '<script> alert("Finished Creating!")</script>'; 
          header('Refresh:0; url=../index.php');
      }else{
          echo '<script> alert("Creating Error!")</script>'; 
          header('Refresh:1; url=add-create.php');
      }
?>