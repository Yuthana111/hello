<?php include_once('authen.php') ?>
<?php
if(isset($_POST['submit'])){
$sql="UPDATE tb_admin set password='password' where id =''";
$result = $conn->query($sql);
if(!$result){
     echo '<script> alert("Finished Updating!")</script>'; 
    header('Refresh:1111; url=index.php');
}else{
    echo '<script> alert("Updating Error!")</script>'; 
    header('Refresh:1; url=set-newpass.php');
}

}else{
    header('Refresh:1; url=set-newpass.php');
}
    
?>
