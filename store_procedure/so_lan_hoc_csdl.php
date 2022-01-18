<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xem 1 sinh viên đã học lại bao nhiêu lần môn hqt csdl</h1>
    <form action="so_lan_hoc_csdl.php" method='get'>
        nhập mã sinh viên
        <input type="number" name="id">
        <button type="submit">tìm</button>
    </form>
    <?php

    if(isset($_GET['id'])) {
        
        if($_GET['id'] != null)
        {
            $id = $_GET['id'];
            $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
            $sql = "call so_lan_hoc_csdl($id)";
            
            $result = mysqli_query($connect,$sql);
            $ketqua = mysqli_fetch_array($result);
            if(!$ketqua){
                echo "không có sinh viên này ";
                
            }
        }
        else
        {
            echo " cần nhập mã sinh viên";
        }
    }
    ?>

    <?php 
    if(isset($id) and $ketqua) { ?>

    <table>
        <tr>
            <th>mã sinh viên</th>
            <th>họ tên</th>
            <th>ngày sinh</th>
            <th>tên lớp</th>
            <th>môn học</th>
            <th>lần học</th>
            
            
            
        </tr>
        
        <tr>
            
            <td><?php echo $ketqua['ma_sinh_vien'] ?></td>
            <td><?php echo $ketqua['ho_ten'] ?></td>
            <td><?php echo $ketqua['ngay_sinh'] ?></td>
            <td><?php echo $ketqua['ten_lop'] ?></td>
            <td><?php echo $ketqua['ten_mon_hoc'] ?></td>
            <td><?php echo $ketqua['lan_hoc'] ?></td>

            

           
        </tr>
        
    </table>
        <?php } ?>
</body>
</html>