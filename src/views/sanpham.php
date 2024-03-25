<?php
$sql = "select * from items";
$ds_sanpham =  mysqli_query($conn, $sql);
$ds_sanpham = mysqli_fetch_all($ds_sanpham);
?>


<div class="dash_board px-2">
    <h1 class="head-name">SẢN PHẨM</h1>
    <div class="head-line"></div>
    <div class="container-fluid">
<!-- là admin thì được sửa  -->
        <?php if (isset($_SESSION['admin_name'])) : ?>
            <div class="text-end">

                <a href="user_page.php?sanpham=them" class="my-2 btn btn-success fw-bolder"><i class="fa-solid fa-file-circle-plus"></i> Thêm</a>
            </div>
        <?php endif; ?>
        <table id="myTable" class="table container-fluid text-center">
            <tr>
                <!-- <th>Mã số</th> -->
                <th onclick="sortTable(0)">Tên <i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></i></i></th>
                <th>Mô tả về sản phẩm</th>
                <th onclick="sortTable(2)">Giá <i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></i></th>
                <?php
                if (isset($_SESSION['admin_name']))
                    echo "<th>Thao tác</th>";
                else
                    echo "<th>Ngày tạo</th>";
                ?>

            </tr>
            <?php foreach ($ds_sanpham as $sp) : ?>
                <tr>
                    <td><?= $sp[1] ?></td>
                    <td><?= $sp[3] ?></td>
                    <td><?= $sp[4] ?></td>
                    <?php
                    if (isset($_SESSION['admin_name']))
                        echo '<td><a href="/user_page.php?sanpham=sua&id=' . $sp[0] . '"><i class="btn btn-outline-success fa-solid fa-pen"></i> </a>
                        <a href="/user_page.php?sanpham=xoa&id=' . $sp[0] . '"><i class="btn btn-outline-danger fa-solid fa-trash"></i></a></td>';
                    else
                        echo "<td>$sp[5]</td>";
                    ?>




                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>
</div>

</div>
</div>