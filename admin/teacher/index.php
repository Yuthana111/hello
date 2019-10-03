<?php
session_start();
if (!empty($_SESSION['LOGIN'])) {
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
            <h5><figcaption class="figure-caption text-white">ยินดีต้อนรับ : <?php echo $_SESSION['user'];?></figcaption></h5>
            <?php } ?>
          </p>
        </li>
    </h3>
  
  <li><a href="../"><i class="fas fa-users-cog nav-icon"></i> จัดการข้อมูลนักศึกษา</a></li>
  <li><a href="../subject/"><i class="fas fa-align-left"></i> จัดการข้อมูลรายวิชา</a></li>
  <li><a class="active" href="../teacher/"><i class="fas fa-chalkboard-teacher nav-icon"></i> จัดการข้อมูลอาจารย์</a></li>
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
    <h2>จัดการข้อมูลอาจารย์</h2>
    <div class="table-responsive">
          <div class="card">
            <div class="card-header">
            <form class="form-inline" method="GET" id="form" action="">
            ค้นหาอาจารย์ :
            &nbsp;&nbsp;&nbsp;
            <input class="form-control w-50 p-3 ml-5"  name="search" type="search" value="" placeholder="ชื่ออาจารย์" aria-label="Search">
            <button class="btn btn-primary ml-3" type="submit">Search</button>
              </form>
              <a href="../create_teacher/add_teacher.php" class="btn btn-outline-success float-right"><i class="fas fa-plus-circle"></i> เพิ่มรายชื่ออาจารย์</a>
            </div> 
            <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">รหัสรายอาจารย์</th>
              <th scope="col">ชื่ออาจารย์ผู้สอน</th>
              <th scope="col">นามสกุล</th>
              <th scope="col">สาขาวิชา</th>
              <th scope="col">คณะ</th>
              <th scope="col">เบอร์ติดต่อ</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
        </thead>
        <tbody>


          <?php
          $search=isset($_GET['search']) ? $_GET['search']:'';

          $sql = "SELECT * FROM tb_teacher WHERE Teach_Fname LIKE '%$search%' OR Teach_Lname LIKE '%$search%' 
          OR Teach_code LIKE '%$search%' OR Teach_Tel LIKE '%$search%'";
          $result = $conn->query($sql);
          $num = 0;
          while ($row = $result->fetch_assoc()) {
            $num++;
            ?>
            <tr>
              <td><?php echo $num; ?></td>
              <td><?php echo $row['Teach_code']; ?></td>
              <td><?php echo $row['Teach_Fname']; ?></td>
              <td><?php echo $row['Teach_Lname']; ?></td>
              <td><?php echo $row['Teach_Major']; ?></td>
              <td><?php echo $row['Teach_Faculty']; ?></td>
              <td><?php echo $row['Teach_Tel']; ?></td>
              <td>
                <a href="../create_teacher/update_teacher.php?id=<?php echo $row['Teach_id']; ?>" class="btn btn-sm btn-outline-warning ">
                  <i class="fas fa-edit"></i> edit
                </a>
              </td>
              <td>
                <?php if ($row['Teach_id']) { ?>
                  <a href="#" onclick="deleteItem(<?php echo $row['Teach_id']; ?>);" class="btn btn-sm btn-outline-danger">
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
          window.location = `../create_teacher/delete_teacher.php?id=${id}`;
        }
      };
    </script>

</body>

<div jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>