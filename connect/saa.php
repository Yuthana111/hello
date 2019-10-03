<?php
session_start();
        if(isset($_POST['username'])){
				//connection
                  include("connect/connect.php");
				//รับค่า user & password
                  $username = $_POST['username'];
                  $password = md5($_POST['password']);
				//query 
                  $sql="SELECT * FROM tb_admin Where username='".$username."' and password='".$password."' ";
                  $result = mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["id"] = $row["id"];
                      $_SESSION["username"] = $row["username"]." ".$row["password"];
                      $_SESSION["status"] = $row["status"];
                      if($_SESSION["status"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                        Header("Location: admin/");
 
                      }
 
                      if ($_SESSION["status"]=="member"){ //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                        Header("Location: page/");
 
                      }
 
                  }else{
                    // echo "<script>";
                    //     echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                    //     echo "window.history.back()";
                    // echo "</script>";
 
                  }
 
        }else{
 
 
             Header("Location: form.php"); //user & password incorrect back to login again
 
        }
?>