<!-- shop-area-start -->
<main>
<div class="shop-area mb-20">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="product-widget mb-30">
                    <h5 class="pt-title">Loại sản phẩm</h5>
                    <div class="widget-category-list mt-20">
                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                            echo '
                                <div class="single-widget-category">
                                <a href="' . $linkdm . '">' . $name . '</a> 
                            </div>
                              ';
                        }
                        ?>




                    </div>
                </div>





                <div class="product-widget mb-30">
                    <h5 class="pt-title">Sản phẩm mới</h5>
                    <div class="product__sm mt-20">
                        <ul>
                            <?php
                            $counter = 0;
                            foreach ($spnew as $sp) {

                                if ($counter < 5) {
                                    extract($sp);
                                    $hinh = $img_path . $img;
                                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            ?>
                                    <li class="product__sm-item d-flex align-items-center">
                                        <div class="product__sm-thumb mr-20">
                                            <a href=" <?= $linksp ?> ">
                                                <img src="<?= $hinh ?>">
                                            </a>
                                        </div>
                                        <div class="product__sm-content">
                                            <h5 class="product__sm-title">
                                                <a href="<?= $linksp ?>"><?= $name ?></a>
                                            </h5>
                                            <div class="product__sm-price">
                                                <span> <?= number_format((int)$price, 0, ",", ".")  ?> <u>đ</u>
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                            <?php
                                    $counter++;
                                } else {
                                    break;
                                }
                            }

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">

                <div class="product-lists-top">
                    <div class="product__filter-wrap">
                        <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="product__filter d-sm-flex align-items-center">
                                    <div class="product__col">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="FourCol-tab" data-bs-toggle="tab" data-bs-target="#FourCol" type="button" role="tab" aria-controls="FourCol" aria-selected="true">
                                                    <i class="fal fa-th"></i>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="FiveCol-tab" data-bs-toggle="tab" data-bs-target="#FiveCol" type="button" role="tab" aria-controls="FiveCol" aria-selected="false">
                                                    <i class="fal fa-list"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-content" id="productGridTabContent">
                    <div class="tab-pane fade  show active" id="FourCol" role="tabpanel" aria-labelledby="FourCol-tab">
                        <div class="tp-wrapper">
                            <div class="row g-0">
                                <?php

                                foreach ($giamsp as $sp) {


                                    extract($sp);
                                    $hinh = $img_path . $img;
                                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                ?>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href=" <?= $linksp ?> ">
                                                        <img src="<?= $hinh ?>">
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="product__content-3">
                                                <h6><a href="<?= $linksp ?>"><?= $name ?></a></h6>

                                                <div class="price mb-10">
                                                    <span> <?= number_format((int)$price, 0, ",", ".")  ?> <u>đ</u>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                               
                                                <button type="button" data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                    add to car
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                <?php

                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
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
<!-- shop-area-end -->