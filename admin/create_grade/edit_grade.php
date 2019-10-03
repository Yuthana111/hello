<?php include_once('../../connect/connect.php'); ?>

<?php
if(isset($_POST['submit'])){
$sql = "UPDATE `tb_grade` 
        SET `Grad_Term` = '".$_POST['Grad_Term']."',
            `Std_code` = '".$_POST['Std_code']."',
            `Sub_code` = '".$_POST['Sub_code']."',
            `GPA` = '".$_POST['GPA']."'
         WHERE tb_grade.`Std_code` = '".$_POST['Std_code']."';";


$result = $conn->query($sql);
if($result){
     echo '<script> alert("Finished Updating!")</script>'; 
    
    header('Refresh:0; url=../grade/');
}else{
    echo '<script> alert("Updating Error!")</script>'; 
    
    header('Refresh:0; url=../grade');
}

}else{
    header('Refresh:0; url=../grade');
}
    
?>
