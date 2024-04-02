<?php
$sql = "SELECT count_items_func() AS so_mon"; //Gọi hàm
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$so_mon = $row['so_mon'];

$sql = "SELECT count_users_func() AS so_nhanvien"; //Gọi hàm
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$so_nhanvien = $row['so_nhanvien'];

$sql = "SELECT count_customers_func() AS so_khachhang"; //Gọi hàm
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$so_khachhang = $row['so_khachhang'];

$sql = "SELECT count_categories_func() AS so_danhmuc"; //Gọi hàm
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$so_danhmuc = $row['so_danhmuc'];

$sql = "SELECT count_admins_func() AS so_admin";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$so_admin = $row['so_admin'];

$sql = "SELECT count_invoices_func() AS so_hoadon";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$so_hoadon = $row['so_hoadon'];

$sql = "SELECT sum_money_func() AS so_tien";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$so_tien = $row['so_tien'];

?>



<div class="dash_board px-2">
    <h1 class="head-name">DASH BOARD</h1>
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
        </div>

        <div class="row my-3 justify-content-around">

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
            <div class="col-6">
                <div class="px-3">
                    <div style="background-color: #e83260;" class="box row justify-content-between">
                        <div class="col-7">
                            <h1 class="fw-bolder"><?= intval($so_tien) ?></h1>
                            <p class="fw-bolder text-start">Tổng doanh thu</p>
                        </div>
                        <div class="col-5 text-center">
                            <i class="big-icon fa-solid fa-coins"></i>
                        </div>
                        <div class=" foot-box col-12 text-center"><i class="small-icon text-white fa-solid fa-eye"></i></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>