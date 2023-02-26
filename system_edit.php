<?php
    session_start();
    require_once 'config/db.php';

    if (isset($_POST['edit_foruser'])) {
        $id = $_SESSION['user_login'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $class = $_POST['class'];
        $urole = 'user';

        if (empty($firstname)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header("location: edituser.php");
        } else if (empty($lastname)){
            $_SESSION['error'] = 'กรุณากรอกนามสกุล';
            header("location: edituser.php");
        } else if (empty($department)){
            $_SESSION['error'] = 'กรุณากรอกแผนกของท่าน';
            header("location: edituser.php");
        } else if (empty($class)){
            $_SESSION['error'] = 'กรุณากรอกระดับชั้น';
            header("location: edituser.php");
        } else if (empty($email)){
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: edituser.php");
        } else{
            try{
                $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
                $check_email->bindParam(":email",$email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);

                if ($row['email'] == $email){
                    $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบเเล้ว";
                    header("location: edituser.php");
                }else if (!isset($_SESSION['error'])){
                    $sql =  "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email' , department='$department' , class='$class' WHERE id=$id";
                    $qUp=$conn->query($sql);
                    // $stmt = $conn->prepare("INSERT INTO users(firstname,lastname,department,class,email,password,urole)
                    //                         VALUES(:firstname,:lastname,:department,:class,:email,:password,:urole)");
                    $_SESSION['success'] = "เปลี่ยนข้อมูลสำเร็จ";
                    header("location: edituser.php");
                }else{
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: edituser.php");
                }

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }


?>