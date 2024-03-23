<?php
    if(isset($_POST)){
        // Xử lý thêm dữ liệu vào db;
        header('Location: /index.php');
    }

?>

<form id="register-form" action="" method="post">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>