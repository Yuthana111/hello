<?php   include_once('../connect/connect.php');
        session_start();
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    
    <script> 
	// Function เพื่อตรวจสอบรหัสผ่านว่าตรงกันหรือไม่
	function checkPassword(form) { 
		password1 = form.password1.value;  
		password2 = form.password2.value; 

		// ถ้าช่่องรหัสผ่านไม่ถูกกรอก
		 if (password1 != password2) { 
			alert ("\nรหัสผ่านไม่ตรงกัน...") 
			return false; 
			} 

		//ถ้าทั้งสองช่องตรงกัน  return true
		else{ 
				return true; 
			} 
	} 
</script> 

<body class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 sm-6"></div>
            <div class="col-md-4 sm-6">&nbsp;
                <form onSubmit = "return checkPassword(this)" name="login" method="POST" action="update-newpassword.php">
                    <img class="mb-4" src="https://cdn.pixabay.com/photo/2013/07/12/12/55/padlock-146537_960_720.png" alt="" width="120" height="130">
                    <h1 class="h3 mb-3 font-weight-normal">SET NEWPASSWORD</h1> &nbsp;
                    <input type="username" disabled class="form-control"  name="username" id="username" placeholder="" value="<?php echo  $_SESSION['username']; ?>"required=""> &nbsp;
                    <input name="password1"  id="password" type="password" class="form-control" placeholder="New Password" required="" autofocus=""> &nbsp;
                    <input name="password2"  id="password" type="password" class="form-control" placeholder="Confirm New Password" required="">
                    <div class="checkbox mb-3">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit value" name="submit">Save Password</button>
                    <br><a class="btn-lg btn-dark" href="../">< กลับสู่หน้าหลัก</a>
                </form>
            </div>
            <div class="col-md-4 sm-6"></div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>


</body>
</html>