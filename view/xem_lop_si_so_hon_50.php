<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xem những lớp có sĩ số nhiều hơn 50</h1>
    <?php

    $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
    mysqli_set_charset($connect,'utf8');
    $sql = "select * from xem_lop_si_so_hon_50";
    
    $result = mysqli_query($connect,$sql);
    ?>

    <table>
        <tr>
            <th>mã lướp</th>
            <th>tên lớp</th>
            <th>mã khoa</th>
            <th>mã khóa học</th>
            <th>sĩ số</th>
            
            
        </tr>
        <?php foreach($result as $each) { ?>
        <tr>
            
            <td><?php echo $each['ma_lop'] ?></td>
            <td><?php echo $each['ten_lop'] ?></td>
            <td><?php echo $each['ma_khoa'] ?></td>
            <td><?php echo $each['ma_khoa_hoc'] ?></td>
            <td><?php echo $each['so_luong_sv'] ?></td>
            

         
           
        </tr>
        <?php }?>
    </table>

</body>
</html>