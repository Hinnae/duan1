<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure that the necessary POST data is set
    if (isset($_POST['id'], $_POST['name'], $_POST['price'])) {
        // Lấy dữ liệu từ ajax đẩy lên
        $productId = $_POST['id'];
        $productName = $_POST['name'];
        $productPrice = $_POST['price'];

        // Initialize cart if not set
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));

        if ($index !== false) {
            $_SESSION['cart'][$index]['quantity'] += 1;
        } else {
            // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
            $product = [
                'id' => $productId,
                'name' => $productName,
                'price' => $productPrice,
                'quantity' => 1
            ];
            $_SESSION['cart'][] = $product;
        }

        // Trả về số lượng sản phẩm của giỏ hàng
        echo count($_SESSION['cart']);
    } else {
        echo 'Thiếu dữ liệu POST';
    }
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>
