<?php
$count_items = 'select count(*) as so_mon from items';
$so_mon = mysqli_query($conn, $count_items);
$so_mon = mysqli_fetch_array($so_mon);
$so_mon = $so_mon['so_mon'];

$count_users = "select count(*) as so_nhanvien from accounts where type = 'user'";
$so_nhanvien = mysqli_query($conn, $count_users);
$so_nhanvien = mysqli_fetch_array($so_nhanvien);
$so_nhanvien = $so_nhanvien['so_nhanvien'];

$count_cusomter = "select count(*) as so_khachhang from customers";
$so_khachhang = mysqli_query($conn, $count_cusomter);
$so_khachhang = mysqli_fetch_array($so_khachhang);
$so_khachhang = $so_khachhang['so_khachhang'];

$count_category = "select count(*) as so_danhmuc from category";
$so_danhmuc = mysqli_query($conn, $count_category);
$so_danhmuc = mysqli_fetch_array($so_danhmuc);
$so_danhmuc = $so_danhmuc['so_danhmuc'];

$count_admin = "select count(*) as so_admin from accounts where type='admin'";
$so_admin = mysqli_query($conn, $count_admin);
$so_admin = mysqli_fetch_array($so_admin);
$so_admin = $so_admin['so_admin'];

$count_invoices = "select count(*) as so_hoadon from invoices ";
$so_hoadon = mysqli_query($conn, $count_invoices);
$so_hoadon = mysqli_fetch_array($so_hoadon);
$so_hoadon = $so_hoadon['so_hoadon'];

$sum_monney = "select sum(it.unit_price* ind.quantity) as so_tien from items it, invoices inv, invoice_details ind 
    where it.item_id = ind.item_id and inv.invoice_id = ind.invoice_id";
$so_tien = mysqli_query($conn, $sum_monney);
$so_tien = mysqli_fetch_array($so_tien);
$so_tien = intval($so_tien['so_tien']);

?>



<div class="dash_board px-2">
    <h1 class="head-name">THỐNG KÊ</h1>
    <div class="head-line"></div>
    <div class="container-fluid">
        <div class="row px-2">
            <form method="POST" action="" class="col-2 border border-1">
                <div class="">
                    <div class="row justify-content-start">
                        <h3 class="fw-bold text-center">Chọn</h3>
                        <div class="">
                            <label class="fw-bold" for="start_date">Ngày bắt đầu:</label>
                            <input type="date" id="start_date" class="form-control">
                        </div>
                        <div class="">
                            <label class="fw-bold" for="end_date">Ngày kết thúc:</label>
                            <input type="date" id="end_date" class="form-control">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success mt-2 mr-2">Thống kê</button>
                            <button type="reset" class="btn btn-danger mt-2 mr-2">Hủy</button>
                        </div>

                    </div>
                </div>
                <!-- Thống kê theo tiêu chí    -->
            </form>
            <div class="container-fluid col-8">
                <div>
                    <h3 class="fw-bold text-center">Hóa đơn</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Mã hóa đơn</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Người tạo</th>
                                <th scope="col">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
                                $start_date = $_POST['start_date']; // Lấy ngày bắt đầu từ form
                                $end_date = $_POST['end_date']; // Lấy ngày kết thúc từ form
                                if ($start_date > $end_date) {
                                    echo "<script>alert('Vui lòng nhập ngày bắt đầu nhỏ hơn ngày kết thúc!');</script>";
                                }
                                // Thực hiện câu truy vấn để lấy thông tin hóa đơn trong khoảng thời gian
                                $invoices_query = "SELECT inv.invoice_id, inv.creation_time, cus.customer_name, acc.full_name, inv.total 
                                                FROM invoices inv
                                                JOIN customers cus ON inv.customer_id = cus.customer_id
                                                JOIN accounts acc ON inv.account_id = acc.account_id
                                                WHERE inv.creation_time BETWEEN '$start_date' AND '$end_date'";
                                $result = mysqli_query($conn, $invoices_query);
    
                                // Hiển thị kết quả
                                $row = mysqli_fetch_all($result);
                                
                                print_r($row);
                                if ($row<=0) {echo "<td>Không có gì để hiển thị</td>";} ;
    
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $row['invoice_id'] . "</td>";
                                    echo "<td>" . $row['creation_time'] . "</td>";
                                    echo "<td>" . $row['customer_name'] . "</td>";
                                    echo "<td>" . $row['full_name'] . "</td>";
                                    echo "<td>" . $row['total'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr>Không có gì để hiển thị</tr>";
                            }
                            // Thực hiện câu truy vấn để lấy thông tin hóa đơn trong khoảng thời gian
                            
                            ?>

                        </tbody>
                </div>


            </div>


        </div>
        <div class="row px-2">
            <table class="table table-info">
                <tr>
                    <th scope="col">Thông tin</th>
                    <th scope="col">Số liệu</th>
                </tr>
            </table>
        </div>
    </div>
</div>



</div>
</div>

</div>
</div>

<!-- Link tới các tập tin JavaScript của Bootstrap và DatePicker -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>