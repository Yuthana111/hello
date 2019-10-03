<?php include_once('../../connect/connect.php'); ?>
<?php
 $id = $_GET['id'];
if (isset($id)){
        $sql = "DELETE FROM `tb_register` WHERE `tb_register`.`Reg_id` = '".$id."'";
        $result = $conn->query($sql);

if ($conn->affected_rows){
    echo '<script> alert("Finished Deleting!")</script>'; 
    header('Refresh:0; url=../user/');
}else{
    echo '<script> alert("No Data!")</script>'; 
    header('Refresh:0; url=../user/');
}


}else{
    header('Refresh:0; url=../user/');
}

?>