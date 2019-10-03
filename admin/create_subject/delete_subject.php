<?php include_once('../../connect/connect.php'); ?>
<?php
 $id = $_GET['id'];
if (isset($id)){
        $sql = "DELETE FROM `tb_subject` WHERE `tb_subject`.`Sub_id` = '".$id."'";
        $result = $conn->query($sql);

if ($conn->affected_rows){
    echo '<script> alert("Finished Deleting!")</script>'; 
    header('Refresh:0; url=../subject/');
}else{
    echo '<script> alert("No Data!")</script>'; 
    header('Refresh:0; url=../subject/');
}


}else{
    header('Refresh:0; url=../subject/');
}

?>