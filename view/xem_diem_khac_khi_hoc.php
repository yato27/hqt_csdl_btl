<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xem những sinh viên có điểm thi cao bất ngờ</h1>
    <?php

    $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
    mysqli_set_charset($connect,'utf8');
    $sql = "select * from diem_khac_khi_hoc";
    
    $result = mysqli_query($connect,$sql);
    ?>

    <table>
        <tr>
            <th>mã sinh viên</th>
            
            <th>mã môn học</th>
            <th>lần học</th>
            <th>điểm quá trình</th>
            <th>điểm giữa kỳ</th>
            <th>điểm cuối kỳ</th>
            
            
        </tr>
        <?php foreach($result as $each) { ?>
        <tr>
            
            <td><?php echo $each['ma_sinh_vien'] ?></td>
           
            <td><?php echo $each['ma_mon_hoc'] ?></td>
            <td><?php echo $each['lan_hoc'] ?></td>

            <td><?php echo $each['diem_qua_trinh'] ?></td>
            <td><?php echo $each['diem_giua_ky'] ?></td>
            <td><?php echo $each['diem_cuoi_ky'] ?></td>

           
        </tr>
        <?php }?>
    </table>

</body>
</html>