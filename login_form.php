<?php
@include('config.php');
session_start();
if (isset($_POST['submit'])) {
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   //  $user_type = $_POST['type'];
   $select = " SELECT * FROM accounts WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);
   print_r($result);
   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);
      print_r($row);
      if ($row['type'] == 'admin') {

         $_SESSION['admin_name'] = $row['full_name'];
         header('location:user_page.php');
         
      } elseif ($row['type'] == 'user') {

         $_SESSION['user_name'] = $row['full_name'];
         header('location:user_page.php');
      }
   } else {
      $error[] = 'Sai email hoặc mật khẩu!';
   }
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ĐĂNG NHẬP ÔNG GIÀ</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>Đăng nhập</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="Nhập vào mail của bạn">
         <input type="password" name="password" required placeholder="Nhập vào password">
         <input type="submit" name="submit" value="Đăng nhập" class="form-btn">
         <p>Bạn chưa có tài khoản? <a href="register.php">Đăng kí ngay</a></p>
      </form>

   </div>

</body>

</html>