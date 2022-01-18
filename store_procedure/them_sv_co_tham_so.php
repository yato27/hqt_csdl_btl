<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>thêm sinh viên với tham số là tên và ngày sinh</h1>
    <form action="them_sv_co_tham_so.php" method='get'>
        
        nhập tên sinh viên
        <input type="text" name='name'>
        nhập ngày sinh
        <input type="text" name='birth'>
        <input type="submit">
    </form>

    <?php 

    if(isset($_GET['name'],$_GET['birth'])){
        
        $name= $_GET['name'];
        $birth= $_GET['birth'];
        $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
        mysqli_set_charset($connect,'utf8');
        $sql= "call them_sinh_vien_co_tham_so('$name','$birth')";
        
        $result= mysqli_query($connect,$sql);
        
        
        $error = mysqli_error($connect);
        echo $error;

    }
    else{
        
        $result = null;
    }
    ?>
<?php if($result) {
    $sql = "select * from sinh_vien order by ma_sinh_vien desc limit 1";
    $result_array = mysqli_query($connect,$sql);
    $result = mysqli_fetch_array($result_array)
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
        
        <tr>
            
            <td><?php echo $result['ma_sinh_vien'] ?></td>
            <td><?php echo $result['ho_ten'] ?></td>
            <td><?php echo $result['ngay_sinh'] ?></td>
            <td><?php echo $result['dan_toc'] ?></td>
            <td><?php echo $result['ma_lop'] ?></td>
            <td><?php echo $result['dia_chi'] ?></td>
            <td><?php echo $result['so_dien_thoai'] ?></td>
           
           
        </tr>
       
    </table>
    <?php } ?>
</body>
</html>