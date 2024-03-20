
    <title>Quen mat khau</title>
    <link rel="stylesheet" href="view/css/dangnhap.css">

</head>
<body>
    
    <a href="index.php"><img src="view/assets/img/logo/backgr.png" alt="" class="anhlogo"></a>
    <div class="container">
        <form action="kiemtradn.php?act=quenmk" method="post">
            <h1>quên mật khẩu</h1>
           
            <div class="boxx">
                <input type="email" name="email"  placeholder=" " required>
                <label for="email">Email</label>
            </div>
            
            <div class="chucnang">
            <label for=""><a href="kiemtradn.php?act=dangnhap">Đăng nhập</a></label>
            </div>

           
                <input class="btn" type="submit" value="Gửi" name="guiemail"  >
           
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

