<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function hiển thị số sinh viên không ở hà nội</h1>
    <?php if(isset($_GET['func_query'])){
        $value = $_GET['func_query'];
    }
            else {
                $value = '';
            } ?>
    <form action="sv_khac_hn.php" method='get'>
        
         câu lệnh function select sv_khac_hn() 
        
        
        <button name="button" >chạy</button>
    </form>
    <?php 
        
        $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
            mysqli_set_charset($connect,'utf8');
        
      
       
                
                
                $connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
                mysqli_set_charset($connect,'utf8');
                $sql = "select sv_khac_hn()";
                
                $result = mysqli_query($connect,$sql);
                if($result){
                    $array_result = mysqli_fetch_array($result);
                }
               
                $error = mysqli_error($connect);
                if(strlen($error)>0){
                    echo $error;
                }
               
            
        
        // $sql = "SELECT sinh_vien.*, get_day(ngay_sinh) as thu FROM sinh_vien";
        
        // $array_result=mysqli_query($connect,$sql);
        
    ?>
    <?php if(isset($_GET['button'])) { ?>
    <table>
    <h3>kết quả</h3>
        <tr>
            <th>số lượng sinh viên không ở hà nội</th>
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