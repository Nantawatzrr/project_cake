<?php
    require_once('vendor/autoload.php');
    include ('config/db.php');
    $sql = "SELECT * FROM reserve";
    $rp_pdf = $conn->query($sql);
    
    $output_head = "
    <link rel='stylesheet' href='style.css'>
    
    <h3 style='text-align: center;'>Order</h3>
    
    <table>
        <tr class='tr_head'>
        <th>ID ORDER</th>
        <th>ชื่อสินค้า</th>
        <th>ขนาด</th>
        <th>จำนวน</th>
        <th>ราคา</th>
        <th>เวลาที่จอง</th>
        <th>ชื่อผู้จอง</th>
        </tr>
    ";

    $output_body = "";

   while($row=$rp_pdf->fetch(PDO::FETCH_OBJ)){
    $output_body .= "
    <tr>
    <td>$row->id_rs</td>
    <td>$row->name_pd</td>
    <td>$row->size_pd</td>
    <td>$row->qty </td>
    <td>$row->price </td>
    <td>$row->date_rs </td>
    <td>$row->name_rs </td>
    </tr>
    ";
   }
   $output_end = "</table>";

    $mpdf = new Mpdf\Mpdf();
    $mpdf->WriteHTML($output_head);
    $mpdf->WriteHTML($output_body);
    $mpdf->WriteHTML($output_end);
    $mpdf->output();


?>