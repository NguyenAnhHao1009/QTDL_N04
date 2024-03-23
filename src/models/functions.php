<?php

function checkLogin()
{
    if (isset($_SESSION['role'])) {
        return $_SESSION['role'];
    } else {
        return false;
    }
}

function login($usn, $pwd)
{
    $dbhost = 'localhost';
    $dbname = 'ong_gia_cf';
    $dbuser = 'root';
    $dbpass = 'Z!L9@Wfd';

    $dsn = "mysql:host={$dbhost};dbname={$dbname}";
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $PDO = new PDO($dsn, $dbuser, $dbpass, $options);

    $sql = 'select *from tai_khoan where ten_dang_nhap = ? and mat_khau =?';
    $stmt = $PDO->prepare($sql);
    $stmt->execute([$usn, $pwd]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        $_SESSION['role'] = $result[0]['loai'];
        return true;
    } else {
        return false;
    }
}
