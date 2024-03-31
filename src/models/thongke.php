<?php

use Psr\Log\NullLogger;

try {
    if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
        $start_date = $_POST['start_date']; // Lấy ngày bắt đầu từ form
        $end_date = $_POST['end_date']; // Lấy ngày kết thúc từ form
        if (($start_date > $end_date) && !empty($_POST['start_date']) && !empty($_POST['end_date'])) {
            echo "<script>alert('Vui lòng nhập ngày bắt đầu nhỏ hơn ngày kết thúc!');</script>";
        }
        // Thực hiện câu truy vấn để lấy thông tin hóa đơn trong khoảng thời gian
        $invoices_query = "SELECT inv.invoice_id, inv.creation_time, cus.customer_name, acc.full_name, inv.total 
                        FROM invoices inv
                        JOIN customers cus ON inv.customer_id = cus.customer_id
                        JOIN accounts acc ON inv.account_id = acc.account_id
                        WHERE inv.creation_time BETWEEN '$start_date' AND '$end_date'";
        $ds_hoadon = mysqli_query($conn, $invoices_query);

        // Hiển thị kết quả
        $ds_hoadon = mysqli_fetch_all($ds_hoadon);
        // print_r($ds_hoadon);
        // Tổng doanh thu:
        $total_amout = "SELECT SUM(total) AS total_revenue FROM invoices WHERE creation_time BETWEEN '$start_date' AND '$end_date'";
        $tong_doanhthu_query = mysqli_query($conn, $total_amout);
        $tong_doanhthu_row = mysqli_fetch_array($tong_doanhthu_query);
        $tong_doanhthu = $tong_doanhthu_row[0];
        // print_r($tong_doanhthu);

        // Khách mua nhiều nhất 
        $customer_sales = "SELECT c.customer_id, c.customer_name, SUM(total) AS total_purchases
        FROM invoices i 
        JOIN customers c ON i.customer_id = c.customer_id WHERE creation_time BETWEEN '$start_date' AND '$end_date'
        GROUP BY c.customer_id
        ORDER BY total_purchases DESC
        LIMIT 1 ;
        ";
        $customer_sales_query = mysqli_query($conn, $customer_sales);
        $customer_sales_row = mysqli_fetch_array($customer_sales_query);
        $khach_max = $customer_sales_row[1];


        // Món bán chạy nhất 
        $item_hot = "SELECT it.item_name,it.item_id, SUM(ind.quantity) AS total_sold
        FROM items it
        JOIN invoice_details ind ON it.item_id = ind.item_id
        JOIN invoices i ON ind.invoice_id = i.invoice_id
        WHERE creation_time BETWEEN 'start_date' AND 'end_date'
        GROUP BY it.item_name,it.item_id
        ORDER BY total_sold DESC
        LIMIT 1;
        ";
        $item_hot_query = mysqli_query($conn, $item_hot);
        $item_hot_row = mysqli_fetch_array($item_hot_query);
        $mon_dat = $item_hot_row[0];
        print_r($mon_dat);
    } else {
        $ds_hoadon = [];
        $tong_doanhthu = [];
        $khach_max = [];
        $mon_dat = [];
    }
} catch (Exception $e) {
    $ds_hoadon = [];
    $tong_doanhthu = [];
    $khach_max = [];
    $mon_dat = [];
    header('location: /user_page.php?thongke');
}
