<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: ../");
    } else {

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
    <?php include("../connect/connect.php"); ?><?php include("../css/navbar.css"); ?>
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
      <h2>จัดการข้อมูลนักศึกษา</h2>
      <div class="card">
        <div class="card-header">
        <form id="scForm" method="GET" class="form-inline">
                นักศึกษาชั้นปีที่ :
                <select name="class" id="class" onchange="$('#scForm').submit();" class="form-control-sm ml-1">
                  <option value="" disabled selected>Select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="">All</option>
                  
                </select>
          </form>
          <a href="create_student/create.php" class="btn btn-outline-success float-right"><i class="fas fa-plus-circle"></i> เพิ่มข้อมูลนักศึกษา</a>
        </div>
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>ลำดับที่</th>
              <th>รหัสนักศึกษา</th>
              <th>ชื่อ</th>
              <th>นามสกุล</th>
              <th>ชั้นปี</th>
              <th>เบอร์ติดต่อ</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $class=isset($_GET['class']) ? $_GET['class']:'';
            $sql = "SELECT * FROM tb_student WHERE class LIKE '%$class%'";
            $result = $conn->query($sql);
            $num = 0;
            while ($row = $result->fetch_assoc()) {
              $num++;
              ?>
              <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $row['Std_Code']; ?></td>
                <td><?php echo $row['Std_Fname']; ?></td>
                <td><?php echo $row['Std_Lname']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['Std_Tel']; ?></td>
                <td>
                  <a href="report_std/report.php?id=<?php echo $row['Std_id']; ?>" class="btn btn-sm btn-outline-primary ">
                    <i class="fas fa-View"></i> View
                  </a>
                </td>
                <td>
                  <a href="create_student/update_student.php?id=<?php echo $row['Std_id']; ?>" class="btn btn-sm btn-outline-warning ">
                    <i class="fas fa-edit"></i> edit
                  </a>
                </td>
                <td>
                  <?php if ($row['Std_id']) { ?>
                    <a href="#" onclick="deleteItem(<?php echo $row['Std_id']; ?>);" class="btn btn-sm btn-outline-danger">
                      <i class="fas fa-trash-alt"></i> Delete
                    </a>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      

        
      <script>
        function deleteItem(id) {
          if (confirm('คุณต้องการลบข้อมูลใช่หรือไม่') == true) {
            window.location = `create_student/delete_student.php?id=${id}`;
          }
        };
      </script>

      <div jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
      <?php } ?>