<?php include_once('../../connect/connect.php'); ?>

<?php
if(isset($_POST['submit'])){
$sql = "UPDATE `tb_teacher` 
        SET `Teach_code` = '".$_POST['Teach_code']."',
            `Teach_Pname` = '".$_POST['Teach_Pname']."',
            `Teach_Fname` = '".$_POST['Teach_Fname']."',
            `Teach_Lname` = '".$_POST['Teach_Lname']."',
            `Teach_Birth` ='".$_POST['Teach_Birth']."',
            `Teach_Add` = '".$_POST['Teach_Add']."', 
            `Teach_Tel` = '".$_POST['Teach_Tel']."', 
            `Teach_Card` = '".$_POST['Teach_Card']."', 
            `Teach_Major` = '".$_POST['Teach_Major']."', 
            `Teach_Faculty` = '".$_POST['Teach_Faculty']."', 
            `picture` = '".$_POST['fileUpload']."'
         WHERE tb_teacher.`Teach_id` = '".$_POST['Teach_id']."';";


$result = $conn->query($sql);
if($result){
     echo '<script> alert("Finished Updating!")</script>'; 
    
    header('Refresh:0; url=../teacher/');
}else{
    echo '<script> alert("Updating Error!")</script>'; 
    
    header('Refresh:0; url=../teacher');
}

}else{
    header('Refresh:0; url=../teacher');
}
    
?>
