<?php include_once('../../connect/connect.php'); ?>
<?php
 $id = $_GET['id'];
if (isset($id)){
        $sql = "DELETE FROM tb_student WHERE `tb_student`.`Std_id` = '".$id."'";
        $result = $conn->query($sql);

if ($conn->affected_rows){
    echo '<script> alert("Finished Deleting!")</script>'; 
    header('Refresh:0; url=../');
}else{
    echo '<script> alert("No Data!")</script>'; 
    header('Refresh:0; url=../');
}


}else{
    header('Refresh:0; url=../');
}

?>