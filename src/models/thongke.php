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
            // Đóng kết nối
            $stmt->close();
            $conn->close();
        }
    }
} catch (Exception $e) {
    // Xử lý ngoại lệ
    echo "<script>alert('Đã xảy ra lỗi: " . $e->getMessage() . "');</script>";
}
