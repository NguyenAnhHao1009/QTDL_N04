<?php
session_start();
@include 'config.php';
@include 'function.php';

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<?php
require_once __DIR__ . '/src/views/header.php';
?>

<div class="container">

   <div class="content">
      <h3>Chào, <span>user</span></h3>
      <h1>Rất vui vì gặp <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Đây là trang của ông già</p>
      <a href="../logout.php" class="btn">Đăng xuất</a>
   </div>

</div>

<?php
require_once __DIR__ . '/src/views/header.php';
?> 