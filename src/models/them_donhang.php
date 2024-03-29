<?php
if (isset($_GET['donhang']) && $_GET['donhang'] == 'them') :
?>
    <style>
        #sales-panel {
            height: 70vh;
        }

        #panel-left,
        #item-list {
            background: rgb(255 255 255 / 17%);
        }

        #item-list {
            height: 60%;
        }
    </style>
    <div class="px-2 mt-2 py-3">
        <div class="container-fluid">
            <div class="card shadow blur">
                <div class="card-header bg-primary text-white">
                    <p class="h3 fw-bolder">Tạo hóa đơn mới </p>
                </div>

                <div class="card-body">
                    <div class="container-fluid">
                        <form action="user_page.php?donhang" method="POST" id="sale-form">
                            <div class="row">
                                <div class="form-group  pt-3">
                                    <label for="customer_name">Tên khách hàng:</label>
                                    <input required type="text" class="form-control" id="customer_name" name="customer_name" required>
                                </div>
                                <div class="form-group  pt-3 mb-3">
                                    <label for="phone_number">Số điện thoại</label>
                                    <input required maxlength="100" class="form-control" id="phone_number" name="phone_number" rows="3"></input>
                                </div>
                            </div>

                            <div class="border rounded-0 shadow bg-gradient-navy px-1 py-1" id="sale-panel">
                                <div class="d-flex h-100 w-100">
                                    <div class="col-7 px-0 h-100" id="panel-left">
                                        <div class="card card-primary bg-transparent border-0 h-100 card-tabs round-0">
                                            <div class="card-header bg-gradient-dark p-0 p-1">
                                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                                    <?php
                                                    $has_active = false;
                                                    $category = $conn->query("SELECT * FROM `category` order by category_name asc");
                                                    $product = $conn->query("SELECT * FROM `items` order by `item_name` asc");
                                                    $prod_arr = [];
                                                    while ($row = $product->fetch_array()) {
                                                        $prod_arr[$row['category_id']][] = $row;
                                                    }
                                                    $cat_arr = array_column($category->fetch_all(MYSQLI_ASSOC), 'category_name', 'category_id');
                                                    foreach ($cat_arr as $k => $v) :
                                                    ?>
                                                        <li class="nav-item">
                                                            <a class="nav-link <?= (!$has_active) ? 'active' : '' ?>" id="custom-tabs-one-home-tab" data-toggle="pill" href="#cat-tab-<?= $k ?>" role="tab" aria-controls="cat-tab-<?= $k ?>" aria-selected="<?= (!$has_active) ? 'true' : 'false' ?>"><?= $v ?></a>
                                                        </li>
                                                    <?php
                                                        $has_active = true;
                                                    endforeach;
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                                    <?php
                                                    $has_active = false;
                                                    foreach ($cat_arr as $k => $v) :
                                                    ?>
                                                        <div class="tab-pane fade <?= (!$has_active) ? 'active show' : '' ?>" id="cat-tab-<?= $k ?>" role="tabpanel" aria-labelledby="cat-tab-<?= $k ?>-tab">
                                                            <div class="row">
                                                                <?php if (isset($prod_arr[$k])) : ?>
                                                                    <?php foreach ($prod_arr[$k] as $row) : ?>
                                                                        <div class=" col-lg-3 col-md-4 col-sm-12 col-xs-12 px-2 py-3">
                                                                            <a href="javascript:void(0)" class="card rounded-pill text-dark text-decoration-none prod-item" data-price="<?= $row['unit_price'] ?>" data-id="<?= $row['item_id'] ?>">
                                                                                <div class="card-body text-center">
                                                                                    <?= $row['item_name'] ?>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    <?php
                                                        $has_active = true;
                                                    endforeach;
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- hết card  -->
                                        </div>

                                    </div>
                                    <div class="col-5 h-100">
                                        <table class="table table-bordered table-striped mb-0">
                                            <colgroup>
                                                <col width="20%">
                                                <col width="45%">
                                                <col width="25%">
                                                <col width="10%">
                                            </colgroup>
                                            <thead>
                                                <tr class="bg-gradient-navy-dark">
                                                    <th class="text-center px-2 py-1">Số lượng</th>
                                                    <th class="text-center px-2 py-1">Tên món</th>
                                                    <th class="text-center px-2 py-1">Thành tiền</th>
                                                    <th class="text-center px-2 py-1"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                        <div id="item-list" class="overflow-auto">
                                            <table class="table table-bordered table-striped" id="product-list">
                                                <colgroup>
                                                    <col width="20%">
                                                    <col width="45%">
                                                    <col width="25%">
                                                    <col width="10%">
                                                </colgroup>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                        <h3 class="w-100 d-flex">
                                            <div class="col-auto">Tổng cộng: </div>
                                            <div class="col-auto flex-shrink-1 flex-grow-1 truncate-1 text-right" id="amount"><?= isset($amount) ? $amount : ' 0.00' ?></div>
                                        </h3>
                                        <h3 class="d-flex w-100 align-items-center">
                                            <div class="col-4">Khách trả: </div>
                                            <div class="col-8">
                                                <input type="text" pattern="[0-9\.]*$" class="form-control form-control-lg rounded-0 text-right" id="tendered" name="tendered" value="<?= isset($tendered) ? str_replace(",", "", $tendered) : '0' ?>" required />
                                            </div>
                                        </h3>
                                        <h3 class="d-flex w-100 align-items-center">
                                            <div class="col-4">Còn lại: </div>
                                            <div class="col-8">
                                                <input type="text" pattern="[0-9\.]*$" class="form-control form-control-lg rounded-0 text-right" id="change" value="<?= isset($amount) && isset($tendered) ? ($tendered - $amount) : '0' ?>" readonly />
                                            </div>
                                        </h3>
                                        <h3 class="d-flex w-100 align-items-center">
                                            <div class="col-4">Phương thức trả: </div>
                                            <div class="col-8">
                                                <select name="payment_type" id="payment_type" class="form-control rounded-0" required="required">
                                                    <option value="1" <?= isset($payment_type) && $payment_type == 1 ? "selected" : "" ?>>Tiền mặt</option>
                                                    <option value="2" <?= isset($payment_type) && $payment_type == 2 ? "selected" : "" ?>>Chuyển khoản</option>
                                                </select>
                                            </div>
                                        </h3>
                                        <input type="text" id="payment_code" class="form-control form-control-sm rounded-0 d-none" name="payment_code" value="<?= isset($payment_code) ? $payment_code : "" ?>" placeholder="Payment Code">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer py-2 text-right">
                    <button class="btn btn-primary rounded-0" form="sale-form">Tạo</button>
                    <?php if (!isset($id)) : ?>
                        <a class="btn btn-default border rounded-0" href="./user_page.php?donhang">Hủy</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
<script>
  function calc_change() {
        var amount = $('[name="amount"]').val()
        var tendered = $('[name="tendered"]').val()
        amount = amount > 0 ? amount : 0;
        tendered = tendered > 0 ? tendered : 0;
        var change = parseFloat(tendered) - parseFloat(amount)
        $('#change').val(parseFloat(change).toLocaleString('en-US'))
    }
    function calc_total_amount() {
        var total = 0;
        $('#product-list tbody tr').each(function() {
            var qty = $(this).find('[name="product_qty[]"]').val()
            qty = qty > 0 ? qty : 0
            total += (parseFloat($(this).find('[name="product_price[]"]').val()) * parseFloat(qty))
        })
        $('[name="amount"]').val(parseFloat(total))
        $('#amount').text(parseFloat(total).toLocaleString('en-US'))
        calc_change()
    }
    function calc_product() {
        var total = 0;

        $('#product-list tbody tr').each(function() {
            var qty = $(this).find('[name="product_qty[]"]').val()
            qty = qty > 0 ? qty : 0
            total += (parseFloat($(this).find('[name="product_price[]"]').val()) * parseFloat(qty))
        })
        $('#product_total').text(parseFloat(total).toLocaleString('en-US'))
        calc_total_amount()
    }
    $(function() {
        $('body').addClass('sidebar-collapse')
        $('#payment_type').change(function() {
            var type = $(this).val()
            if (type == 1) {
                $('#payment_code').addClass('d-none').attr('required', false)
            } else {
                $('#payment_code').removeClass('d-none').attr('required', true)
            }
        })
        $('#product-list tbody tr').find('.rem-product').click(function() {
            var tr = $(this).closest('tr')
            if (confirm("Are you sure to remove " + (tr.find('.product_name').text()) + " from product list?") === true) {
                tr.remove()
                calc_product()
            }
        })
        $('#product-list tbody tr').find('[name="product_qty[]"]').on('input change', function() {
            var tr = $(this).closest('tr')
            var price = tr.find('[name="product_price[]"]').val()
            var qty = $(this).val()
            qty = qty > 0 ? qty : 0
            price = price > 0 ? price : 0
            var total = parseFloat(qty) * parseFloat(price)
            tr.find('.product_total').text(parseFloat(total).toLocaleString())
            calc_product()

        })
        $('#tendered').on('input', function() {
            calc_change()
        })
        $('.prod-item').click(function() {
            var id = $(this).attr('data-id')
            if ($('#product-list tbody tr input[name="product_id[]"][value="' + id + '"]').length > 0) {
                alert("Product already on the list.")
                return false;
            }
            var name = ($(this).find('.card-body').text()).trim()
            var price = $(this).attr('data-price')
            var tr = $($('noscript#product-clone').html()).clone()
            tr.find('input[name="product_id[]"]').val(id)
            tr.find('input[name="product_price[]"]').val(price)
            tr.find('.product_name').text(name)
            tr.find('.product_price').text('x ' + parseFloat(price).toLocaleString())
            tr.find('.product_total').text(parseFloat(price).toLocaleString())
            $('#product-list tbody').append(tr)
            calc_product()
            tr.find('.rem-product').click(function() {
                if (confirm("Are you sure to remove " + name + " from product list?") === true) {
                    tr.remove()
                    calc_product()
                }
            })
            tr.find('[name="product_qty[]"]').on('input change', function() {
                var qty = $(this).val()
                qty = qty > 0 ? qty : 0
                var total = parseFloat(qty) * parseFloat(price)
                tr.find('.product_total').text(parseFloat(total).toLocaleString())
                calc_product()

            })
        })
        $('#sale-form').submit(function(e) {
            e.preventDefault();
            var _this = $(this)
            $('.err-msg').remove();
            
        })
    })
</script>