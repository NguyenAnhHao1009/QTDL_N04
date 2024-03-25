<?php

if(isset($_GET['nhansu']) && $_GET['nhansu']=='xoa'){
    try{
    $id=$_GET['id'];
    $sql="delete from accounts where account_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Xóa thành công');</script>";
        echo "<script>window.location.href='user_page.php?nhansu';</script>";
    }
    }catch(Exception $e){
        echo "<script>confirm('Không thể xóa, tài khoản không được cấp quyền. Vui lòng thử lại bằng cách khác')</script>";
        echo "<script>window.location.href='user_page.php?nhansu';</script>";
    }
    
}

?>
