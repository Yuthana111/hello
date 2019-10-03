<?php include('../../connect/connect.php'); ?>
<?php
$id = $_GET['id'];
$sql = "SELECT Std_Code, Std_Pname, Std_Fname, Std_Lname, Std_Tel, Std_Add, Std_Birth, Std_Card, Std_Faculty, Std_Major, class FROM tb_student WHERE Std_id = '" . $id . "' ";
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
  <title>Homemem</title>

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
          <h3>จัดการข้อมูลนักศึกษา</h3>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="content">
  <hr width=auto size=3>
      <form role="form" action="update_process.php" method="post">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="Std_Card">รหัสบัตรประจำตัวประชาชน</label>
                  <input type="text" class="form-control" id="Std_Card" name="Std_Card" placeholder="" value="<?php echo $row['Std_Card']; ?>" required>
                </div>
              </div>
              <div class="col-md-3">
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="Std_Code">รหัสนักศึกษา</label>
                  <input type="text" class="form-control" id="Std_Code" name="Std_Code" placeholder="" value="<?php echo $row['Std_Code']; ?>">
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>คำนำหน้า</label>
                      <select class="form-control" required name="Std_Pname" value="<?php echo $row['Std_Pname']; ?>">
                        <option value="" disabled selected>โปรดระบุ</option>
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="Std_Fname">ชื่อ</label>
                      <input type="text" class="form-control" id="Std_Fname" name="Std_Fname" placeholder="" value="<?php echo $row['Std_Fname']; ?>" required>
                    </div>
                  </div>

                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="Std_Lname">สกุล</label>
                      <input type="text" class="form-control" id="Std_Lname" name="Std_Lname" placeholder="" value="<?php echo $row['Std_Lname']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Std_Add">ที่อยู่ตามทะเบียนบ้าน</label>
                      <input type="text" class="form-control" id="Std_Add" name="Std_Add" placeholder="" value="<?php echo $row['Std_Add']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="Std_Birth">วัน/เดือน/ปีเกิด</label>
                      <input type="date" class="form-control" id="Std_Birth" name="Std_Birth" placeholder="Date" value="<?php echo $row['Std_Birth']; ?>" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Std_Tel">เบอร์ติดต่อ</label>
                      <input type="text" class="form-control" id="Std_Tel" name="Std_Tel" placeholder="" value="<?php echo $row['Std_Tel']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Std_Faculty">คณะ</label>
                      <input type="text" class="form-control" id="Std_Faculty" name="Std_Faculty" placeholder="" value="<?php echo $row['Std_Faculty']; ?>" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Std_Major">สาขา</label>
                      <input type="text" class="form-control" id="Std_Major" name="Std_Major" placeholder="" value="<?php echo $row['Std_Major']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-1">
                  <div class="form-group">
                    <label for="class">ชั้นปีที่</label>
                    <input type="text" class="form-control" id="class" name="class" placeholder="" value="<?php echo $row['class']; ?>"  required>
                  </div>
                </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-5">
                        <label for="Std_Image">อัพโหลดรูปภาพ</label>
                        <input type="file" class="form-control" id="fileUpload" name="fileUpload" onchange="readURL(this)">
                      </div>
                    </div>
                    <input type="hidden" name="Std_id" value="<?php echo $id; ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <footer class="footer text-center">
          <button type="submit" name="submit" class="btn btn-outline-success btn-lg"> <i class="fas fa-save"></i> Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../" class="btn btn-outline-primary btn-lg"><i class="fas fa-arrow-left"></i> Back</a>
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