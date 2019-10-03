<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>เข้าสู่ระบบ</title>

    <style>
        body {
            background-image: URL(https://images.unsplash.com/photo-1559041891-70f71ebb838f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%, auto;
        }

        .container {
            margin-top: 6%;
        }
    </style>

</head>

<body>

    <div class="container"> 
        <div class="row">
            <div class="col-md-5 mx-auto mt-10 text-center">
                <img class="mb-4" src="https://www.lpru.ac.th/LPRU60/about/lpru-2560.png" alt="" width="120" height="150">
                <div class="card">
                    <form action="loginprocess.php" method="POST">
                        <div class="card-header text-center">
                            <h1 class="h3 mb-3 font-weight-normal"><b>LOGIN LPRU</b></h1>
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input name="username" id="username" type="username" class="form-control" placeholder="Username" required="" autofocus="">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="">
                            </div>
                            <button class="btn btn-lg btn-primary  btn-block" type="submit" name="submit" value="Login"><b>Login</b></button>
                        </div>
                        <div class="card-footer text-center">
                            <a class="text-dark" href="forgot/forgotpass.php"><b>Forgot password?</b></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ติดตั้งการใช้งาน Javascript ต่างๆ -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>

</html>