<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xem những sinh viên điểm 0 môn csdl</h1>
    <?php

    $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
    mysqli_set_charset($connect,'utf8');
    $sql = "select * from sinh_vien_0diem";
    
    $result = mysqli_query($connect,$sql);
    ?>

    <table>
        <tr>
            <th>mã sinh viên</th>
            <th>họ tên</th>
            <th>ngày sinh</th>
            <th>giới tính</th>
            <th>tên lớp</th>
            <th>môn học</th>
            
            <th>điểm cuối kỳ</th>
            
            
        </tr>
        <?php foreach($result as $each) { ?>
        <tr>
            
            <td><?php echo $each['ma_sinh_vien'] ?></td>
            <td><?php echo $each['ho_ten'] ?></td>
            <td><?php echo $each['ngay_sinh'] ?></td>
            <td><?php echo $each['gioi_tinh'] ?></td>
            <td><?php echo $each['ten_lop'] ?></td>
            <td><?php echo $each['ten_mon_hoc'] ?></td>
            

           
            <td><?php echo $each['diem_cuoi_ky'] ?></td>

           
        </tr>
        <?php }?>
    </table>

</body>
</html>