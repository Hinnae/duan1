<?php
    extract($onesp);
?>
<!-- <link rel="stylesheet" href="view/css/chitietsp.css"> -->
<main>
<?php
        $img = $img_path . $img;
     ?>
        <!-- breadcrumb__area-start -->
        <section class="breadcrumb__area box-plr-75">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                 
                                  
                                  
                                </ol>
                              </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb__area-end -->

        <!-- product-details-start -->
        <div class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product__details-nav d-sm-flex align-items-start">
                            
                            <div class="product__details-thumb">
                                <div class="tab-content" id="productThumbContent">
                                    <div class="tab-pane fade show active" id="thumbOne" role="tabpanel" aria-labelledby="thumbOne-tab">
                                        <div class="product__details-nav-thumb w-img">
                                            <img src="<?= $img ?>" alt="" style="height: 400px; width: 400px;margin-left: 90px;">
                                        </div>
                                    </div>
                                    
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="product__details-content">
                            <h6><?= $name ?></h6>
                           
                            <div class="price mb-10">
                                <span><?= number_format((int)$price, 0, ",", ".")  ?> <u>đ</u></span>
                            </div>
                            
                            <p class="des-text mb-35"><?= $mota ?></p>

                            <div class="cart-option mb-15">
                                
                                <button data-id="<?= $id ?>" class="cart-btn" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $price ?>)">Thêm vào giỏ hàng</button>

                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        


<div class="product-details-des mt-40 mb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="product__details-des-tab">
                            <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" type="button" role="tab" aria-controls="des" aria-selected="true">Bình luận </button>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="prodductDesTaContent">
                <div class="tab-pane fade" id="aditional" role="tabpanel" aria-labelledby="aditional-tab">
                       
                    </div>
                    <div class="tab-pane fade active show" id="des" role="tabpanel" aria-labelledby="des-tab">
                    <section class="trending-product-area light-bg-s pt-25 pb-15">
    <div class="container custom-conatiner">
      
      <div class="row">
      <div class="bl">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                        });
                  
                </script>   
               
                <div class="row" id="binhluan">
                   
                </div>
</div>
      
      
      
      
  </section>
                    </div>
                    
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        
                    </div>
                </div>
            </div>
        </div>
    <!-- sanpham tuong tu va binh lua -->
    
    <div class="product-details-des mt-40 mb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="product__details-des-tab">
                            <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" type="button" role="tab" aria-controls="des" aria-selected="true">Gợi ý cho bạn </button>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="prodductDesTaContent">
                <div class="tab-pane fade" id="aditional" role="tabpanel" aria-labelledby="aditional-tab">
                       
                    </div>
                    <div class="tab-pane fade active show" id="des" role="tabpanel" aria-labelledby="des-tab">
                    <section class="trending-product-area light-bg-s pt-25 pb-15">
    <div class="container custom-conatiner">
      
      <div class="row">
      <?php
            $counter=0;
            foreach ($ransp as $sp1) {
                
              if ($counter < 6) {
                extract($sp1);
                    $hinh=$img_path.$img;
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
                    </div>
                    
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        
                    </div>
                </div>
            </div>
        </div>
<!-- het san pham tuiong tu -->

</div>




</main>
<script src="main.js"></script>
<script src="assets/js/vendor/jquery.js"></script>
      <script src="assets/js/vendor/waypoints.js"></script>
      <script src="assets/js/bootstrap-bundle.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/tweenmax.js"></script>
      <script src="assets/js/owl-carousel.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/parallax.js"></script>
      <script src="assets/js/backtotop.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/countdown.min.js"></script>
      <script src="assets/js/counterup.js"></script>
      <script src="assets/js/ui-slider-range.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/isotope-pkgd.js"></script>
      <script src="assets/js/imagesloaded-pkgd.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/main.js"></script>

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

