<?php
    include('config/db.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM reserve WHERE id_rs = '$id'";
    $qDt = $conn->query($sql);
    header("location: recipient.php");
?>