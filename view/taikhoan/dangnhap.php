
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang Nhap</title>
    <link rel="stylesheet" href="view/css/dangnhap.css">

</head>
<body>
    
    <a href="index.php"><img src="view/assets/img/logo/backgr.png" alt="" class="anhlogo"></a>
    <div class="container">
        <form action="kiemtradn.php?act=dangnhap" method="post">
            <h1>Đăng nhập</h1>
           
            <div class="boxx">
                <input type="text" name="name"  placeholder=" " required>
                <label for="tendn">Tên đăng nhập</label>
            </div>
            <div class="boxx">
                <input type="password" name="pass"  placeholder=" " required>
                <label for="pass">Mật khẩu</label>
                
            </div>
            <div class="chucnang">
            <label for=""><a href="kiemtradn.php?act=dangky">Chưa có tài khoản?</a></label>
            <label for="" class="mnnn"><a href="index.php?act=quenmk">Quên mật khẩu</a></label>

           
            </div>

           
                <input class="btn" type="submit" value="Đăng nhập" name="dangnhap"  >
           
            </form>
        <h2 class="thongbao">
                            <?php

                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                }

                            ?>
      </h2>
      
    </div>
    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
            </ul>
    </div >
</body>

</html>

    
</body>
</html>