
<div class="page-banner-area page-banner-height-2" data-background="view/assets/img/banner/page-banner-4.jpg " style="background-color: #263C97;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-banner-content text-center">
                    <h4 class="breadcrumb-title">Thanh toán</h4>
                    <div class="breadcrumb-two">
                        <nav>
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="breadcrumb-menu">
                                    <li class="breadcrumb-trail">
                                        <a href="index.html"><span>Trang chủ</span></a>
                                    </li>
                                    <li class="trail-item">
                                        <span>Thanh toán</span>
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

<!-- thanhtoanew -->

<section class="checkout-area pb-85">
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkbox-form">
                        <h3>Chi tiết thanh toán</h3>
                        <div class="row">


                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Nhập tên của bạn: <span class="required">*</span></label>
                                    <div><input type="text" name="txthoten" id="" placeholder="" required <?php
                                                                                                            if (isset($_SESSION['name'])) {
                                                                                                                extract($_SESSION['name']);
                                                                                                                echo 'value="' . $name . '"';  ?> <?php  } else {
                                                                                                                echo 'value=""';
                                                                                                            } ?>></div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Số điện thoại <span class="required">*</span></label>
                                    <div><input type="text" name="txttel" id="" placeholder="" required <?php
                                                                                                        if (isset($_SESSION['name'])) {
                                                                                                            extract($_SESSION['name']);
                                                                                                            echo 'value="' . $sdt . '"';  ?> <?php  } else {
                                                                                                            echo 'value=""';
                                                                                                        } ?>></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Email: <span class="required">*</span></label>
                                    <div><input type="email" name="txtemail" id="" placeholder="" required <?php
                                                                                                            if (isset($_SESSION['name'])) {
                                                                                                                extract($_SESSION['name']);
                                                                                                                echo 'value="' . $email . '"';  ?> <?php  } else {
                                                                                                                echo 'value=""';
                                                                                                            } ?>></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required"></span></label>
                                    <div><input type="text" name="txtaddress" id="" placeholder="" required></div>
                                </div>
                            </div>
                            <h3>Phương thức thanh toán</h3>
                            <p><input type="radio" name="pttt" id="" value="1" required> Thanh toán khi giao hàng</p>
                            <p><input type="radio" name="pttt" id="" value="2" required> Chuyển khoản ngân hàng</p>


                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="your-order mb-30 ">
                        <h3>Đơn hàng của bạn</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-total">Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($cart as $item) {
                                    ?>


                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <?php echo $item['name']; ?> <strong class="product-quantity"> × <?php echo $item['quantity']; ?></strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount"><?php echo number_format($item['quantity'] * $item['price'], 0, ",", "."); ?> ₫</span>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                                <tfoot>


                                    <tr class="order-total">
                                        <th>Tổng giá</th>
                                        <td><strong><span class="amount"><?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>


                        <div class="order-button-payment mt-20">

                            <input type="submit" class="tp-btn-h1" value="Xác nhận đặt hàng" name="order_confirm">

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
</section>

<!-- ket thuc -->