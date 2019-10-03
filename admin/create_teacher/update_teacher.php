<?php include('../../connect/connect.php'); ?>
<?php
$id = $_GET['id'];
$sql = "SELECT  `Teach_id`, `Teach_code`, `Teach_Pname`, `Teach_Fname`, `Teach_Lname`, `Teach_Birth`, `Teach_Add`, `Teach_Tel`, `Teach_Card`, `Teach_Major`, `Teach_Faculty`, `picture` FROM `tb_teacher`  WHERE Teach_id = '" . $id . "' ";
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
          <h3>จัดการข้อมูลอาจารย์</h3>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="content">
  <hr width=auto size=3>
      <form role="form" action="../create_teacher/edit_teacher.php" method="post">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                <input type="text" id="Teach_id" name="Teach_id" placeholder="" value="<?php echo $row['Teach_id']; ?>" hidden>
                  <label for="Std_Card">รหัสอาจารย์</label>
                  
                  <input type="text" class="form-control" id="Teach_code" name="Teach_code" placeholder="" value="<?php echo $row['Teach_code']; ?>" required>
                </div>
              </div>
              
              <div class="container">
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>คำนำหน้า</label>
                      <select class="form-control" required name="Teach_Pname" value="<?php echo $row['Teach_Pname']; ?>" required>
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="Std_Fname">ชื่อ</label>
                      <input type="text" class="form-control" id="Teach_Fname" name="Teach_Fname" placeholder="" value="<?php echo $row['Teach_Fname']; ?>" required>
                    </div>
                  </div>

                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="Std_Lname">สกุล</label>
                      <input type="text" class="form-control" id="Teach_Lname" name="Teach_Lname" placeholder="" value="<?php echo $row['Teach_Lname']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Std_Add">ที่อยู่ตามทะเบียนบ้าน</label>
                      <input type="text" class="form-control" id="Teach_Add" name="Teach_Add" placeholder="" value="<?php echo $row['Teach_Add']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="Std_Birth">วัน/เดือน/ปีเกิด</label>
                      <input type="date" class="form-control" id="Teach_Birth" name="Teach_Birth" placeholder="Date" value="<?php echo $row['Teach_Birth']; ?>" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Std_Tel">เบอร์ติดต่อ</label>
                      <input type="text" class="form-control" id="Teach_Tel" name="Teach_Tel" placeholder="" value="<?php echo $row['Teach_Tel']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="Std_Tel">บัตรประชาชน</label>
                      <input type="text" class="form-control" id="Teach_Card" name="Teach_Card" placeholder="" value="<?php echo $row['Teach_Card']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="Teach_Faculty">คณะ</label>
                    <input type="text" class="form-control" id="Teach_Faculty" name="Teach_Faculty" placeholder="" value="<?php echo $row['Teach_Faculty']; ?>" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Teach_Major">สาขา</label>
                    <input type="text" class="form-control" id="Teach_Major" name="Teach_Major" placeholder="" value="<?php echo $row['Teach_Major']; ?>" required>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <label for="picture">อัพโหลดรูปภาพ</label>
                      <input type="file" class="form-control" id="fileUpload" name="fileUpload" onchange="readURL(this)">
                    </div>
                  </div>
                </div>
                <br><br><br>
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <figure class="figure text-center d-none">
                        <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer text-center">
        <button type="submit" name="submit" class="btn btn-outline-success btn-lg"><i class="fas fa-save"></i> Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../teacher" class="btn btn-outline-primary btn-lg"><i class="fas fa-arrow-left"></i> Back</a>
      </footer>
    </form>
  </section>

  <script>
    /**
     * ประกาศ function readURL()
     * เพื่อทำการตรวจสอบว่า มีไฟล์ภาพที่กำหนดถูกอัพโหลดหรือไม่
     * ถ้ามีไฟล์ภาพที่กำหนดถูกอัพโหลดอยู่ ให้แสดงไฟล์ภาพนั้นผ่าน elements ที่มี id="imgUpload"
     */
    function readURL(input) {
      if (input.files[0]) {
        var reader = new FileReader();
        $('.figure').addClass('d-block');
        reader.onload = function(e) {
          console.log(e.target.result)
          $('#imgUpload').attr('src', e.target.result).width(240);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

</body>
<div jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>