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