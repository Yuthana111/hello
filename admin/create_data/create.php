<?php include('../../connect/connect.php'); ?>
<?php
$sql = "SELECT * FROM tb_subject WHERE Sub_id";
// $sql = "SELECT tb_subject.Sub_Name,tb_teacher.Teach_Fname FROM tb_subject 
// INNER JOIN tb_register ON tb_subject.Sub_id = tb_register.Std_id 
// INNER JOIN tb_teacher ON tb_register.Teach_id = tb_teacher.Teach_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Register</title>
  
  <style>
    .footer {
      position: fixed;
      left: 0;
      bottom: 10%;
      width: 100%;
      text-align: center;
    }
  </style>
</head>
<body>
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <br>
          <h3>จัดการข้อมูล</h3>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="content">
    <hr width=auto size=3>
    <form role="form" action="../create_data/createprocess.php" method="post">
      <div class="card-body">
        <div class="container">
          <div class="row">
          <div class="container">
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label>ภาคเรียน</label>
                    <select class="form-control" required name="Reg_term">
                      <option value="" disabled selected>โปรดระบุ</option>
                      <option value="1/2561">1/2561</option>
                      <option value="2/2561">2/2561</option>
                      <option value="1/2562">1/2562</option>
                      <option value="2/2562">2/2562</option>
                    </select>
                  </div>
                </div>
            <div class="col-md-3">
              <div class="form-group">
              </div>
            </div>
            <div class="col-5">
            </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Sub_Name">รายวิชา</label>
                    <select class="form-control" required name="Sub_Name">
                    <?php 
                  while ($row = $result->fetch_assoc()) 
                  {
                    ?>
                      <option value="" ><?php echo $row['Sub_Name']; ?></option><?php }?>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Teach_id">อาจารย์ผู้สอน</label>
                    <select class="form-control" required name="Teach_id">
                    <?php 
                  while ($row = $result->fetch_assoc()) 
                  {
                    ?>
                      <option value="" ><?php echo $row['Teach_id']; ?></option><?php }?>
                    </select>
                  </div>
                </div>
                <div class="col-5">
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Reg_Section">Section</label>
                    <input type="text" class="form-control" id="Reg_Section" name="Reg_Section" placeholder="" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Reg_Time">เลือกเวลา</label>
                    <input type="date" class="form-control" id="Reg_Time" name="Reg_Time" placeholder="Date" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="Reg_Room">ห้องเรียน</label>
                    <input type="text" class="form-control" id="Reg_Room" name="Reg_Room" placeholder="" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer text-center">
        <button type="submit" name="submit" class="btn btn-outline-success btn-lg"> <i class="fas fa-save"></i> Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../user" class="btn btn-outline-primary btn-lg"><i class="fas fa-arrow-left"></i> Back</a>
      </footer>
    </form>
  </section>

</body>
<div jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>