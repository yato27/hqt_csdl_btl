<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function chuyển ngày sang thứ trong tuần và xem sinh viên sinh vào thứ mấy</h1>
    <?php if(isset($_GET['func_query'])){
        $value = $_GET['func_query'];
    }
            else {
                $value = '';
            } ?>
    <form action="get_day.php" method='get'>
        
        nhập câu lệnh function  get_day vào bảng sinh_vien
        <input name="func_query" value="<?php echo $value ?>">
        
        <button type='submit' >chạy</button>
    </form>
    <?php 
                
        $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
        $sql = "SELECT sinh_vien.*, get_day(ngay_sinh) as thu FROM sinh_vien";

        $array_result=mysqli_query($connect,$sql);
        if(isset($_GET['func_query'])) {
        
            if($_GET['func_query'] != null)
            {
                
                $func_query = $_GET['func_query'];
                $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
                mysqli_set_charset($connect,'utf8');
                $sql = "$func_query";
                
                mysqli_query($connect,$sql);
                $error = mysqli_error($connect);
                if(strlen($error)>0){
                    echo $error;
                }
                else{
                    echo "thành công";
                }
            }
            else
            {
                echo " cần nhập câu lệnh";
            }
        }
        $sql = "SELECT sinh_vien.*, get_day(ngay_sinh) as thu FROM sinh_vien";
        
        $array_result=mysqli_query($connect,$sql);
        
    ?>
    <table>
    <h3>bảng sv</h3>
        <tr>
            <th>mã sinh viên</th>
            <th>họ tên</th>
            <th>ngày sinh</th>
            <th>sinh vào thứ</th>
            
           
            
            
            
        </tr>
        <?php foreach($array_result as $each) { ?>
        <tr>
            
            <td><?php echo $each['ma_sinh_vien'] ?></td>
            <td><?php echo $each['ho_ten'] ?></td>
            <td><?php echo $each['ngay_sinh'] ?></td>
            <td><?php echo $each['thu'] ?></td>
            
            
           
           
        </tr>
        <?php }?>
    </table>
</body>
</html>