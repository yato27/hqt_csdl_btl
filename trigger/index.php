<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trigger</title>
</head>
<body>
    <?php session_start();
        if( $_SESSION['level'] == 1) { 
             ?>
    <a href="after_member_insert.php">thông báo nếu thêm sinh viên không có ngày sinh</a><br>
    <a href="after_member_update.php">lưu lại địa chỉ cũ mới và thời gian chỉnh sửa</a><br>
    <a href="before_score_insert.php">điểm quá trình hoặc giữa kỳ bằng 0 thì không có điểm cuối kỳ</a><br>
    <a href="before_member_update.php">không được update số điện thoại</a><br>
    <a href="before_member_delete.php">thêm vào bảng sinh viên đã xóa trước delete sinh viên</a><br>
    <a href="after_member_delete.php">xóa 1 sinh viên thì tổng số học sinh lớp học sinh đó giảm 1</a><br>
            <?php } ?>
</body>
</html>