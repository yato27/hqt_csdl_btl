<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>xóa 1 sinh viên thì tổng số học sinh lớp học sinh đó giảm 1 sau khi xóa</h1>
    <?php if(isset($_GET['delete_query'])){
        $value = $_GET['delete_query'];
    }
            else {
                $value = '';
            } ?>
    <form action="after_member_delete.php" method='get'>
        
        nhập câu lệnh delete vào bảng sinh_vien
        <input name="delete_query" value="<?php echo $value ?>">
        
        <button type='submit' >chạy</button>
    </form>
    <?php 
                
        $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
        $sql = "SELECT * FROM lop";

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
        $sql = "SELECT * FROM lop";
        
        $array_result=mysqli_query($connect,$sql);
        
    ?>

<table>
    <h3>bảng lớp</h3>
        <tr>
            <th>mã lớp</th>
            <th>tên lớp</th>
            <th>mã khoa</th>
            <th>mã khóa học</th>
            <th>số lượng sv</th>
           
            
            
            
        </tr>
        <?php foreach($array_result as $each) { ?>
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











