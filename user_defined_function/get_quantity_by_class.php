<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function lấy số lượng học sinh trong 1 lớp theo tên lớp</h1>
    <?php if(isset($_GET['func_query'])){
        $value = $_GET['func_query'];
    }
            else {
                $value = '';
            } ?>
    <form action="get_quantity_by_class.php" method='get'>
        
        nhập câu lệnh function select get_quantity_by_class('ten_lop') vào bảng lop
        <input name="func_query" value="<?php echo $value ?>">
        
        <button type='submit' >chạy</button>
    </form>
    <?php 
        
        $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
        
      
        if(isset($_GET['func_query'])) {
        
            if($_GET['func_query'] != null)
            {
                
                $func_query = $_GET['func_query'];
                $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
                mysqli_set_charset($connect,'utf8');
                $sql = "$func_query";
                
                $result = mysqli_query($connect,$sql);
                if($result){
                    $array_result = mysqli_fetch_array($result);
                }
               
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
        // $sql = "SELECT sinh_vien.*, get_day(ngay_sinh) as thu FROM sinh_vien";
        
        // $array_result=mysqli_query($connect,$sql);
        
    ?>
    <?php if(isset($array_result)) { ?>
    <table>
    <h3>kết quả</h3>
        <tr>
            <th>số học sinh</th>
            <!-- <th>họ tên</th>
            <th>ngày sinh</th>
            <th>sinh vào thứ</th> -->
            
           
            
            
            
        </tr>
        
        <tr>
            
            <td><?php echo $array_result['0']  ?></td>
            <!--  -->
            
            
           
           
        </tr>
        
    </table>
    <?php } ?>
</body>
</html>