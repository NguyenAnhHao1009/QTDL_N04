<?php

if (isset($_GET['loai']) && $_GET['loai']=='xoa'){
try{
    $id=$_GET['id'];
    $sql="delete from category where category_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Xóa thành công');</script>";
        echo "<script>window.location.href='user_page.php?loai';</script>";
    } 
}catch(Exception $e){
    echo "<script>confirm('Không thể xóa, loại không được cấp quyền. Vui lòng thử lại bằng cách khác')</script>";
    echo "<script>window.location.href='user_page.php?loai';</script>";
}
}
?>