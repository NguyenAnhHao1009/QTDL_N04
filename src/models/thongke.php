<?php

require __DIR__ . '/../../config.php';

try {
    if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
        $start_date = $_POST['start_date']; // Lấy ngày bắt đầu từ form
        $end_date_string = $_POST['end_date'];
        $end_date = new DateTime($end_date_string); // Chuyển đổi chuỗi ngày thành đối tượng DateTime
        $end_date->modify('+1 day');
        $end_date = $end_date->format('Y-m-d');
        // Lấy ngày kết thúc từ form
        if (empty($start_date) || empty($end_date)) {
            echo "<script>alert('Vui lòng nhập ngày bắt đầu và ngày kết thúc!');</script>";
        } elseif ($start_date > $end_date) {
            echo "<script>alert('Ngày bắt đầu phải nhỏ hơn ngày kết thúc!');</script>";
        } else {
            // Thực hiện kết nối CSDL

            // Kiểm tra kết nối
            if ($conn->connect_error) {
                die("Kết nối thất bại: " . $conn->connect_error);
            }
            // Thực hiện câu truy vấn sử dụng prepared statements
            $procedure_call = "CALL GetInvoicesByDateRange(?, ?)";
            $stmt = $conn->prepare($procedure_call);
            $stmt->bind_param("ss", $start_date, $end_date);
            $stmt->execute();
            // Lấy kết quả
            $ds_hoadon = $stmt->get_result();
            // Xử lý kết quả
            if ($ds_hoadon->num_rows > 0) {
            } else {
                echo "<script>alert('Không có hóa đơn trong khoảng thời gian này.');</script>";
            }
            $stmt->close();
            // Thủ tục 2: 
            $procedure_call_total = "CALL GetTotalRevenue(?, ?)";
            $stmt2 = $conn->prepare($procedure_call_total);
            $stmt2->bind_param("ss", $start_date, $end_date);
            $stmt2->execute();
            $tong_doanhthu = $stmt2->get_result();
            $total_revenue=0;
            if ($tong_doanhthu->num_rows > 0) {
                $row = $tong_doanhthu->fetch_assoc();
                $total_revenue = $row['total_revenue'];
            } else {
                echo "<script>alert('Doanh thu trống trong khoảng thời gian này.');</script>";
            }
            // Đóng kết nối

            $stmt2->close();

            // Thủ tục 3:
            $procedure_call_customer = "CALL GetTopCustomerByDateRange(?, ?)";
            $stmt3 = $conn->prepare($procedure_call_customer);
            $stmt3->bind_param("ss", $start_date, $end_date);
            $stmt3->execute();
            $customer_sales_rows = $stmt3->get_result();
            // print_r($customer_sales_rows);
            if ($customer_sales_rows->num_rows > 0) {                
            } else {
                $customer_sales_rows = [];
            }           
            $stmt3->close();
             // Hàm tìm món bán chạy nhất
            $function_call_bestselling = "CALL GetBestSellingItemProcedure(?, ?)";
            $stmt4 = $conn->prepare($function_call_bestselling);
            $stmt4->bind_param("ss", $start_date, $end_date);
            $stmt4->execute();
            $mon_chay_rows = $stmt4->get_result();
    
            // Xử lý kết quả
            if ($mon_chay_rows->num_rows > 0) {                          
                
            } else {
                $mon_chay_rows = [];
            }
            $stmt4->close();
            // Thủ tục tìm nhân viên
            $function_call_account = "CALL GetTopAccountByDateRange(?, ?)";
            $stmt5 = $conn->prepare($function_call_account);
            $stmt5->bind_param("ss", $start_date, $end_date);
            $stmt5->execute();
            $name_best_staff_rows = $stmt5->get_result();
    
            // Xử lý kết quả
            if ($name_best_staff_rows->num_rows > 0) {                          
                
            } else {
                $name_best_staff_rows = [];
            }
            $stmt5->close();


            $conn->close();



        }
    }
} catch (Exception $e) {
    // Xử lý ngoại lệ
    echo "<script>alert('Đã xảy ra lỗi: " . $e->getMessage() . "');</script>";
}
