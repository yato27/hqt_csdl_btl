<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>lấy hết từ bảng sinh viên</h1>
    <?php

    $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
    mysqli_set_charset($connect,'utf8');
    $sql = "call danh_sach_sinh_vien";
    
    $result = mysqli_query($connect,$sql);
    $ketqua = mysqli_fetch_array($result);
    
    ?>

    <table>
        <tr>
            <th>mã sinh viên</th>
            <th>họ tên</th>
            <th>ngày sinh</th>
            <th>dân tộc</th>
            <th>mã lớp</th>
            <th>địa chỉ</th>
            <th>số điện thoại</th>
            
            
            
        </tr>
        <?php foreach($result as $each) { ?>
        <tr>
            
            <td><?php echo $each['ma_sinh_vien'] ?></td>
            <td><?php echo $each['ho_ten'] ?></td>
            <td><?php echo $each['ngay_sinh'] ?></td>
            <td><?php echo $each['dan_toc'] ?></td>
            <td><?php echo $each['ma_lop'] ?></td>
            <td><?php echo $each['dia_chi'] ?></td>
            <td><?php echo $each['so_dien_thoai'] ?></td>
           
           
        </tr>
        <?php }?>
    </table>

</body>
</html>