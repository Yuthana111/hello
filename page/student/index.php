<?php

    session_start();
    include('../../connect/connect.php');

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
    /* css */
    <?php include("../../connect/connect.php"); ?><?php include("../../css/navbar.css"); ?>
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
                   <img src="../../admin/upload/<?php echo $_SESSION['picture'];?>" class="figure-img  rounded-circle" width="160" height="150" alt=""> 
            </figure>
            <h5><figcaption class="figure-caption text-white"><?php echo $_SESSION['uname'];?></figcaption></h5>
            <h6><figcaption class="figure-caption text-white">วิศวกรรมซอฟต์แวร์ปี <?php echo $_SESSION['class'];?></figcaption></h6>
            <?php } ?> 
          </p>
        </li>
    </h3>
  <li><a class="active" href=""><i class="fas fa-users-cog nav-icon"></i> จัดการข้อมูลนักศึกษา</a></li>
  <li><a href=""><i class="fas fa-chalkboard-teacher nav-icon"></i> ตารางเรียน</a></li>
  <hr width=auto size=3>
  <li class="nav-item text-center">
    <a href="../../logout.php" onclick="return confirm('ยืนยันการออกจากระบบ')" class="nav-link ">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </li>
  </ul>
      </div>
  <!-- content --> 
  <img src="../../img/w2.png" class="" alt=""style="margin-left:px;padding:1px px;height:200px;" > 
  <div class="p-3" style="margin-left:250px;padding:1px 16px;height:1500px;" >
    <hr width=auto size=3>
                      <?php if (isset($_SESSION['Std_id'])) { ?>
                            รหัสนักศึกษา : <?php  echo $_SESSION['code']; ?> <br>       
                            ชื่อ-สกุล : <?php  echo $_SESSION['name']; ?> <br>
                            นักศึกษาชั้นปีที่ : <?php  echo $_SESSION['class'] ; ?> <br>
                            วันเกิด : <?php  echo $_SESSION['birth']; ?> <br>
                            รหัสบัตรประจำตัวประชาชน : <?php  echo $_SESSION['card']; ?> <br>
                            เบอร์โทรติดต่อ : <?php  echo $_SESSION['tel']; ?> <br>
                            ที่อยู่ : <?php  echo $_SESSION['add']; ?> <br>
                            คณะ : <?php  echo $_SESSION['faculty']; ?> <br>
                            สาขา : <?php  echo $_SESSION['major'] ; ?> <br>       
                            <?php } ?>           
</div>         
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>