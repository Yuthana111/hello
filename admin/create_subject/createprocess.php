<?php include_once('../../connect/connect.php') ?>
<?php
$sql = "INSERT INTO tb_subject (Sub_code,Sub_Name,Sub_Credit,CR) 
        VALUES ('".$_POST['Sub_code']."',
        '".$_POST['Sub_Name']."', 
        '".$_POST['Sub_Credit']."', 
        '".$_POST['CR']."');";
        

        $result = $conn->query($sql);
        if($result){
          echo '<script> alert("Finished Creating!")</script>'; 
          header('Refresh:0; url=../subject');
      }else{
          echo '<script> alert("Creating Error!")</script>'; 
          header('Refresh:1; url=index.php');
      }
?>