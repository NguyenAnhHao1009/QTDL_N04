<?php
$sql = "CALL SearchInvoiceByInvoiceId(" . trim($_GET['timkiem-donhang']) . ")";
$result = mysqli_query($conn, $sql);
$ds_donhang_timkiem = mysqli_fetch_all($result);
