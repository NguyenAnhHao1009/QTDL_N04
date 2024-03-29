<?php
$sql = "SELECT * FROM  category";
$ds_loai = mysqli_query($conn, $sql);
$ds_loai = mysqli_fetch_all($ds_loai);

?>

<div class="dash_board px-2">
    <h1 class="head-name">LOẠI</h1>
    <div class="head-line"></div>
    <div class="container-fluid">
        <!-- là admin thì được sửa  -->
        <?php if (isset($_SESSION['admin_id'])) : ?>
            <div class="text-end">

                <a href="user_page.php?loai=them" class="my-2 btn btn-success fw-bolder"><i class="fa-solid fa-file-circle-plus"></i> Thêm</a>
            </div>
        <?php endif; ?>
        <table id="myTable" class="table container-fluid text-center table-hover table-striped table-bordered">
            <tr>
                <!-- <th>Mã số</th> -->
                <th onclick="sortTable(0)">Mã loại<i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></i></i></th>
                <th onclick="sortTable(1)">Tên<i href="" class=" fw-bolder"><i class="p-0 btn fa-solid fa-sort"></i></i></th>
                <?php
                if (isset($_SESSION['admin_id']))
                    echo "<th>Thao tác</th>";
                ?>
            </tr>
            <?php foreach ($ds_loai as $lo) : ?>
                <tr>
                    <td><?= $lo[0] ?></td>
                    <td><?= $lo[1] ?></td>
                    <?php
                    if (isset($_SESSION['admin_id']))
                        echo '<td><a href="/user_page.php?loai=sua&id=' . $lo[0] . '"><i class="btn btn-outline-success fa-solid fa-pen"></i> </a>
                        <a href="/user_page.php?loai=xoa&id=' . $lo[0] . '"><i class="btn btn-outline-danger fa-solid fa-trash"></i></a></td>';

                    ?>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>
</div>

</div>
</div>