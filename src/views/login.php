
<?php
    if(isset($error_login)){
        echo "<div style='color: red'>{$error_login}</div>";
    }

?>



<form action="" method="post">
    <input type="text" name="username-login" placeholder="Ten dang nhap" value=''>
    <input type="password" name="password" placeholder="Mat khau" value=''>
    <input type="submit" value="Login">
    <a href="index.php?register">dangKy</a>
</form>