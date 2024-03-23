<?php
session_start();
@include 'config.php';



if(!isset($_SESSION['admin_name'])){
   header('location:../login_form.php');
}

?>
   <?php
require_once __DIR__ . '/../src/views/header.php';
?>
<div class="container">

   <div class="content">
      <h3>Chào, <span>admin</span></h3>
      <h1>Rất vui vì <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Đến với Quản trị viên</p>
      <a href="../login_form.php" class="btn">Đăng nhập</a>
      <a href="../register.php" class="btn">Đăng ký</a>
      <a href="../logout.php" class="btn">Đăng xuất</a>
   </div>

</div>
