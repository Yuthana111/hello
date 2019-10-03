<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: ../");
    } else {

?>
<?php
include('../conn/connect.php');
//echo $_SESSION['id'];
if($_SESSION['Type_id'] == 1){
    $name = "admin";
    $img = "admin.jpg";
    error_reporting(0);
}
else if($_SESSION['Type_id'] == 2){
    $sqlTC = "SELECT * FROM teacher_tb WHERE Teach_code = '".$_SESSION['id']."'";
    $queryTC = $conn->query($sqlTC);
    $resultTC  = $queryTC ->FETCH_ASSOC();
    $name = $resultTC['Teach_Pname']." ".$resultTC['Teach_Fname']." ".$resultTC['Teach_Lname'];
    $birth = $resultTC['Teach_Birth'];
    $card = $resultTC['Teach_Card'];
    $code = $resultTC['Teach_code'];
    $faculty = $resultTC['Teach _Faculty'];
    $major = $resultTC['Teach _Major'];
    $img = $resultTC['Teach _Image'];
}
else {
    $sqlSTD = "SELECT * FROM student_tb WHERE Std_code = '".$_SESSION['id']."'";
    $querySTD = $conn->query($sqlSTD);
    $resultSTD = $querySTD->FETCH_ASSOC();
    $name = $resultSTD['Std_Pname']." ".$resultSTD['Std_Fname']." ".$resultSTD['Std_Lname'];
    $birth = $resultSTD['Std_Birth'];
    $card = $resultSTD['Std_Card'];
    $code = $resultSTD['Std_Code'];
    $faculty = $resultSTD['Std_Faculty'];
    $major = $resultSTD['Std_Major'];
    $img = $resultSTD['Std_Image'];
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="../../../css/grade/grade.css">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Home</title>

  <style>
    /* css */
    <?php include("..//connect/connect.php"); ?><?php include("../css/navbar.css"); ?> 
  </style>
</head>

<body>

  
 
  <!-- navbar -->
  <ul style="width:220px;">
    <h3 class="text-white text-center mt-3 pb-3">
  </div>
            
        <li class="nav-item dropdown">
          <p class="nav-link dropdown" href="">
          <?php if (isset($_SESSION['userid'])) { ?>
            <figure class="figure">
                   <img src="upload/<?php echo $_SESSION['picture'];?>" class="figure-img  rounded-circle" width="160" height="150" alt=""> 
            </figure>
            <h5><figcaption class="figure-caption text-white"><?php echo $_SESSION['uname'];?></figcaption></h5>
            <h6><figcaption class="figure-caption text-white">วิศวกรรมซอฟต์แวร์ปี <?php echo $_SESSION['class'];?></figcaption></h6>
            <?php } ?> 
          </p>
        </li>
    </h3>
  <li><a class="active" href=""><i class="fas fa-users-cog nav-icon"></i> จัดการข้อมูลนักศึกษา</a></li>
  <li><a href="subject/"><i class="fas fa-align-left"></i> จัดการข้อมูลรายวิชา</a></li>
  <li><a href="teacher"><i class="fas fa-chalkboard-teacher nav-icon"></i> จัดการข้อมูลอาจารย์</a></li>
  <li><a href="user/"> <i class="fas fa-chalkboard-teacher nav-icon"></i> จัดการข้อมูลลงทะเบียน</a></li>
  <li><a href="grade/"> <i class="fas fa-chalkboard-teacher nav-icon "></i> จัดการข้อมูลผลการเรียน</a></li>
  <li><a href="../admin/table"><i class="fas fa-chalkboard-teacher nav-icon"></i> ตารางเรียน</a></li>
  <hr width=auto size=3>
  <li class="nav-item text-center">
  <a href="../admin/register/register.php"><i class="fas fa-chalkboard-teacher nav-icon"></i> สมัคสมาชิก</a></<a>
    <a href="../logout.php" onclick="return confirm('ยืนยันการออกจากระบบ')" class="nav-link ">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </li>
  </ul>
      </div>
  <!-- content --> 
  <img src="../img/w2.png" class="" alt=""style="margin-left:px;padding:1px px;height:200px;" > 
  <div style="margin-left:220px;padding:1px 16px;height:1500px;" >
    <hr width=auto size=3>
    <div class="table-responsive">
    <div id="content">
        <div class="asd p-5">
            <h3>ข้อมูลส่วนตัว</h3>
            <hr>
            <?php if($_SESSION['Type_id'] == 1){ ?>
            <b>ชื่อ - นามสกุล : </b>
            <label for="idcard"><?php echo $name; ?> </label> <br>
            <?php  } else {?>
            <b>ชื่อ - นามสกุล : </b>
            <label for="idcard"><?php echo $name; ?> </label> <br>
            <b>วันเกิด : </b>
            <label for="idcard"><?php echo $birth; ?> </label> <br>
            <b>เลขที่บัตรประจำตัวประชาชน : </b>
            <label for="idcard"><?php echo $card; ?> </label> <br>
            <b>รหัสนักศึกษา/อาจาร์ : </b>
            <label for="idcard"><?php echo $code; ?> </label> <br>
            <b>หลักสูตร : </b>
            <label for="idcard"><?php echo $faculty; ?> </label> <br>
            <b>สาขาวิชา : </b>
            <label for="idcard"><?php echo $major; ?> </label> <br>
            <?php }?>
        </div>
        <div class="goo p-5">
        <?php if($_SESSION['Type_id'] == 2){?>         
<h5>รายวิชาที่สอน</h5>
            <table class="table table-bordered mt-3">
                    <thead>
                      <tr>
                        <th scope="col">รหัสวิชา</th>
                        <th scope="col">รายวิชา</th>
                        <th scope="col">จัดการ</th>
                      </tr>
                    </thead>         
    <?php
        $sql = "SELECT DISTINCT course_tb.Sub_code, subject_tb.Sub_Name 
        FROM course_tb 
        INNER JOIN subject_tb 
        ON course_tb.Sub_code = subject_tb.Sub_code 
        WHERE course_tb.Teach_code = '".$_SESSION['id']."'";

        $query = mysqli_query($conn, $sql);
        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) 
        {
            ?>
            <tr>
            <td><div align="center">
            <?php echo $result['Sub_code'];?></div></td>
            <td><div align="left">
            <?php echo $result['Sub_Name'];?></div></td>
            <td><div align="center">
            <a class="btn btn-info" href ="../Grade/GradeManager.php?ID=<?php echo $result['Sub_code']?>&SubName=<?php echo $result['Sub_Name']?> ">จัดการ</a></td>
            </tr>
            <?php
        
      }
    ?>              
                  </table>
        </div>   
        </div>     
        </div>
            <?php }?>

      <div jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
      <?php } ?>