<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xem thông tin sinh viên lớp 61th5</h1>
    <?php

    $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
    mysqli_set_charset($connect,'utf8');
    $sql = "select * from xem_thong_tin_sv_61th5";
    
    $result = mysqli_query($connect,$sql);
    ?>

    <table>
        <tr>
            <th>mã sinh viên</th>
            <th>họ tên</th>
            <th>ngày sinh</th>
            <th>địa chỉ</th>
            <th>số điện thoại</th>
            <th>tên lớp</th>
            <th>tên khoa</th>
            <th>tên khóa học</th>
        </tr>
        <?php foreach($result as $each) { ?>
        <tr>
           
            <td><?php echo $each['ma_sinh_vien'] ?></td>
            <td><?php echo $each['ho_ten'] ?></td>
            <td><?php echo $each['ngay_sinh'] ?></td>
            <td><?php echo $each['dia_chi'] ?></td>
            <td><?php echo $each['so_dien_thoai'] ?></td>
            <td><?php echo $each['ten_lop'] ?></td>
            <td><?php echo $each['ten_khoa'] ?></td>
            <td><?php echo $each['ten_khoa_hoc'] ?></td>

            
        </tr>
        <?php }?>
    </table>

</body>
</html>