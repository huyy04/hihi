<main class="main">
    <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big">
        <div class="home-slide home-slide1 banner d-flex align-items-center">
            <img class="slide-bg" src="img/baner1.jpg"
                 style="background-color: #ecc;" alt="home banner">
        </div><!-- End .home-slide -->

        <div class="home-slide home-slide2 banner d-flex align-items-center">
            <img class="slide-bg" src="img/baner2.jpg"
                 style="background-color: #bfcec9;" alt="home banner">
        </div><!-- End .home-slide -->
    </div><!-- End .home-slider -->

    <section class="container">
        <h2 class="section-title ls-n-15 text-center pt-2 m-b-4">Shop By Category</h2>

        <div class="owl-carousel owl-theme nav-image-center show-nav-hover nav-outer cats-slider appear-animate"
             data-animation-name="fadeInUpShorter" data-animation-delay="200" data-animation-duration="1000">
            <?php
               foreach ($danhmuc as $dm){
                   extract($dm);
                   $hinh = $hinh_path.$img;
                   echo ' <div class="product-category">
                <a href="demo3-shop.html">
                    <figure>
                        <img src="'.$hinh.'" width="273" height="273"
                             alt="category" />
                    </figure>
                    <div class="category-content">
                        <h3>'.$name.'</h3>
                        <span><mark class="count">8</mark> products</span>
                    </div>
                </a>
            </div>';
               }
            ?>
        </div>
    </section>

    <section class="bg-gray banners-section text-center">
        <div class="container py-2">
            <div class="row">
                <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                     data-animation-delay="100" data-animation-duration="1000">
                    <div class="home-banner banner banner-sm-vw mb-2">
                        <img src="assets/images/demoes/demo3/banners/home-banner1.jpg"
                             style="background-color: #ccc;" width="419" height="629" alt="Banner" />
                        <div class="banner-layer banner-layer-bottom text-left">
                            <h3 class="m-b-2">Sunglasses Sale</h3>
                            <h4 class="m-b-3">See all and find yours</h4>
                            <a href="demo3-shop.html" class="btn  btn-dark" role="button">Shop By Glasses</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                     data-animation-delay="300" data-animation-duration="1000">
                    <div class="home-banner banner banner-sm-vw mb-2">
                        <img src="assets/images/demoes/demo3/banners/home-banner2.jpg"
                             style="background-color: #ccc;" width="419" height="629" alt="Banner" />
                        <div class="banner-layer banner-layer-top ">
                            <h3 class="mb-0">Cosmetics Trends</h3>
                            <h4 class="m-b-4">Browse in all our categories</h4>
                            <a href="demo3-shop.html" class="btn  btn-dark" role="button">Shop By Glasses</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                     data-animation-delay="500" data-animation-duration="1000">
                    <div class="home-banner banner banner-sm-vw mb-2">
                        <img src="assets/images/demoes/demo3/banners/home-banner3.jpg"
                             style="background-color: #444;" width="419" height="629" alt="Banner" />
                        <div class="banner-layer banner-layer-middle">
                            <h3 class="text-white m-b-1">Fashion Summer Sale</h3>
                            <h4 class="text-white m-b-4">Browse in all our categories</h4>
                            <a href="demo3-shop.html" class="btn btn-light bg-white" role="button">Shop By
                                Fashion</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                     data-animation-delay="700" data-animation-duration="1000">
                    <div class="home-banner banner banner-sm-vw mb-2">
                        <img src="assets/images/demoes/demo3/banners/home-banner4.jpg"
                             style="background-color: #ccc;" width="419" height="629" alt="Banner" />
                        <div class="banner-layer banner-layer-bottom banner-layer-boxed">
                            <h3 class="m-b-2">UP TO 70% IN ALL BAGS</h3>
                            <h4>Starting at $99</h4>
                            <a href="demo3-shop.html" class="btn  btn-dark" role="button">Shop By Bags</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container pb-3 mb-1">
        <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">Popular Products</h2>

        <div class="row py-4">
            <?php
               foreach ($sanpham as $sp){
                   extract($sp);
                   $hinh = $hinh_path.$img;
                   $link = "index.php?act=ctsp&id=".$id;
                   echo '<div class="col-6 col-sm-4 col-md-3 col-xl-2 appear-animate" 
                     data-animation-name="fadeIn"data-animation-delay="300" data-animation-duration="1000" xmlns="http://www.w3.org/1999/html">
                <div class="product-default inner-quickview inner-icon">
                     <figure>
                        <a href="demo3-product.html">
                            <img src="' .$hinh.'" width="273"
                                 height="273" alt="productr" />
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-20%</div>
                        </div>
                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <form action="index.php?act=addcart" method="post">
                         <input type="hidden" value="'.$id.'" name="id">
                          <input type="hidden" value="'.$name.'" name="name">
                          <input type="hidden" value="'.$img.'" name="img">
                          <input type="hidden" value="'.$price.'" name="price">
                          <input type="hidden" value="1" name="soluong">
                              <input type="submit" name="addcart" class="btn-quickview" value="Thêm vào giỏ hàng">
                        </form>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo3-shop.html" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="'.$link.'">'.$name.'</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">'.$price.'đ</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
            </div>';
               }
            ?>
        </div>

        <hr class="mt-3 mb-6">

        <div class="row feature-boxes-container pt-2">
            <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInRightShorter"
                 data-animation-delay="300" data-animation-duration="1000">
                <div class="feature-box feature-box-simple text-center">
                    <i class="sicon-earphones-alt"></i>

                    <div class="feature-box-content p-0">
                        <h3 class="text-uppercase">Customer Support</h3>
                        <h5>Need Assistence?</h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna,
                            et dapibus lacus. Lorem ipsum dolor sit amet.</p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-lg-3 -->

            <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInRightShorter"
                 data-animation-delay="100" data-animation-duration="1000">
                <div class="feature-box feature-box-simple text-center">
                    <i class="sicon-credit-card"></i>

                    <div class="feature-box-content p-0">
                        <h3 class="text-uppercase">Secured Payment</h3>
                        <h5>Safe & Fast</h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna,
                            et dapibus lacus. Lorem ipsum dolor sit amet.</p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-lg-3 -->

            <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                 data-animation-delay="100" data-animation-duration="1000">
                <div class="feature-box feature-box-simple text-center">
                    <i class="sicon-action-undo"></i>

                    <div class="feature-box-content p-0">
                        <h3 class="text-uppercase">Free Returns</h3>
                        <h5>Easy & Free</h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna,
                            et dapibus lacus. Lorem ipsum dolor sit amet.</p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-lg-3 -->

            <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                 data-animation-delay="300" data-animation-duration="1000">
                <div class="feature-box feature-box-simple text-center">
                    <i class="icon-shipping"></i>

                    <div class="feature-box-content p-0">
                        <h3 class="text-uppercase">Free Shipping</h3>
                        <h5>Orders Over $99</h5>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna,
                            et dapibus lacus. Lorem ipsum dolor sit amet.</p>
                    </div><!-- End .feature-box-content -->
                </div><!-- End .feature-box -->
            </div><!-- End .col-lg-3 -->
        </div>
        <!-- End .row .feature-boxes-container-->
    </section>
</main>