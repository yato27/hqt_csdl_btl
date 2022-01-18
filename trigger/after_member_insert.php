<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>thông báo nếu thêm sinh viên không có ngày sinh sau khi thêm</h1>
    <?php if(isset($_GET['insert_query'])){
        $value = $_GET['insert_query'];
    }
            else {
                $value = '';
            } ?>
    <form action="after_member_insert.php" method='get'>
        nhập câu lệnh insert vào bảng sinh_vien
        <input name="insert_query" rows="4" cols="50" value="<?php echo $value ?>">
        
        <button type='submit' >chạy</button>
    </form>
    <?php 
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
                   
                echo  nl2br ("thêm thành công \n");
                $sql = "SELECT MAX(ma_sinh_vien) FROM sinh_vien";
                $array_result=mysqli_query($connect,$sql);
                
                $msv1= mysqli_fetch_array($array_result);
                $sql = "SELECT MAX(ma_sinh_vien) FROM thong_bao";
                $array_result=mysqli_query($connect,$sql);
                $msv2=mysqli_fetch_array($array_result);
                if($msv1 == $msv2){
                    echo " hãy cập nhật ngày sinh";
                }
                
                    
                
            }
            else
            {
                echo " cần nhập câu lệnh";
            }
        }
    ?>
</body>
</html>