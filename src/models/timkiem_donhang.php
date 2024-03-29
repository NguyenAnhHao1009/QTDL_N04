<?php
$sql = "SELECT inv.invoice_id, inv.creation_time,a.full_name,c.customer_name,inv.total FROM invoices inv inner join customers c on c.customer_id=inv.customer_id inner join accounts a on a.account_id=inv.account_id where phone_number=" . trim($_GET['timkiem-donhang']);
$result = mysqli_query($conn, $sql);
$ds_donhang_timkiem = mysqli_fetch_all($result);
?>
