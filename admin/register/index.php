<?php
        require_once('../../connect/connect.php'); // ดึงไฟล์เชื่อมต่อ Database เข้ามาใช้งาน
        /**
         * ตรวจสอบเงื่อนไขที่ว่า ตัวแปร $_POST['submit'] ได้ถูกกำหนดขึ้นมาหรือไม่
         */
        if(isset($_POST['submit'])){
            /**
             * ตั้งชื่อไฟล์ภาพใหม่
             */
            $temp = explode('.',$_FILES['fileUpload']['name']);
            $new_name = round(microtime(true)) . '.' . end($temp);
            /**
             * ตรวจสอบเงื่อนไขที่ว่า สามารถย้ายไฟล์รูปภาพเข้าสู่ storage ของเราได้หรือไม่
             */
            if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../upload/' .$new_name)){
                /**
                 * สร้างตัวแปร $sql เพื่อเก็บคำสั่ง Sql
                 * จากนั้นให้ใช้คำสั่ง $conn->query($sql) เพื่อที่จะประมาณผลการทำงานของคำสั่ง sql
                 */
                $sql = "INSERT INTO `tb_admin` (`id`, `username`, `password`,  `pname`,`firstname`, `lastname`, `class`, `status`, `email`, `picture`) 
                        VALUES (NULL, '".$_POST['username']."', 
                                      '".$_POST['password']."',                  
                                      '".$_POST['pname']."', 
                                      '".$_POST['firstname']."', 
                                      '".$_POST['lastname']."', 
                                      '".$_POST['class']."', 
                                      '".$_POST['status']."', 
                                      '".$_POST['email']."', 
                                      '". $new_name."');";
                $result = $conn->query($sql);
                /**
                 * ตรวจสอบเงื่อนไขที่ว่าการประมวณผลคำสั่งนี่สำเร็จหรือไม่
                 */                
                if($result){
                    echo '<script> alert("สมัครสมาชิกสำเร็จ")</script>';
                    header('Refresh:0; url=../index.php');
                }else{
                    echo 'no';
                }
            }
        }
    ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<style>
			body{
				background-color: orange;
			}
			</style>

		<div class="wrapper">
			<div class="inner">
				<!-- <img src="images/soft.png" alt="" class="image-1"> -->
				<form action="">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
					</div>
					<div class="form-holder">
							<span class="lnr lnr-envelope"></span>
							<input type="text" class="form-control" name="email" id="email"  placeholder="Email" required>
						</div>
					<div class="form-holder">
						<select class="form-control" required name="pname">
						<option value="" disabled selected >คำนำหน้า</option>
							<option value="นาย">นาย</option>
							<option value="นางสาว">นางสาว</option>
							<option value="อาจารย์">อาจารย์</option>
						</select>
					</div>
					<div class="form-holder">
							
							<input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname" required>
						</div>
						<div class="form-holder">
								
								<input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname" required>
							</div>
					<div class="form-holder">
							<select class="form-control" required name="class">
									<option value="" disabled selected>ชั้นปี</option>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value=""></option>
									</select>
					</div>
					<div class="form-holder">
							<select class="form-control" required name="status">
									<option value="" disabled selected>Select Permission</option>
									  <option value="admin">Admin</option>
									  <option value="teacher">Teacher</option>
									  <option value="student">Student</option>
									</select>
					</div>
					<div class="form-holder">
							<span class="lnr lnr-camera"></span>
							<input type="file" class="form-control" id="fileUpload" name="fileUpload" onchange="readURL(this)">
						</div>
					<button>
						<span>Register</span>
					</button>
				</form>
				<!-- <img src="images/image-2.png" alt="" class="image-2"> -->
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>