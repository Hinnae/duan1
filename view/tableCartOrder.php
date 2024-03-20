<?php
session_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/danhmuc.php";
include "../model/order.php";
include "../global.php";

if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    $productId = array_column($cart, 'id');

    $idList = implode(',', $productId);

    $dataDb = loadone_sanphamCart($idList);
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

<?php
}
?>