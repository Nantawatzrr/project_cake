<?php
    session_start();
    require_once 'config/db.php';

    if (isset($_POST['cg_pass'])) {
        $id = $_SESSION['user_login'];
        $password = $_POST['password'];
        $c_password = $_POST['changepassword'];
        $urole = 'user';

        if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: changepassword.php");
        } else if (strlen($_POST['password'])> 20 || strlen($_POST['password'])< 8 ){
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 8 ถึง 20 ตัวอักษร';
            header("location: changepassword.php");
        } else if (empty($c_password)){
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: changepassword.php");
        } else if ($password != $c_password) {
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            header("location: changepassword.php");
        } else{
            try{

                if (!isset($_SESSION['error'])){
                    $passwordHash = password_hash($password,PASSWORD_DEFAULT);
                    $sql =  "UPDATE users SET password='$passwordHash'WHERE id=$id";
                    $qUp=$conn->query($sql);
                    // $stmt = $conn->prepare("INSERT INTO users(firstname,lastname,department,class,email,password,urole)
                    //                         VALUES(:firstname,:lastname,:department,:class,:email,:password,:urole)");
                    $_SESSION['success'] = "เปลี่ยนรหัสสำเร็จสำเร็จ";
                    header("location: changepassword.php");
                }else{
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: changepassword.php");
                }

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }


?>