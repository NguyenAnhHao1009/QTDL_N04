<?php
session_start();
@include 'config.php';
@include 'function.php';

if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
}
?>
<?php
require_once __DIR__ . '/src/views/header.php';
?>

<?php
if (isset($_GET['dashboard'])) {
   switch ($_GET['dashboard']) {
         // case 'dashboard':
         //    require_once __DIR__. '/src/views/dashboard.php';
         //    break;
         // Các trường hợp xử lý với yêu cầu get
      default:
         require_once __DIR__ . '/src/views/dashboard.php';
         break;
   }
}
// phan san pham 
//Thêm sản phẩm
if (!isset($_POST['item_id']) && isset($_POST['item_name']) && isset($_POST['category_id']) && isset($_POST['description']) && isset($_POST['unit_price'])) {
   $item_name = $_POST['item_name'];
   $category_id = $_POST['category_id'];
   $description = $_POST['description'];
   $unit_price = $_POST['unit_price'];

   $insert = "INSERT INTO items (item_name, category_id, description, unit_price) values('$item_name','$category_id','$description', '$unit_price')";
   mysqli_query($conn, $insert);
   header('location:user_page.php?sanpham');
}

//Sửa sản phẩm
if (isset($_POST['item_id']) &&  isset($_POST['item_name']) && isset($_POST['category_id']) && isset($_POST['description']) && isset($_POST['unit_price'])) {
   $item_id = $_POST['item_id'];
   $item_name = $_POST['item_name'];
   $category_id = $_POST['category_id'];
   $description = $_POST['description'];
   $unit_price = $_POST['unit_price'];

   $update = "UPDATE items 
           SET item_name = '$item_name', category_id = $category_id, description = '$description', unit_price = $unit_price
           WHERE item_id = $item_id";

   mysqli_query($conn, $update);
   header('location:user_page.php?sanpham');
}

if (isset($_GET['sanpham'])) {
   switch ($_GET['sanpham']) {
      case 'them':
         require_once __DIR__ . '/src/models/them_sanpham.php';
         break;
      case 'xoa':
         require_once __DIR__ . '/src/models/xoa_sanpham.php';
         break;
      case 'sua':
         $id_item = $_GET['id'];
         require_once __DIR__ . '/src/models/sua_sanpham.php';
         break;
      case 'ten_tang_dan':

      default:
         require_once __DIR__ . '/src/views/sanpham.php';
         break;
   }
}
if (isset($_GET['donhang'])) {
   switch ($_GET['donhang']) {
         // case 'dashboard':
         //    require_once __DIR__. '/src/views/dashboard.php';
         //    break;
         // Các trường hợp xử lý với yêu cầu get
      default:
         require_once __DIR__ . '/src/views/donhang.php';
         break;
   }
}
if (isset($_GET['thanhtoan'])) {
   switch ($_GET['thanhtoan']) {
         // case 'dashboard':
         //    require_once __DIR__. '/src/views/dashboard.php';
         //    break;
         // Các trường hợp xử lý với yêu cầu get
      default:
         require_once __DIR__ . '/src/views/thanhtoan.php';
         break;
   }
}
// Them nhan su
if (!isset($_POST['account_id']) && isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['type'])) {
   $full_name = htmlspecialchars($_POST['full_name']);
   $email =htmlspecialchars($_POST['email']) ;
   $password = md5($_POST['password']);
   $type = htmlspecialchars($_POST['type']);

   $insert = "INSERT INTO accounts (full_name, email, password, type) values('$full_name','$email','$password', '$type')";
   mysqli_query($conn, $insert);
   header('location:user_page.php?nhansu');
}
// Sửa nhân sự
if (isset($_POST['account_id']) &&  isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['type'])) {
   $account_id =  htmlspecialchars($_POST['account_id']);
   $full_name = htmlspecialchars($_POST['full_name']);
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $type = $_POST['type'];

   $update = "UPDATE accounts 
           SET full_name = '$full_name', email =  '$email', password = '$password', type = '$type' 
           WHERE account_id = $account_id";

   mysqli_query($conn, $update);
   header('location:user_page.php?nhansu');
}

// Phan nhan su --> Dieu huong 
if (isset($_GET['nhansu'])) {
   switch ($_GET['nhansu']) {
      case 'them':
         require_once __DIR__ . '/src/models/them_nhansu.php';
         break;
      case 'xoa':
         require_once __DIR__ . '/src/models/xoa_nhansu.php';
         break;
      case 'sua':
         $id_item = $_GET['id'];
         require_once __DIR__ . '/src/models/sua_nhansu.php';
         break;
      case 'ten_tang_dan':

      default:
         require_once __DIR__ . '/src/views/nhansu.php';
         break;
   }
}




if (isset($_GET['thongke'])) {
   switch ($_GET['thongke']) {
         // case 'dashboard':
         //    require_once __DIR__. '/src/views/dashboard.php';
         //    break;
         // Các trường hợp xử lý với yêu cầu get
      default:
         require_once __DIR__ . '/src/views/thongke.php';
         break;
   }
}
?>


<?php
require_once __DIR__ . '/src/views/footer.php';
?> 