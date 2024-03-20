
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang Ky</title>
    <link rel="stylesheet" href="view/css/dangnhap.css">

</head>
<body>
<a href="index.php"><img src="view/assets/img/logo/backgr.png" alt="" class="anhlogo"></a>

    <div class="container">
        <form action="kiemtradn.php?act=dangky" method="post">
            <h1>Đăng ký</h1>
            <div class="boxx">
                <input type="email" name="email"  placeholder=" " required>
                <label for="tendn">Email</label>
            </div>
            <div class="boxx">
                <input type="number" name="sdt"  placeholder=" " required>
                <label for="tendn">Số điện thoại</label>
            </div>
            <div class="boxx">
                <input type="text" name="name"  placeholder=" " required>
                <label for="tendn">Tên đăng ký</label>
            </div>
            <div class="boxx">
                <input type="text" name="pass"  placeholder=" " required>
                <label for="pass">Mật khẩu</label>
                
            </div>
            <div class="chucnang">
            <label for=""><a href="kiemtradn.php?act=dangnhap">Đăng nhập</a></label>

            </div>

          
                <input class="btn" type="submit" value="Đăng ký" name="dangky"  >
          
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