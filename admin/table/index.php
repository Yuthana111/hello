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
      <?php include("../../css/navbar.css");?>
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
  <li><a href="../subject"><i class="fas fa-align-left"></i> จัดการข้อมูลรายวิชา</a></li>
  <li><a href="../teacher/"><i class="fas fa-chalkboard-teacher nav-icon"></i> จัดการข้อมูลอาจารย์</a></li>
  <li><a href="../user/"> <i class="fas fa-chalkboard-teacher nav-icon"></i> จัดการข้อมูลลงทะเบียน</a></li>
  <li><a href="../grade/"> <i class="fas fa-chalkboard-teacher nav-icon "></i> จัดการข้อมูลผลการเรียน</a></li>
  <li><a class="active"  href="../table/"><i class="fas fa-chalkboard-teacher nav-icon"></i> ตารางเรียน</a></li>
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
    <h2>ตารางเรียนนักศึกษา</h2>
    <div class="table-responsive">
      <div class="card">
        <div class="card-header">
          <form class="form-inline">
            
            <input class="form-control w-50 p-3 ml-4" type="search" placeholder="Search" aria-label="Search">&nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary " type="submit">Search</button>
          </form>
        </div>

        <div id="all">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm table-bordered">
                    
                        <tr style="height: 70px;"> 
                        
                            <td>
                                <div align="center"><strong>วัน/เวลา </strong></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ1<br></strong>8.00-9.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ2<br></strong>9.00-10.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ3<br></strong>10.00-11.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ4<br></strong>11.00-12.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ5<br></strong>12.00-13.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ6<br></strong>13.00-14.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ7<br></strong>14.00-15.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ8<br></strong>15.00-16.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ9<br></strong>16.00-17.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ10<br></strong>17.00-18.00 น. </font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ11<br></strong>18.00-19.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ12<br></strong>18.00-19.00 น.</font></div>
                            </td>
                            <td bgcolor="#000000">
                                <div align="center"><font color="#FFFFFF"><strong>คาบ13<br></strong>20.00-21.00 น.</font></div>
                            </td>
                        </tr>
                            <tr> 
                                <td bgcolor="#000000">
                                    <div align="left">
                                        <strong>
                                            <font color="#FFFFFF">&nbsp;วันจันทร์</font>
                                        </strong>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        <?php echo $_SESSION['user'];?>
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                            
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                            </tr>
                                <tr> 
                                <td bgcolor="#000000">
                                    <div align="left">
                                        <strong>
                                            <font color="#FFFFFF">&nbsp;วันอังคาร</font>
                                        </strong>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        <?php echo $_SESSION['user'];?>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr> 
                                <td bgcolor="#000000">
                                    <div align="left">
                                        <strong>
                                            <font color="#FFFFFF">&nbsp;วันพุธ</font>
                                        </strong>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        <?php echo $_SESSION['user'];?>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        <?php echo $_SESSION['user'];?>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                      </font>
                                    </div>
                                </td>
                            </tr>
                            <tr> 
                                <td bgcolor="#000000">
                                    <div align="left">
                                        <strong>
                                            <font color="#FFFFFF">&nbsp;วันพฤหัสบดี</font>
                                        </strong>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        <?php echo $_SESSION['user'];?>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                            </tr>
                            <tr> 
                                <td bgcolor="#000000">
                                    <div align="left">
                                        <strong>
                                            <font color="#FFFFFF">&nbsp;วันศุกร์</font>
                                        </strong>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        <?php echo $_SESSION['user'];?>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        <?php echo $_SESSION['user'];?>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                            </tr>
                            <tr> 
                                <td bgcolor="#000000">
                                    <div align="left">
                                        <strong>
                                            <font color="#FFFFFF">&nbsp;วันเสาร์</font>
                                        </strong>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                            </tr>
                                <tr> 
                                <td bgcolor="#000000">
                                    <div align="left">
                                        <strong>
                                            <font color="#FFFFFF">&nbsp;วันอาทิตย์</font>
                                        </strong>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center">
                                        <font color="#000000">
                                        </font>
                                    </div>
                                </td>
                                <td bgcolor="#FFFFFF">
                                    <div align="center" value="">
                                        <font color="#000000">
                                       </font>
                                    </div>
                                </td>
                            </tr>
                             </table>
                </div>
            </div>
        </div>
        </div>
    
    <div jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>