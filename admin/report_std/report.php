<?php
session_start();
if (!empty($_SESSION['LOGIN']))
 {
  header('Location: ../login.php');
  die();
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Dashboard Template · Bootstrap</title>

  <style>
    /* css */
    <?php include("../../css/navbar.css"); ?><?php include("../../connect/connect.php"); ?>
  </style>

</head>

<body>
  <!-- navbar -->
  <ul style="width:220px;">
    <h3 class="text-white text-center mt-3 pb-3">
        <li class="nav-item dropdown">
          <p class="nav-link dropdown" href="">
          <?php if (isset($_SESSION['userid'])) { ?>
            <figure class="figure">
                   <img src="../upload/<?php echo $_SESSION['picture'];?>" class="figure-img  rounded-circle" width="160" height="150" alt=""> 
            </figure>
            <h5><figcaption class="figure-caption text-white">Account : <?php echo $_SESSION['user'];?></figcaption></h5>
            <?php } ?>
          </p>
        </li>
    </h3>
  
  <li><a href="../index.php"><i class="fas fa-users-cog nav-icon"></i> จัดการข้อมูลนักศึกษา</a></li>
  <li><a class="../subject" href=""><i class="fas fa-align-left"></i> จัดการข้อมูลรายวิชา</a></li>
  <li><a href="../teacher/"><i class="fas fa-chalkboard-teacher nav-icon"></i> จัดการข้อมูลอาจารย์</a></li>
  <li><a href="../user/"> <i class="fas fa-chalkboard-teacher nav-icon"></i> จัดการข้อมูลลงทะเบียน</a></li>
  <li><a href="../grade/"> <i class="fas fa-chalkboard-teacher nav-icon "></i> จัดการข้อมูลผลการเรียน</a></li>
  <li><a href="../table/"><i class="fas fa-chalkboard-teacher nav-icon"></i> ตารางเรียน</a></li>
  <hr width=auto size=3>
  <li class="nav-item text-center">
  <a href="register/register.php"><i class="fas fa-chalkboard-teacher nav-icon"></i> สมัคสมาชิก</a></<a>
    <a href="../../logout.php" onclick="return confirm('ยืนยันการออกจากระบบ')" class="nav-link ">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </li>
  </ul>
  <!-- content -->
  <img src="../../img/w2.png" class="" alt=""style="margin-left:px;padding:1px px;height:200px;" > 
  <div style="margin-left:220px;padding:1px 16px;height:1000px;">
    <hr width=auto size=3>

    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="report1">
                                    <!--  -->
                                    <img src="../upload/<?php echo $_SESSION['picture'];?>" class="figure-img  rounded"width="300" height="290" alt=""></div>
                            </div>
                            <?php
                            $id = $_GET['id'];
                             $sql = "SELECT Std_Pname,Std_Fname,Std_Lname,Std_Card,Std_Code,Std_Faculty,Std_Major,Std_Birth,Std_Tel,Std_Add FROM tb_student WHERE Std_id = '" . $id . "' ";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc()
                            
                                ?>
                            <div class="col-md-8">
                                <div class="reportname">
                                    <div class="report_name_th"><b>ชื่อ-สกุล </b> : <label><?php echo $row['Std_Pname']; ?> <?php echo $row['Std_Fname']; ?> <?php echo $row['Std_Lname']; ?> </label></div>
                                </div>
                                <div class="report2">

                                    <div> <b>เลขที่บัตรประจำตัวประชาชน</b>  : <label><?php echo $row['Std_Card']; ?></label></div>
                                    <div> <b>รหัสนักศึกษา</b>  : <label><?php echo $row['Std_Code']; ?></label></div>
                                    <div> <b>คณะ</b>  : <label><?php echo $row['Std_Faculty']; ?></label></div>
                                    <div> <b>สาขาวิชา</b>  : <label><?php echo $row['Std_Major']; ?></label></div>

                                    <hr>
                                    <div> <b>ปี/เดือน/วัน</b> : <label><?php echo $row['Std_Birth']; ?> </label></div>
                                    <div> <b>เบอร์โทรติดต่อ</b> : <label><?php echo $row['Std_Tel']; ?></label></div>
                                    <div> <b>ที่อยู่</b> : <label> <?php echo $row['Std_Add']; ?></label></div>

                                </div>
                                
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
                        
                   
                    
    

</body>

<div jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>