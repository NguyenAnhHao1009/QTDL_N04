
<?php

require_once __DIR__ . '/../src/models/functions.php';

session_start();

if(checkLogin()==false){
    require_once __DIR__ . '/../src/views/login.php';
    exit();
}

if(!empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(login($username, $password)){
        header('Location: index.php');
        exit();
    }
}


// Nếu không có yêu cầu nào được thực hiện, hiển thị trang đăng nhập
header("Location: index.php");
exit;
?>

