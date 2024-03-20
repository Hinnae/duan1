<?php

session_start();
include_once("../model/pdo.php") ;
include_once("../model/sanpham.php") ;
include_once("../model/taikhoan.php") ;
include_once("../model/danhmuc.php") ;
include_once("../model/order.php") ;
include_once("../global.php") ;
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
include_once("../admin/header.php");
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case "listCart":
            // Kiểm tra xem giỏ hàng có dữ liệu hay không
            if (!empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                $productId = array_column($cart, 'id');
                
                // Chuyển đôi mảng id thành một chuỗi để thực hiện truy vấn
                $idList = implode(',', $productId);
                
                // Lấy sản phẩm trong bảng sản phẩm theo id
                $dataDb = loadone_sanphamCart($idList);
                // var_dump($dataDb);
            }
            include "view/listCartOrder.php";
            break;
        case "sanpham":
            if ((isset($_POST['keyw']) && ($_POST['keyw'] != ""))) {
                $keyw = $_POST['keyw'];
            } else {
                $keyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($keyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "../view/sanpham.php";
            break;
        case "order":
            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                // print_r($cart);
                if (isset($_POST['order_confirm'])) {
                    $txthoten = $_POST['txthoten'];
                    $txttel = $_POST['txttel'];
                    $txtemail = $_POST['txtemail'];
                    $txtaddress = $_POST['txtaddress'];
                    $pttt = $_POST['pttt'];
                    // date_default_timezone_set('Asia/Ho_Chi_Minh');
                    // $currentDateTime = date('Y-m-d H:i:s');
                    if (isset($_SESSION['name'])) {
                        $id_user = $_SESSION['name']['id'];
                    } else {
                        $id_user = 0;
                    }
                    $idBill = addOrder($id_user, $txthoten, $txttel, $txtemail, $txtaddress, $_SESSION['resultTotal'], $pttt);
                    foreach ($cart as $item) {
                        addOrderDetail($idBill, $item['id'], $item['price'], $item['quantity'], $item['price'] * $item['quantity']);
                    }
                    unset($_SESSION['cart']);
                    $_SESSION['success'] = $idBill;
                    header("Location: index.php?act=success");
                }
include "view/order.php";
            } else {
                header("Location: index.php?act=listCart");
            }
            break;
        case "success":
            if (isset($_SESSION['success'])) {
                include 'view/success.php';
            } else {
                header("Location: index.php");
            }
            break;
        
        case 'sanphamct':
                
            if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = loadone_sanpham_cungloai($id, $iddm);
                
                include "../view/sanphamct.php";
            } else {
                include "view/home.php";/* nếu không có dữ liệu thì về home */
            }
               
            break;
        
        
        case "quenmk":
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là:" . $checkemail['pass'];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
            }
            break;
        case 'addsp':
            //kiem tra
            if(isset($_POST['themmoi']) && ($_POST["themmoi"])){
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if(isset($_POST['listok']) && ($_POST["listok"])){
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
    
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break;
    
        case 'xoasp':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
dalete_sanpham($_GET['id']);
            }
            $sql = "select * from sanpham order by id desc";
            $listsanpham = loadall_sanpham("",0); 
            include "sanpham/list.php";
            break;
    
        case 'suasp':
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
    
        case 'updatesp':
            if(isset($_POST['capnhat']) && ($_POST["capnhat"])){
                $iddm = $_POST['iddm'];
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("",0);
            include "sanpham/list.php";
            break; 
        case "bill":
            include "view/cart/bill.php";   
            break;

        case 'dskh':
            $listtaikhoan = loadall_nguoidung(); 
            include "taikhoan1/list.php";
            break;

        case 'mybill':
            include  "view/cart/mybill.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";

?>