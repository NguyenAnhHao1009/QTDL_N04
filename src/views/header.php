<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ông Già Nè</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body class="row">
    <div class="nav-side col-2 p-0">
        <div class="logo p-1">
            <!-- <a href="index.html"> -->
            <!-- <img src="images/logo.png" alt="logo"> -->
            <h3 class="text-center text-white">LOGO NÈ</h3>
            <!-- </a> -->
        </div>

        <div id="navs" class="text-center pt-5 p-0">
            <div class="container-fluid">
                <a href="index.php?action=dash_board">Dash Board</a>
            </div>
            <div class="container-fluid">
                <a href="index.php?action=product_list">Products List</a>
            </div>
            <div class="container-fluid">
                <a href="index.php?action=sales">Sales</a>
            </div>
            <div class="container-fluid">
                <a href="index.php?action=report">Daily Sales Report</a>
            </div>
            <?php
            if (isset($_SESSION['admin'])) :
            ?>
                <div class="container-fluid text-start px-3">
                    <h5 class="m-2">Manager</h5>
                </div>
                <div class="container-fluid">
                    <a href="index.php?action=categorieslist">Categories List</a>
                </div>
                <div class="container-fluid">
                    <a href="index.php?action=userlist">Users List</a>
                </div>
                <div class="container-fluid">
                    <a href="index.php?action=setting">Setting</a>
                </div>

            <?php endif; ?>
            <div class="container-fluid logout-btn">
                <a href="index.php?logout">Log out</a>
            </div>
            <div class="container-fluid logout-btn">
                <a href="">Tài khoản : <?= $_SESSION['admin'] ?? $_SESSION['user'] ?>

                </a>
            </div>
        </div>

    </div>
    <div class="main col-10 p-0">