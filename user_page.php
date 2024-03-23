<?php
session_start();
@include 'config.php';
@include 'function.php';

if(!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}
?>
<?php
require_once __DIR__ . '/src/views/header.php';
?>

<?php
   if(isset($_GET['dashboard'])){
      require_once __DIR__. '/src/views/dashboard.php';
   }
?>



<?php
require_once __DIR__ . '/src/views/header.php';
?> 