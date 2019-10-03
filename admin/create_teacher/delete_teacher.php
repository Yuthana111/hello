<?php include_once('../../connect/connect.php'); ?>
<?php
 $id = $_GET['id'];
if (isset($id)){
        $sql = "DELETE FROM `tb_teacher` WHERE `tb_teacher`.`Teach_id` = '".$id."'";
        $result = $conn->query($sql);

if ($conn->affected_rows){
    echo '<script> alert("ลบข้อมูลสำเร็จ!")</script>'; 
    header('Refresh:0; url=../teacher/');
}else{
    echo '<script> alert("ไม่มีข้อมูล!")</script>'; 
    header('Refresh:0; url=../teacher/');
}


}else{
    header('Refresh:0; url=../teacher/');
}

?>