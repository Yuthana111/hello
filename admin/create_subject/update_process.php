<?php include_once('../../connect/connect.php'); ?>

<?php
if(isset($_POST['submit'])){
$sql = "UPDATE `tb_subject` 
        SET `Sub_code` = '".$_POST['Sub_code']."',
         `Sub_Name` ='".$_POST['Sub_Name']."',
          `Sub_Credit` = '".$_POST['Sub_Credit']."', 
          `CR` = '".$_POST['CR']."'
         WHERE tb_subject.`Sub_id` = '".$_POST['Sub_id']."';";

$result = $conn->query($sql);
if($result){
     echo '<script> alert("Finished Updating!")</script>'; 
    header('Refresh:0; url=../subject/');
}else{
    echo '<script> alert("Updating Error!")</script>'; 
    header('Refresh:0; url=../subject');
}

}else{
    header('Refresh:0; url=../subject');
}
    
?>