<?php
    session_start();
    require_once 'config/db.php';

    if (isset($_POST['addcake'])) {
        $name_pd = $_POST['name_pd'];
        $price_pd = $_POST['price_pd'];
       

        if (empty($name_pd)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อเค้ก';
            header("location: addcake.php");
        } else if (empty($price_pd)){
            $_SESSION['error'] = 'กรุณากรอกราคาของเค้ก';
            header("location: addcake.php");
        }else{
            try{
                if (!isset($_SESSION['error'])){
                    $stmt = $conn->prepare("INSERT INTO cakeproduct(name_pd,price)
                                             VALUES(:name_pd,:price_pd)");
                    $stmt->bindParam(":name_pd",$name_pd);
                    $stmt->bindParam(":price_pd",$price_pd);
                    $stmt->execute();
                    $_SESSION['success'] = "เพิ่มสินค้าเรียบร้อยเเล้ว!";
                    header("location: addcake.php");
                }else{
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: addcake.php");
                }

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

    // <a href = 'signin.php' class='alert-link'>คลิ้กที่นี้</a>เพื่อเข้าสู่ระบบ
?>