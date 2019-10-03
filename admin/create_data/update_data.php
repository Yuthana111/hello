<?php include('../../connect/connect.php'); ?>
<?php
$id = $_GET['id'];
$sql = "SELECT Reg_term, Std_code, Sub_code, Teach_code, Reg_Section, Reg_Time, Reg_Room FROM tb_register WHERE Reg_id = '" . $id . "' ";
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
  <title>Subject</title>

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
          <h3>จัดการข้อมูลรายวิชา</h3>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="content">
  <hr width=auto size=3>
      <form role="form" action="../create_data/update_process.php" method="post">
        <div class="card-body">
          <div class="container">
            <div class="row">
            <div class="col-md-2">
                  <div class="form-group">
                    <label>ภาคเรียน</label>
                    <select class="form-control" required name="Reg_term">
                      <option value="" disabled selected >โปรดระบุ</option>
                      <option value="1/2561">1/2561</option>
                      <option value="2/2561">2/2561</option>
                      <option value="1/2562">1/2562</option>
                      <option value="2/2562">2/2562</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
              <div class="form-group">
                <label for="Std_code">รหัสนักศึกษา</label>
                <input type="text" class="form-control" id="Std_code" name="Std_code" placeholder="" value="<?php echo $row['Std_code']; ?>" required>
              </div>
            </div>
            <div class="col-5">
            </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Sub_code">รหัสวิชา</label>
                    <input type="text" class="form-control" id="Sub_code" name="Sub_code" placeholder="" value="<?php echo $row['Sub_code']; ?>" required>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Teach_code">รหัสอาจารย์</label>
                    <input type="text" class="form-control" id="Teach_code" name="Teach_code" placeholder="" value="<?php echo $row['Teach_code']; ?>" required>
                  </div>
                </div>
                <div class="col-5">
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Reg_Section">Section</label>
                    <input type="text" class="form-control" id="Reg_Section" name="Reg_Section" placeholder="" value="<?php echo $row['Reg_Section']; ?>" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="Reg_Time">เลือกเวลา</label>
                    <input type="date" class="form-control" id="Reg_Time" name="Reg_Time" placeholder="Date" value="<?php echo $row['Reg_Time']; ?>" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="Reg_Room">ห้องเรียน</label>
                    <input type="text" class="form-control" id="Reg_Room" name="Reg_Room" placeholder=""  value="<?php echo $row['Reg_Room']; ?>"required>
                  </div>
                </div>
                    <input type="hidden" name="Red_id" value="<?php echo $id; ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <footer class="footer text-center">
          <button type="submit" name="submit" class="btn btn-outline-success btn-lg"> <i class="fas fa-save"></i> Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../user" class="btn btn-outline-primary btn-lg"><i class="fas fa-arrow-left"></i> Back</a>
        </footer>
      </form>
    </div>
  </section>
</body>
<div jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>