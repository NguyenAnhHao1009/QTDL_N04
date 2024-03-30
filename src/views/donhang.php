<?php
if (!isset($ds_donhang_timkiem)) {
    $sql = "select inv.invoice_id, inv.creation_time , accounts.full_name , customers.customer_name, inv.total from 
    invoices inv inner join customers on inv.customer_id = customers.customer_id INNER JOIN accounts ON inv.account_id = accounts.account_id order by inv.creation_time desc;";
    $ds_hoadon =  mysqli_query($conn, $sql);
    $ds_hoadon = mysqli_fetch_all($ds_hoadon);
} else {
    $ds_hoadon = $ds_donhang_timkiem;
}


?>
<div class="dash_board px-2">
    <h1 class="head-name">ĐƠN HÀNG</h1>

    <?php

    if (isset($_SESSION['tao_don_hang_thanh_cong'])) {
        echo '<h4 class="fw-bolder text-center text-success">' . $_SESSION['tao_don_hang_thanh_cong'] . '</h4>';
        unset($_SESSION['tao_don_hang_thanh_cong']);
    };
    if (isset($_SESSION['xoa_don_hang_thanh_cong'])) {
        echo '<h4 class="fw-bolder text-center text-success">' . $_SESSION['xoa_don_hang_thanh_cong'] . '</h4>';
        unset($_SESSION['xoa_don_hang_thanh_cong']);
    };

    ?>

    <div class="head-line"></div>
    <div class="container-fluid row justify-content-between">
        <form action="user_page.php?" method="GET" class="d-flex col-8 my-2" role="search">
            <input class="form-control me-2" type="text" placeholder="Nhập số điện thoại khách" name='timkiem-donhang' aria-label="Search" required>
            <button class="btn btn-outline-success" type="submit">Tìm</button>
        </form>   
        <div class="text-end col-4">
            <a href="user_page.php?donhang=them" class="my-2 btn btn-success fw-bolder"><i class="fa-solid fa-file-circle-plus"></i> Tạo mới hóa đơn</a>
        </div>
        <!-- Bảng hiển thị đơn hàng  -->
        <table id="myTable" class="table container-fluid text-center table-hover table-striped table-bordered">
            <tr>
                <!-- <th>Mã số</th> -->
                <th onclick="sortTable(0)">ID Hóa đơn <i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></i></i></th>
                <th onclick="sortTable(0)">Ngày tạo <i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></i></th>
                <th onclick="sortTable(2)">Người lập <i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></i></th>
                <th  onclick="sortTable(0)">Tên khách <i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></th>
                <th onclick="sortTable(0)">Số tiền <i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></th>
                <th>Thao tác</th>
            </tr>
            <?php foreach ($ds_hoadon as $hd) : ?>
                <tr>
                    <td><?= $hd[0] ?></td>
                    <td><?= $hd[1] ?></td>
                    <td><?= $hd[2] ?></td>
                    <td><?= $hd[3] ?></td>
                    <td><?= $hd[4] ?>.000 VNĐ</td>
                    <td>
                        <a href="/user_page.php?donhang=xoa&id=<?= $hd[0] ?>"><i class="btn btn-outline-danger fa-solid fa-trash"></i></a>
                        <a href="/user_page.php?donhang=in&id=<?= $hd[0] ?>"><i class="btn btn-outline-primary fa-solid fa-print"></i></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</div>

</div>
</div>