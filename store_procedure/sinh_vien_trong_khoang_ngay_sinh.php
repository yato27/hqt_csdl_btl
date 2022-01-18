<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>tìm sinh viên trong khoảng ngày sinh</h1>
    <form action="sinh_vien_trong_khoang_ngay_sinh.php" method='get'>
        
        khoảng đầu
        <input type="text" name='small'>
        khoảng cuối
        <input type="text" name='big'>
        <input type="submit">
    </form>

    <?php 
    $row = -1;
    if(isset($_GET['small'],$_GET['big'])){
        
        $small= $_GET['small'];
        $big= $_GET['big'];
        if($small and $big){
        $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
        mysqli_set_charset($connect,'utf8');
        $sql= "call tim_sv_trong_khoang_ngay_sinh('$small','$big')";
        
        $result= mysqli_query($connect,$sql);
        if($result){
        $row= mysqli_num_rows($result);
        }
        
        
        $error = mysqli_error($connect);
        echo $error;
        }
        else{
            echo "nhập dữ liệu vào ";
        }

    }
    else{
        
        $result = null;
    }
    ?>
<?php if($row >0) {

     ?>
<table>
    <h3>sinh viên vừa được update</h3>
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
            <?php  }?>
    </table>
    <?php } 
    if(!$row) { 
        echo 'không có kết quả';
    }?>
</body>
</html>
