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

$sum_monney = "select sum(it.unit_price* ind.quantity) as so_tien   from items it, invoices inv, invoice_details ind 
    where it.item_id = ind.item_id and inv.invoice_id = ind.invoice_id";
$so_tien = mysqli_query($conn, $sum_monney);
$so_tien = mysqli_fetch_array($so_tien);
$so_tien = intval($so_tien['so_tien']);

?>



<div class="dash_board px-2">
    <h1 class="head-name">THỐNG KÊ</h1>
    <div class="head-line"></div>
    <div class="container-fluid">
        <div class="row my-2 justify-content-around">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="px-3">
                    <div style="background-color: #e75811;" class="box row justify-content-between">
                        <div class="col-6">
                            <h1 class="fw-bolder"><?= $so_mon ?></h1>
                            <p class="fw-bolder text-start">Món ăn</p>
                        </div>
                        <div class="col-5 text-center">
                            <i class="big-icon fa-solid fa-mug-hot"></i>
                        </div>
                        <div class="foot-box col-12 text-center"><i class="small-icon text-white fa-solid fa-eye"></i></div>
                    </div>

                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="px-3">
                    <div style="background-color: #019159;" class="box row justify-content-between">
                        <div class="col-6">
                            <h1 class="fw-bolder"><?= $so_nhanvien ?></h1>
                            <p class="fw-bolder text-start">Nhân viên</p>
                        </div>
                        <div class="col-5 text-center">
                            <i class="big-icon fa-solid fa-users"></i>
                        </div>
                        <div class="foot-box col-12 text-center"><i class="small-icon text-white fa-solid fa-eye"></i></div>
                    </div>

                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="px-3">
                    <div style="background-color: #ff9e16;" class="box row justify-content-between">
                        <div class="col-6">
                            <h1 class="fw-bolder"><?= $so_khachhang ?></h1>
                            <p class="fw-bolder text-start">Khách hàng</p>
                        </div>
                        <div class="col-5 text-center">
                            <i class="big-icon fa-solid fa-users-viewfinder"></i>
                        </div>
                        <div class="foot-box col-12 text-center"><i class="small-icon text-white fa-solid fa-eye"></i></div>
                    </div>

                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="px-3">
                    <div style="background-color: #5e61a7" class="box row justify-content-between">
                        <div class="col-6">
                            <h1 class="fw-bolder">2</h1>
                            <p class="fw-bolder text-start">Chi nhánh</p>
                        </div>
                        <div class="col-5 text-center">
                            <i class="big-icon fa-solid fa-house-flag"></i>
                        </div>
                        <div class="foot-box col-12 text-center"><i class="small-icon text-white fa-solid fa-eye"></i></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row my-3 justify-content-around">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="px-3">
                    <div style="background-color: #2c76b5;" class="box row justify-content-between">
                        <div class="col-6">
                            <h1 class="fw-bolder"><?= $so_danhmuc ?></h1>
                            <p class="fw-bolder text-start">Danh mục</p>
                        </div>
                        <div class="col-5 text-center">
                            <i class="big-icon fa-solid fa-list"></i>
                        </div>
                        <div class="foot-box col-12 text-center"><i class="small-icon text-white fa-solid fa-eye"></i></div>
                    </div>

                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="px-3">
                    <div style="background-color: #001e40" class="box row justify-content-between">
                        <div class="col-6">
                            <h1 class="fw-bolder"><?= $so_admin ?></h1>
                            <p class="fw-bolder text-start">Nhà quản lý</p>
                        </div>
                        <div class="col-5 text-center">
                            <i style="color: #b4aba9;" class="big-icon fa-solid fa-people-roof"></i>
                        </div>
                        <div class="foot-box col-12 text-center"><i class="small-icon text-white fa-solid fa-eye"></i></div>
                    </div>

                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="px-3">
                    <div style="background-color: #27aebb;" class="box row justify-content-between">
                        <div class="col-6">
                            <h1 class="fw-bolder"><?= $so_hoadon ?></h1>
                            <p class="fw-bolder text-start">Hóa đơn</p>
                        </div>
                        <div class="col-5 text-center">
                            <i class="big-icon fa-solid fa-file-invoice-dollar"></i>
                        </div>
                        <div class="foot-box col-12 text-center"><i class="small-icon text-white fa-solid fa-eye"></i></div>
                    </div>

                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="px-3">
                    <div style="background-color: #e83260;" class="box row justify-content-between">
                        <div class="col-7">
                            <h1 class="fw-bolder"><?= $so_tien ?></h1>
                            <p class="fw-bolder text-start">Doanh thu</p>
                        </div>
                        <div class="col-5 text-center">
                            <i class="big-icon fa-solid fa-coins"></i>
                        </div>
                        <div class="foot-box col-12 text-center"><i class="small-icon text-white fa-solid fa-eye"></i></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid row px-2">
    <form method="" action="" class="container col-4 border border-1">
        <div class="container mt-2">
            <div class="row justify-content-start">
                <div class="col-md-6">
                    <label class="fw-bold" for="start_date">Ngày bắt đầu:</label>
                    <input type="date" id="start_date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="fw-bold" for="end_date">Ngày kết thúc:</label>
                    <input type="date" id="end_date" class="form-control">
                </div>
            </div>
        </div>
        <div class="container mt-2">
            <div class="row justify-content-start">
                <div class="col-md-6">
                    <label class="fw-bold" for="month">Theo tháng:</label>
                    <input type="month" id="month" class="form-control" placeholder="Chọn tháng">
                </div>
            </div>
        </div>
        <div class="container mt-2">
            <div class="row justify-content-start">
                <div class="col-md-6">
                    <label class="fw-bold" for="year">Theo năm:</label>
                    <input type="year" id="year" class="form-control" placeholder="Chọn năm">
                </div>
            </div>
        </div>
        <div class="container mt-2">
            <button type="submit" class="btn btn-success">Thống kê</button>
            <button type="reset" class="btn btn-danger">Hủy</button>
        </div>
        <hr>

        <div class="container mt-2">
            <h5>Tổng doanh thu: 10000VNĐ</h5>
            <h5>Khách hàng mua nhiều nhất: </h5>
            <h5>Món bán chạy nhất: </h5>
            <h5>Món bán ít nhất: </h5>
            <h5>Nhân viên bán nhiều nhất: </h5>
            <h5>Nhân viên bán ít nhất: </h5>
        </div>

    </form>
    <div class="container-fluid col-8">


        <div>
            <h3 class="fw-bold text-center">Hóa đơn</h3>
            <table class="table">
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
                    <tr>
                        <th scope="row">1</th>
                        <th>10/09/2022</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th>10/09/2022</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <th>10/09/2022</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>100</td>
                    </tr>

                </tbody>
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