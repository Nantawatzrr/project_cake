<?php
    session_start();
    require_once 'config/db.php';

    if (isset($_POST['rs_cake'])) {
        $id_rs = $_POST['id_rs'];
        $user_id = $_SESSION['user_login'];
        $name_pd = $_POST['name_order'];
        $size_pd = $_POST['size_pd'];
        $price_pd = $_POST['price_pd'];
        $qty_pd = $_POST['qty_pd'];
        $name_rs = $_POST['name_rs'];


        if (empty($name_rs)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อผู้จอง';
            header("location: cake_system.php");
        }else{
            try{
                if (!isset($_SESSION['error'])){
                    $total = $size_pd * $price_pd;
                    $totalSup = $total*$qty_pd;
                    $stmt = $conn->prepare("INSERT INTO reserve(id_rs,name_pd,size_pd,name_rs,price,qty,name_rp)VALUES(:id_rs,:name_pd,:size_pd,:name_rs ,:price_pd,:qty_pd,:name_rp)");
                    $stmt->bindParam(":id_rs",$id_rs);
                    $stmt->bindParam(":name_pd",$name_pd);
                    $stmt->bindParam(":size_pd",$size_pd);
                    $stmt->bindParam(":name_rs",$name_rs);
                    $stmt->bindParam(":price_pd",$totalSup);
                    $stmt->bindParam(":qty_pd",$qty_pd);
                    $stmt->bindParam(":name_rp",$user_id);
                    $stmt->execute();
                    $_SESSION['success'] = "เพิ่มสินค้าเรียบร้อยเเล้ว!";
                    header("location: cake_system.php");
                }else{
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: cake_system.php");
                }

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

    // <a href = 'signin.php' class='alert-link'>คลิ้กที่นี้</a>เพื่อเข้าสู่ระบบ
?>