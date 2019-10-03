<?php include("../../connect/connect.php"); ?> 

<?php
if(isset($_POST['submit'])){
$sql = "UPDATE tb_register
       SET  Reg_term = '".$_POST['Reg_term']."', 
            Std_code = '".$_POST['Std_code']."', 
            Sub_code = '".$_POST['Sub_code']."', 
            Teach_code = '".$_POST['Teach_code']."',
            Reg_Section = '".$_POST['Reg_Section']."', 
            Reg_Time = '".$_POST['Reg_Time']."', 
            Reg_Room = '".$_POST['Reg_Room']."' WHERE tb_register.`Reg_id` = '".$_POST['Reg_id']."';";

$result = $conn->query($sql);
if($result){
     echo '<script> alert("Finished Updating!")</script>'; 
    header('Refresh:0; url=../user/');
}else{
    echo '<script> alert("Updating Error!")</script>'; 
    header('Refresh:0; url=../user');
}

}else{
    header('Refresh:0; url=../user');
}
    
?>