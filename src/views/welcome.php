

<?php

if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
    require_once __DIR__ . '/../src/partial/header.php';
    if (isset($_GET['dash_board'])) {
        require_once __DIR__ . '/../src/partial/dashboard.php';
    } else
    if (isset($_GET['product_list'])) {
        require_once __DIR__ . '/../src/partial/productList.php';
    } else
    if (isset($_GET['sales'])) {
        require_once __DIR__ . '/../src/partial/sales.php';
    } else 
    if (isset($_GET['report'])) {
        require_once __DIR__ . '/../src/partial/report.php';
    } else if (isset($_GET['logout'])) {
        require_once __DIR__ . '/../src/partial/logout.php';
    } else {
        require_once __DIR__ . '/../src/partial/error.php';
    }
    require_once __DIR__ . '/../src/partial/footer.php';
}
?>