<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xem tất cả sinh viên 1 lớp</h1>
    <form action="xem_tat_ca_sv_1_lop.php" method='get'>
        nhập tên lớp
        <input type="text" name="ten_lop">
        <button type="submit">tìm</button>
    </form>
    <?php
    $ketqua = null ;
    if(isset($_GET['ten_lop'])) {
        
        if($_GET['ten_lop'] != null)
        {
            $ten_lop = $_GET['ten_lop'];
            $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
            $sql = "call xem_tat_ca_sv_1_lop('$ten_lop')";
            
            $result = mysqli_query($connect,$sql);
            $ketqua = mysqli_fetch_array($result);
            if(!$ketqua){
                echo "không có lớp này";
            }
        }
        if($_GET['ten_lop'] == null)
        {
            echo " cần nhập tên lớp";
            $ketqua = null;
        }
        
    }
    ?>

    <?php 
    if($ketqua) { ?>

    <table>
        <tr>
            <th>mã sinh viên</th>
            <th>họ tên</th>
            <th>ngày sinh</th>
            <th>tên lớp</th>
            
            
            
            
        </tr>
        
        <tr>
            
            <td><?php echo $ketqua['ma_sinh_vien'] ?></td>
            <td><?php echo $ketqua['ho_ten'] ?></td>
            <td><?php echo $ketqua['ngay_sinh'] ?></td>
            <td><?php echo $ketqua['ten_lop'] ?></td>
           

            

           
        </tr>
        
    </table>
        <?php } ?>
</body>
</html>