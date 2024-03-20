<main>
    <?php
    if (empty($dataDb)) {
        echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
    } else {
    ?>
        <div class="page-banner-area page-banner-height-2" data-background="view/assets/img/banner/page-banner-4.jpg " style="background-color: #263C97;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-banner-content text-center">
                            <h4 class="breadcrumb-title">Giỏ hàng</h4>
                            <div class="breadcrumb-two">
                                <nav>
                                    <nav class="breadcrumb-trail breadcrumbs">
                                        <ul class="breadcrumb-menu">
                                            <li class="breadcrumb-trail">
                                                <a href="index.html"><span>Trang chủ</span></a>
                                            </li>
                                            <li class="trail-item">
                                                <span>Giỏ hàng</span>
                                            </li>
                                        </ul>
                                    </nav>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-content table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <td>STT</td>
                        <th class="product-thumbnail">Images</th>
                        <th class="cart-product-name">Product</th>
                        <th class="product-price">Unit Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Total</th>
                        <th class="product-remove">Remove</th>
                    </tr>
                </thead>
                <tbody id="order">
                    <?php
                    $sum_total = 0;
                    foreach ($dataDb as $key => $product) :
                        $quantityInCart = 0;
                        foreach ($_SESSION['cart'] as $item) {
                            if ($item['id'] == $product['id']) {
                                $quantityInCart = $item['quantity'];
                                break;
                            }
                        }
                    ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td class="product-thumbnail">
                                <img src="<?= $img_path, $product['img'] ?>" alt="<?= $product['name'] ?>" style="width: 100px; height: auto">
                            </td>
                            <td class="product-name"><?= $product['name'] ?></td>
                            <td class="product-price"><?= number_format((int)$product['price'], 0, ",", ".")  ?> <u>đ</u></td>
                            <td class="product-quantity">

                                <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id'] ?>" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
                            </td>
                            <td class="product-subtotal">
                                <?= number_format((int)$product['price'] * (int)$quantityInCart, 0, ",", ".") ?> <u>đ</u>
                            </td>
                            <td class="product-remove">
                                <button onclick="removeFormCart(<?= $product['id'] ?>)"><i class="fa fa-times"></i></button>

                            </td>
                        </tr>
                    <?php
                        $sum_total += ((int)$product['price'] * (int)$quantityInCart);

                        $_SESSION['resultTotal'] = $sum_total;
                    endforeach;
                    ?>
                    <tr>
                <td colspan="5" align="center">
                    <h2>Tổng tiền hàng:</h2>
                </td>
                <td colspan="2" align="center">
                    <h2>
                        <span>
                            <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                        </span>
                    </h2>
                </td>
            </tr>
        </div>
        

        </tbody>
        </table>
        <form action="index.php?act=order" method="post">
        <input class="tp-btn-h1" type="submit" style="padding:10px;" name="order" value="Đặt Hàng">
    </form>
        <div class="row justify-content-end">
            <div class="col-md-5">
                <div class="cart-page-total">
                    
                    <form action="index.php?act=order" method="post">
                    </form>
                </div>
            </div>
        </div>
        <br>

    <?php
    }
    ?>
</main>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function updateQuantity(id, index) {
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        $.ajax({
            type: 'POST',
            url: './view/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('view/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/removeFormCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    // Sau khi cập nhật thành công
                    $.post('view/tableCartOrder.php', function(data) {
                        $('#order').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>