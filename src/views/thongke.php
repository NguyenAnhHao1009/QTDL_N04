<?php
require('./src/models/thongke.php');
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
                            <input type="date" id="start_date" class="form-control" name="start_date" required>
                        </div>
                        <div class="">
                            <label class="fw-bold" for="end_date">Ngày kết thúc:</label>
                            <input type="date" id="end_date" class="form-control" name="end_date" required>
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
                    <table class="table table-striped table-hover text-center">
                        <thead>
                            <tr>
                                <th>Mã hóa đơn</th>
                                <th>Ngày tạo</th>
                                <th>Khách hàng</th>
                                <th>Người tạo</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if (!empty($ds_hoadon)) {
                                foreach ($ds_hoadon as $hd) : ?>
                                    <tr>
                                        <td><?= $hd[0] ?></td>
                                        <td><?= $hd[1] ?></td>
                                        <td><?= $hd[2] ?></td>
                                        <td><?= $hd[3] ?></td>
                                        <td><?= intval($hd[4]) ?>.000 VNĐ</td>
                                    </tr>
                            <?php endforeach;
                            } else {
                                echo "<tr>Không có gì để hiển thị</tr>";
                            }
                            ?>


                        </tbody>
                </div>


            </div>


        </div>
        <div class="row px-2">
            <table class="table table-striped table-hover text-center">
                <tr>
                    <th scope="col">Thông tin</th>
                    <th scope="col">Số liệu</th>
                </tr>
                <?php
                if (!empty($tong_doanhthu)) {
                    echo "<tr>
                    <td>Tổng doanh thu</td>
                    <td>$tong_doanhthu.000 VNĐ</td>
                    </tr>                                      
                    ";
                    if (!empty($customer_sales)) {
                        echo "<tr>
                     <td>Khách hàng mua nhiều nhất</td>
                    <td>$khach_max</td>
                     </tr> ";
                    }

                    if (!empty($mon_dat)) {
                        echo " <tr>
                       <td>Món bán chạy nhất</td>
                       <td>$mon_dat</td>
                       </tr>";
                    }
                } else {
                    echo "<td>Không có gì để hiển thị</td>
                  <td></td>";
                }
                ?>
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