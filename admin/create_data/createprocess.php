<?php include_once('../../connect/connect.php') ?>
<?php
$sql = "INSERT INTO tb_register (Reg_term,Std_code,Sub_code,Teach_code,Reg_Section,Reg_Time,Reg_Room) 
        VALUES ('".$_POST['Reg_term']."',
                '".$_POST['Std_code']."', 
                '".$_POST['Sub_code']."', 
                '".$_POST['Teach_code']."',
                '".$_POST['Reg_Section']."',
                '".$_POST['Reg_Time']."',
                '".$_POST['Reg_Room']."');";
                

        $result = $conn->query($sql);
        if($result){
          echo '<script> alert("Finished Creating!")</script>'; 
          header('Refresh:0; url=../user');
      }else{
          echo '<script> alert("Creating Error!")</script>'; 
          header('Refresh:1; url=../user');
      }
?>