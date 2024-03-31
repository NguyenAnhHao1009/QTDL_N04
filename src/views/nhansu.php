<?php
@include('config.php');
@include('src/models/functions.php');
checkAdmin();

$sql = "select * from accounts";
$ds_taikhoan =  mysqli_query($conn, $sql);
$ds_taikhoan = mysqli_fetch_all($ds_taikhoan);
?>
<div class="dash_board px-2">
    <h1 class="head-name">NHÂN SỰ</h1>
    <div class="head-line"></div>
    <div class="container-fluid">
        <?php if (isset($_SESSION['admin_id'])) : ?>
            <div class="text-end">

                <a href="user_page.php?nhansu=them" class="my-2 btn btn-success fw-bolder"><i class="fa-solid fa-file-circle-plus"></i> Thêm users</a>
            </div>
        <?php endif; ?>
        <!-- HIEN THI BANG NHAN SU  -->
        <table id="myTable" class="table container-fluid text-center table-hover table-striped table-bordered">
            <tr>
                <!-- <th>Mã số</th> -->
                <th>ID <i href="" class=" fw-bolder"></i></i></th>
                <th onclick="sortTable(1)">Tên <i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></i></th>
                <th onclick="sortTable(2)">email <i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></i></th>
                <?php
                if (isset($_SESSION['admin_id']))
                    echo "<th>Thao tác</th>";
                ?>
                <th>Quyền</th>
            </tr>
            <?php foreach ($ds_taikhoan as $tk) : ?>
                <tr>
                    <td><?= $tk[0] ?></td>
                    <td><?= $tk[1] ?></td>
                    <td><?= $tk[2] ?></td>
                    <?php
                    if (isset($_SESSION['admin_id']))
                        echo '<td><a href="/user_page.php?nhansu=sua&id=' . $tk[0] . '"><i class="btn btn-outline-success fa-solid fa-pen"></i> </a>
                        <a href="/user_page.php?nhansu=xoa&id=' . $tk[0] . '"><i class="btn btn-outline-danger fa-solid fa-trash"></i></a></td>';
                    else

                    ?>
                    <td><?= $tk[4] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>
</div>

</div>
</div>