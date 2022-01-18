<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>nếu điểm quá trình hoặc giữa kì bằng 0 thì không có điểm cuối kỳ</h1>
    <?php if(isset($_GET['insert_query'])){
        $value = $_GET['insert_query'];
    }
            else {
                $value = '';
            } ?>
    <form action="before_score_insert.php" method='get'>
        nhập câu lệnh insert vào bảng ket_qua
        <input name="insert_query" value="<?php echo $value ?>">
        
        <button type='submit' >chạy</button>
    </form>
    <?php 
                
        $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
        $sql = "SELECT * FROM ket_qua";

        $array_result=mysqli_query($connect,$sql);
        if(isset($_GET['insert_query'])) {
        
            if($_GET['insert_query'] != null)
            {
                $insert_query = $_GET['insert_query'];
                $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
                mysqli_set_charset($connect,'utf8');
                $sql = "$insert_query";
                
                mysqli_query($connect,$sql);
                $error = mysqli_error($connect);
                    if(isset($error))
                        {
                            
                            echo $error;
                        };
                   
                echo  nl2br ("cập nhật thành công thành công \n");
                
                
                
                
                    
                
            }
            else
            {
                echo " cần nhập câu lệnh";
            }
        }
        $sql = "SELECT * FROM ket_qua";
        
        $array_result=mysqli_query($connect,$sql);
        
    ?>

    <table>
        <tr><th>mã sinh viên</th>
        <th>mã môn học</th>
        <th>lần học</th>
    <th>điểm quá trình</th>
<th>điểm giữa kỳ</th>
<th>điểm cuối kỳ</th></tr>
        <?php foreach($array_result as $each) { ?>
        <tr><td><?php echo $each['ma_sinh_vien'] ?></td>
        <td><?php echo $each['ma_mon_hoc'] ?></td>
        <td><?php echo $each['lan_hoc'] ?></td>
    <td><?php echo $each['diem_qua_trinh'] ?></td>
<td><?php echo $each['diem_giua_ky'] ?></td>
<td><?php echo $each['diem_cuoi_ky'] ?></td></tr>
        <?php } ?>
    </table>
</body>
</html>