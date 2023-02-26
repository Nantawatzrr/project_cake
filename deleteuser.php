<?php
    include('config/db.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = '$id'";
    $qDt = $conn->query($sql);
    if(!isset($_SESSION['success'])){
        $_SESSION['success'] = "ลบผู้ใช้สำเร็จ";
        header("location: all_user.php");
    }
    
?>