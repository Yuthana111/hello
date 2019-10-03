<?php include_once('../../connect/connect.php') ?>
<?php
$sql = "INSERT INTO tb_grade (Grad_Term,Std_code,Sub_code,GPA) 
        VALUES ('".$_POST['Grad_Term']."', 
        '".$_POST['Std_code']."', 
        '".$_POST['Sub_code']."', 
        '".$_POST['GPA']."');";
        
        $sql_check_username ="SELECT * FROM tb_grade WHERE Std_code = '".$_POST['Std_code']."'";
        $check_username = $conn->query($sql_check_username);

        $result = $conn->query($sql);
        if($result){
          echo '<script> alert("Finished Creating!")</script>'; 
          header('Refresh:0; url=../grade/');
      }else{
          echo '<script> alert("Creating Error!")</script>'; 
          header('Refresh:0; url=add_grade.php');
      }
?>