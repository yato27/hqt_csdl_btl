<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>tìm khóa học trong khoảng thời gian</h1>
    <form action="khoa_hoc_trong_khoang_tg.php" method='get'>
        
        năm bắt đầu
        <input type="number" name='small'>
        năm kết thúc
        <input type="number" name='big'>
        <input type="submit">
    </form>

    <?php 
    $row = -1;
    $result = null;
    if(isset($_GET['small'],$_GET['big'])){
        
        $small= $_GET['small'];
        $big= $_GET['big'];
        if($small and $big){
            $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
            $sql= "call tim_khoa_hoc_trong_khoang_thoi_gian('$small','$big')";
            
            $result= mysqli_query($connect,$sql);
            
                $row= mysqli_num_rows($result);
                    
        }
        else{
            echo "nhập dữ liệu đi";
        }      
        
        
        
       
    }
    
   
    ?>
<?php if($result) {

     ?>
<table>
    <h3>những khóa học đó là</h3>
        <tr>
            <th>mã khóa học</th>
            <th>năm bắt đầu</th>
            <th>năm kết thúc</th>
            <th>tên khóa học</th>
            
            
            
        </tr>
        <?php foreach($result as $each) { ?>
        <tr>
            
            <td><?php echo $each['ma_khoa_hoc'] ?></td>
            <td><?php echo $each['nam_bat_dau'] ?></td>
            <td><?php echo $each['nam_ket_thuc'] ?></td>
            <td><?php echo $each['ten_khoa_hoc'] ?></td>
           
           
           
        </tr>
            <?php  }?>
    </table>
    <?php } 
        if(!$row){
            echo "không có kết quả";
        }
   ?>
   
</body>
</html>
