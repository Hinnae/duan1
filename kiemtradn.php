<?php
session_start();
include "model/taikhoan.php";
include "model/pdo.php";


if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $name=$_POST['name'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                insert_nguoidung($name,$sdt,$email,$pass);
                $thongbao="Đã đăng ký thành công. "; 
            }
            include "view/taikhoan/dangky.php";
            break;
            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email=$_POST['email'];
                    $checkemail=checkemail($email)  ;
                    if(is_array($checkemail)){
                        $thongbao="Mật khẩu của bạn là:".$checkemail['pass'];
                    }else{
                        $thongbao="Email không tồn tại";
                    }                         
                }
                include "view/taikhoan/quenmk.php";
                break;
        case 'dangnhap':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $name=$_POST['name'];
                $pass=$_POST['pass'];
                $checkname=checkname($name,$pass);
                if(is_array($checkname)){
                   $_SESSION['name']= $checkname;
                  
                    header('Location:index.php');
                 
                }else{
                    $thongbao="Tài khoản không tồn tại.";
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;


        default:
                break;
            
        }
    } else{
        }
        

?>