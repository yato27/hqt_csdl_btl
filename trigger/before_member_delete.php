<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>thêm vào bảng sinh viên đã xóa trước khi delete sinh viên</h1>
    <?php if(isset($_GET['delete_query'])){
        $value = $_GET['delete_query'];
    }
            else {
                $value = '';
            } ?>
    <form action="before_member_delete.php" method='get'>
        
        nhập câu lệnh delete trong bảng sinh_vien
        <input name="delete_query" value="<?php echo $value ?>">
        
        <button type='submit' >chạy</button>
    </form>
    <?php 
                
        $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
        $sql = "SELECT * FROM sinh_vien";

        $array_result=mysqli_query($connect,$sql);
        if(isset($_GET['delete_query'])) {
        
            if($_GET['delete_query'] != null)
            {
                
                $delete_query = $_GET['delete_query'];
                $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
                mysqli_set_charset($connect,'utf8');
                $sql = "$delete_query";
                
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
        $sql = "SELECT * FROM sinh_vien_bi_xoa";
        
        $array_result=mysqli_query($connect,$sql);
        
    ?>

<table>
    <h3>bảng sinh viên bị xóa</h3>
        <tr>
            <th>mã sinh viên</th>
            <th>họ tên</th>
            <th>ngày sinh</th>
            <th>dân tộc</th>
            <th>mã lớp</th>
            <th>địa chỉ</th>
            <th>số điện thoại</th>
            
            
            
        </tr>
        <?php foreach($array_result as $each) { ?>
        <tr>
            
            <td><?php echo $each['ma_sinh_vien'] ?></td>
            <td><?php echo $each['ho_ten'] ?></td>
            <td><?php echo $each['ngay_sinh'] ?></td>
            <td><?php echo $each['dan_toc'] ?></td>
            <td><?php echo $each['ma_lop'] ?></td>
            <td><?php echo $each['dia_chi'] ?></td>
            <td><?php echo $each['sdt'] ?></td>
           
           
        </tr>
        <?php }?>
    </table>
</body>
</html>











