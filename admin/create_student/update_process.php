<?php include_once('../../connect/connect.php'); ?>
<?php

if(isset($_POST['submit'])){
$sql = "UPDATE tb_student 
SET Std_Code = '".$_POST['Std_Code']."', 
Std_Pname = '".$_POST['Std_Pname']."', 
Std_Fname = '".$_POST['Std_Fname']."', 
Std_Lname = '".$_POST['Std_Lname']."', 
Std_Tel = '".$_POST['Std_Tel']."', 
Std_Add = '".$_POST['Std_Add']."', 
Std_Card = '".$_POST['Std_Card']."', 
Std_Major = '".$_POST['Std_Major']."', 
Std_Faculty = '".$_POST['Std_Faculty']."', 
Std_Image = '".$_POST['fileUpload']."',
class = '".$_POST['class']."' WHERE tb_student.`Std_id` = '".$_POST['Std_id']."';";

$result = $conn->query($sql);
if($result){
     echo '<script> alert("Finished Updating!")</script>'; 
    header('Refresh:0; url=../');
}else{
    echo '<script> alert("Updating Error!")</script>'; 
    header('Refresh:0; url=index.php');
}

}else{
    header('Refresh:0; url=../');
}
    
?>