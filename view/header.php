<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop iphone</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="view/view/assets/css/preloader.css">
    <link rel="stylesheet" href="view/assets/css/bootstrap.css">
    <link rel="stylesheet" href="view/assets/css/meanmenu.css">
    <link rel="stylesheet" href="view/assets/css/animate.css">
    <link rel="stylesheet" href="view/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="view/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="view/assets/css/backtotop.css">
    <link rel="stylesheet" href="view/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="view/assets/css/nice-select.css">
    <link rel="stylesheet" href="view/assets/flaticon/flaticon.css">
    <link rel="stylesheet" href="view/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="view/assets/css/default.css">
    <link rel="stylesheet" href="view/assets/css/style.css">
</head>

<body>
    <?php
    ob_start(); // Bắt đầu bộ đệm đầu ra
    // Các mã PHP và HTML khác ở đây
    ?>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <header class="header d-blue-bg">

        <div class="header-mid">
            <div class="container">
                <div class="heade-mid-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                            <div class="header__info">
                                <div class="logo">
                                    <a href="index.php" class="logo-image"><img src="view/assets/img/logo/backgr.png" alt="logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                          
                                
                                    <div class="header__search-box">
                                        <form action="index.php?act=sanpham" method="post">
                                            <input class="search-input" type="text" name="kyw" placeholder="Tìm kiếm cho...">
                                            <input type="submit" class="button" name="timkiem" value="Tìm Kiếm">
                                        </form>
                                        
                                    </div>
                                   
                               
                          
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                            <div class="header-action">
                                <div class="block-userlink">
                                    <span class="icon-link">
                                        <i class="flaticon-user"></i>
                                        <span class="text">
                                            <?php
                                            if (isset($_SESSION['name'])) {
                                                extract($_SESSION['name']);
                                            ?>
                                                <span class="sub">Xin chào <?= $name ?> </span>
                                                <a href="index.php?act=thoat">thoat</a></span>
                                    </span>



                                <?php


                                            } else {

                                                echo '  <a class="sub" href="kiemtradn.php?act=dangnhap"> Đăng nhập </a>
Tài khoản của tôi </span>
</a>';
                                            } ?>

                                </div>
                                <?php
                                  if (isset($_SESSION['name'])) {
                                    extract($_SESSION['name']);
                            if($role==1){

                          
                        ?>
                       <div class="block-wishlist action">
                                    <a class="icon-link icon-link-2" href="admin">
                                    
                                  
                                    <span class="text">
                                    <span class="sub">Vào trang</span>
                                    ADMIN </span>
                                    </a>
                                </div>
                        <?php 
                     } else {

                      
                    }
                    
                    }?>
                                

                                <div class="block-cart action">
                                    <a class="icon-link" href="index.php?act=listCart">
                                        <i class="flaticon-shopping-bag"></i>

                                        <span class="count" id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                                        <span class="text">

                                            <span class="sub">Giỏ hàng</span>
                                        </span>

                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 col-md-6 col-3">
                        <div class="header__bottom-left d-flex d-xl-block align-items-center">
                            <div class="side-menu d-lg-none mr-20">
                                <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                            </div>
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul>

                                        <li><a href="index.php">Trang chủ</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Bill</a></li>
 <li><a href="blog.html">danh mục <i class="far fa-angle-down"></i></a>
                                        <ul class="submenu">
                                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm ="index.php?act=sanpham&iddm=".$id;
                            echo '    <li>
                            <a href="'.$linkdm.'">'.$name.'</a>
                            </li>';
                        }
                        ?>
                                        </ul>
                                    </li>
                                    
                                </ul>

                                        

                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

