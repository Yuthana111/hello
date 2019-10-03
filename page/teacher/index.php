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
  <li><a class="active" href=""><i class="fas fa-users-cog nav-icon"></i> จัดการผลการเรียน</a></li>
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
  
  <!-- content -->
  <img src="../../img/w2.png" class="" alt=""style="margin-left:px;padding:1px px;height:200px;" > 
  <div style="margin-left:220px;padding:1px 16px;height:1000px;">
    <hr width=auto size=3>
    <h2>จัดการผลข้อมูลการเรียน</h2>
    <div class="table-responsive">
      <div class="card">
        <div class="card-header">
          <form class="form-inline">
            ค้นหานักศึกษา :
            &nbsp;&nbsp;&nbsp;
            <input class="form-control w-50 p-3 ml-4" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary ml-2" type="submit">Search</button>
          </form>
          <a href="../create_grade/add_grade.php" class="btn btn-success float-right"><i class="fas fa-plus-circle"></i> ผลการเรียน</a>
        </div>
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ปีการศึกษา</th>
              <th scope="col">รหัสวิชา</th>
              <th scope="col">ชื่อวิชา</th>
              <th scope="col">ชั้นปี</th>
              <th scope="col">ชืื่ออารย์</th>
             <th></th>
             </tr>
              </thead>
              <tbody>
            <?php
            $sql = "SELECT tb_register.Reg_term,tb_register.Sub_code,tb_register.class,tb_subject.Sub_Name FROM tb_register INNER JOIN tb_subject ON tb_register.class = tb_register.class";
            $result = $conn->query($sql);
            $num = 0;
            while ($row = $result->fetch_assoc()) {
              $num++;
              ?>
              <tr>
                <td><?php echo $row['Reg_term']; ?></td>
                <td><?php echo $row['Sub_code']; ?></td>
                <td><?php echo $row['Sub_Name']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['Sub_Name']; ?></td>
                <td> 
                  <a href="../../admin/create_grade/update_grade.php" class="btn btn-sm btn-warning text-white">
                    <i class=""></i>View
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
                     
</div>         
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>