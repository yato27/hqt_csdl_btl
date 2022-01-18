<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['username'])){
            
    ?>
    <a href="trigger">trigger</a><br>
    <a href="view">view</a><br>
    <a href="store_procedure">stored-procedure</a><br>
    <a href="user_defined_function">user-defined function</a><br>
    <a href="logout.php">log out</a>
    <?php } 
   
    ?>
    
</body>
</html>