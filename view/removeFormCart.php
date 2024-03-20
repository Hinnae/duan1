<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $productId = $_POST['id'];

    if (!empty($_SESSION['cart'])) {
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));

        if ($index !== false) {
            unset($_SESSION['cart'][$index]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
        } else {
            echo 'Sản phầm ko tồn tại trong giỏ hàng';
        }
    }

} else {
    echo 'Yêu cầu không hợp lệ';
}
?>