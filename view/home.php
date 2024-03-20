
  <!-- slider-area-start -->
  <div class="slider-area">
    <div class="swiper-container slider__active">
      <div class="slider-wrapper swiper-wrapper">
        <div class="single-slider swiper-slide slider-height d-flex align-items-center" id="slidenenthunhiemla" data-background="view/assets/img/slider/02-slide-3.jpg" style="background-color: #263C97;">
          <div class="container">
            <div class="row">
              <div class="col-xl-5">
                <div class="slider-content">
                  <div class="slider-top-btn" data-animation="fadeInLeft" data-delay="1.5s">
                    <a href="#" class="st-btn b-radius">Siêu giảm giá</a>
                  </div>
                  <h2 data-animation="fadeInLeft" data-delay="1.7s" class="pt-15 slider-title pb-5">GIẢM ĐẾN 30% CỦA <br> DÒNG IPHONE MỚI NHẤT</h2>
                  <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.9s">Giảm đến 30% và miễn phí ship</p>
                  <div class="slider-bottom-btn mt-75">
                    <a data-animation="fadeInUp" data-delay="1.15s" href="index.php?act=sanpham&iddm=42" class="st-btn-b b-radius">Tìm hiểu ngay</a>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div><img src="view/assets/img/slider/backgr12.png" alt=""></div>
        </div><!-- /single-slider -->

      </div>
    </div>
  </div>
  <!-- slider-area-end -->

  <!-- trending-product-area-start -->
  <section class="trending-product-area light-bg-s pt-25 pb-15">
    <div class="container custom-conatiner">
      <div class="row">
        <div class="col-xl-12">
          <div class="section__head d-flex justify-content-between mb-30">
            <div class="section__title section__title-2">
              <h5 class="st-titile">Sản phẩm</h5>
            </div>
            <div class="button-wrap button-wrap-2">
              <a href="index.php?act=shop">Tất cả sản phẩm <i class="fal fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $counter = 0;
        foreach ($spnew as $sp) {


          if ($counter < 6) {
            extract($sp);
            $hinh = $img_path . $img;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
        ?>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
              <div class="product__item product__item-2 b-radius-2 mb-20">
                <div class="product__thumb fix">
                  <div class="product-image w-img">
                    <a href=" <?= $linksp ?> ">
                      <img src="<?= $hinh ?>">
                    </a>
                  </div>


                </div>
                <div class="product__content product__content-2">
                  <h6><a href="<?= $linksp ?>"><?= $name ?></a></h6>

                  <div class="price">
                    <span> <?= number_format((int)$price, 0, ",", ".")  ?> <u>đ</u>
                    </span>
                  </div>
                </div>
                <div class="product__add-cart text-center">
                  <?php
                  extract($sp);
                  ?>
                  <button type="button" data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                    add to car
                  </button>

                </div>
              </div>
            </div>
        <?php
            $counter++;
          } else {
            break;
          }
        }

        ?>





  </section>
  <!-- trending-product-area-end -->





  <!-- banner__area-start -->
  <section class="banner__area light-bg-s pt-40 pb-10">
    <div class="container custom-conatiner">
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12">
          <div class="banner__item p-relative w-img mb-30">
            <div class="banner__img b-radius-2">
              <a href="index.php?act=sanpham&iddm=43"><img src="view/assets/img/banner/backkkk1.png" alt=""></a>
            </div>
            <div class="banner__content banner__content-2">
              <h6><a href="index.php?act=sanpham&iddm=43">Macbook <br> Siêu giảm giá</a></h6>
              <p class="sm-p">Giảm -20%</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12">
          <div class="banner__item p-relative mb-30 w-img">
            <div class="banner__img b-radius-2">
              <a href="index.php?act=sanpham&iddm=42"><img src="view/assets/img/banner/backkkk3.png" alt=""></a>
            </div>
            <div class="banner__content banner__content-2">
              <h6><a href="index.php?act=sanpham&iddm=42">Iphone <br>Mẫu mới nhất </a></h6>
              <p class="sm-p">Giảm -15%</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12">
          <div class="banner__item p-relative mb-30 w-img">
            <div class="banner__img b-radius-2">
              <a href="index.php?act=sanpham&iddm=44"><img src="view/assets/img/banner/backkkk2.png" alt=""></a>
            </div>
            <div class="banner__content banner__content-2">
              <h6><a href="index.php?act=sanpham&iddm=44">Apple Watch <br>Giá cực hời </a></h6>
              <p class="sm-p">Giảm -20%</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner__area-end -->
  <section class="trending-product-area light-bg-s pt-25 pb-15">
    <div class="container custom-conatiner">
      <div class="row">
        <div class="col-xl-12">
          <div class="section__head d-flex justify-content-between mb-30">
            <div class="section__title section__title-2">
              <h5 class="st-titile">Gợi ý cho bạn</h5>
            </div>
            <div class="button-wrap button-wrap-2">
              <a href="index.php?act=shop">Tất cả sản phẩm <i class="fal fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $counter = 0;
        foreach ($ransp as $sp1) {

          if ($counter < 6) {
            extract($sp1);
            $hinh = $img_path . $img;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
        ?>

            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2">
              <div class="product__item product__item-2 b-radius-2 mb-20">
                <div class="product__thumb fix">
                  <div class="product-image w-img">
                    <a href=" <?= $linksp ?> ">
                      <img src="<?= $hinh ?>">
                    </a>
                  </div>


                </div>
                <div class="product__content product__content-2">
                  <h6><a href="<?= $linksp ?>"><?= $name ?></a></h6>

                  <div class="price">
                    <span><?= number_format((int)$price, 0, ",", ".")  ?> <u>đ</u></span>
                  </div>
                </div>
                <div class="product__add-cart text-center">
                  <?php
                  extract($sp1);
                  ?>
                  <button type="button" data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)" class="cart-btn-3 product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                    add to car
                  </button>

                </div>
              </div>
            </div>
        <?php
            $counter++;
          } else {
            break;
          }
        }

        ?>





  </section>

</main>
<script src="main.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  let totalProduct = document.getElementById('totalProduct');

  function addToCart(productId, productName, productPrice) {

    $.ajax({
      type: 'POST',
      url: 'view/addToCart.php',
      data: {
        id: productId,
        name: productName,
        price: productPrice
      },
      success: function(response) {
        totalProduct.innerText = response;
        alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!');
      },
      error: function(error) {
        console.log(error);
      }
    });
  }
</script>
