<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$connect = mysqli_connect('localhost','root','','hqt_csdl_btl');
mysqli_set_charset($connect,'utf8');
$sql = "select * from login where usename ='$username' and password ='$password'";

$result_array= mysqli_query($connect,$sql);
$row = mysqli_num_rows($result_array);




if($row ===1){
    $sql = "select level from login where usename ='$username'";
    $id = mysqli_query($connect,$sql);
    $result = mysqli_fetch_array($id);
    
    session_start();
    $_SESSION['level'] = $result['level'];
    $_SESSION['username'] = $username;
    header("location:/hqt_csdl_btl/home.php");
    exit;
  
}
else{
    echo "sai gì rồi";
}