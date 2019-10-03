<?php   include_once('../connect/connect.php');
        session_start();
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
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

  <style>
    body {
      background-image: URL(https://img.glyphs.co/img?src=aHR0cHM6Ly9zMy5tZWRpYWxvb3QuY29tL3Jlc291cmNlcy9MaWdodC1QYXN0ZWwtQmx1cnJlZC1CYWNrZ3JvdW5kcy04MDB4NTE4LTEuanBn&q=90&enlarge=true&h=1036&w=1600);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%, auto;
    }

    .container {
      margin-top: 2%;
    }
  </style>

  <title>Homemem</title>
</head>

<?php
    require_once('../connect/connect.php');
    if (isset($_POST['submit'])) {

        $username =  $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);

        $sql = "SELECT * FROM `tb_admin` WHERE `username` = '" . $username . "' AND `email` = '" . $email. "'";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            header('location:set-newpass.php');
        }else{
            echo "<script>";
            echo "alert(\" username หรือ  password ไม่ถูกต้อง\");";
            echo "</script>";
        }
    }
    ?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto mt-5 text-center">
        <img class="mb-4" src="https://png.pngtree.com/svg/20161008/reset_password_1201020.png" alt="" width="150" height="160">
        <div class="card">
          <form action="" method="POST">
            <div class="card-header text-center">
              <h2 class="h4 mb-1 font-weight-normal"><b>แก้ไขรหัสผ่านบัญชีผู้ใช้งาน</b></h2>
            </div>
            <div class="card-body">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-envelope"></i></span>
                </div>
                <input name="email" id="email" type="email" class="form-control" placeholder="E-mail" required="" autofocus=>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input name="username" id="username" type="username" class="form-control" placeholder="Username" required="" "">
              </div>

              <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login"><b>Submit</b></button>
            </div>
            <div class="card-footer text-center">
              <a class="btn btn-lg btn-dark " href="../">Back</a>
            </div>
        </div>
      </div>
    </div>
  </div>
    </form>

</body>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</html>