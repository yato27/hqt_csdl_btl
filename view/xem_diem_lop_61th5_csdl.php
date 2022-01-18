<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xem điểm hqt csdl của lớp 61th5</h1>
    <?php

    $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
    mysqli_set_charset($connect,'utf8');
    $sql = "select * from xem_diem_sv_61th5_csdl";
    
    $result = mysqli_query($connect,$sql);
    ?>

    <table>
        <tr>
            <th>mã sinh viên</th>
            <th>họ tên</th>
            <th>ngày sinh</th>
            <th>tên lớp</th>
            <th>môn học</th>
            <th>lần học</th>
            <th>điểm quá trình</th>
            <th>điểm giữa kỳ</th>
            <th>điểm cuối kỳ</th>
            
            
        </tr>
        <?php foreach($result as $each) { ?>
        <tr>
            
            <td><?php echo $each['ma_sinh_vien'] ?></td>
            <td><?php echo $each['ho_ten'] ?></td>
            <td><?php echo $each['ngay_sinh'] ?></td>
            <td><?php echo $each['ten_lop'] ?></td>
            <td><?php echo $each['ten_mon_hoc'] ?></td>
            <td><?php echo $each['lan_hoc'] ?></td>

            <td><?php echo $each['diem_qua_trinh'] ?></td>
            <td><?php echo $each['diem_giua_ky'] ?></td>
            <td><?php echo $each['diem_cuoi_ky'] ?></td>

           
        </tr>
        <?php }?>
    </table>

</body>
</html>