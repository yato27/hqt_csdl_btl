<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xem những sinh viên bị xóa</h1>
    <?php

    $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
    mysqli_set_charset($connect,'utf8');
    $sql = "select * from xem_sinh_vien_bi_xoa";
    
    $result = mysqli_query($connect,$sql);
    ?>

    <table>
        <tr>
            <th>mã sinh viên</th>
            <th>họ tên</th>
            <th>ngày sinh</th>
            <th>giới tính</th>
            <th>dân tộc</th>
            <th>mã lớp</th>
            <th>điạ chỉ</th>
            <th>sđt</th>
            
            
            
        </tr>
        <?php foreach($result as $each) { ?>
        <tr>
            
            <td><?php echo $each['ma_sinh_vien'] ?></td>
            <td><?php echo $each['ho_ten'] ?></td>
            <td><?php echo $each['ngay_sinh'] ?></td>
            <td><?php echo $each['gioi_tinh'] ?></td>
            <td><?php echo $each['dan_toc'] ?></td>
            <td><?php echo $each['ma_lop'] ?></td>

            <td><?php echo $each['dia_chi'] ?></td>
            <td><?php echo $each['sdt'] ?></td>
            

           
        </tr>
        <?php }?>
    </table>

</body>
</html>