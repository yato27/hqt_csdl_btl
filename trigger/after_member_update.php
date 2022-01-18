<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>lưu lại địa chỉ cũ mới nếu khác và thời gian chỉnh sửa sau khi chỉnh sửa sinh viên</h1>
    <?php if(isset($_GET['update_query'])){
        $value = $_GET['update_query'];
    }
            else {
                $value = '';
            } ?>
    <form action="after_member_update.php" method='get'>
        nhập câu lệnh update vào bảng sinh_vien
        <input name="update_query" value="<?php echo $value ?>">
        
        <button type='submit' >chạy</button>
    </form>
    <?php 
                
        $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
        $sql = "SELECT * FROM memberschanges";

        $array_result=mysqli_query($connect,$sql);
        if(isset($_GET['update_query'])) {
        
            if($_GET['update_query'] != null)
            {
                
                $update_query = $_GET['update_query'];
                $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
                mysqli_set_charset($connect,'utf8');
                $sql = "$update_query";
                
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
        $sql = "SELECT * FROM memberschanges";
        
        $array_result=mysqli_query($connect,$sql);
        
    ?>

    <table>
        <tr><th>mã sinh viên</th>
        <th>địa chỉ cũ</th>
        <th>địa chỉ mới</th>
    <th>thay đổi lúc</th></tr>
        <?php foreach($array_result as $each) { ?>
        <tr><td><?php echo $each['ma_sinh_vien'] ?></td>
        <td><?php echo $each['before_address'] ?></td>
        <td><?php echo $each['after_address'] ?></td>
    <td><?php echo $each['changed_at'] ?></td></tr>
        <?php } ?>
    </table>
</body>
</html>











