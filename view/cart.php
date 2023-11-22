<main class="main">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table-container">
                    <table class="table table-cart">
<!--                        <tbody>-->
<!--                        <tr>-->
<!--                            <th>San pham</th>-->
<!--                            <th>Ten san pham</th>-->
<!--                            <th>Gia</th>-->
<!--                            <th>So luong</th>-->
<!--                            <th>Tong tien</th>-->
<!--                            <th>Trang thai</th>-->
<!--                        </tbody>-->
                        <tbody>
                        <?php
                        $tong = 0;
                        $i = 0;
                        if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                            foreach ($_SESSION['giohang'] as $cart) {
                                $hinh = $hinh_path . $cart[2];
                                $thanhtien = $cart[3] * $cart[4];
                                $tong += $thanhtien;
                                $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xoa"></a>';
                                echo '<tr class="product-row">
                            <td>
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="' . $hinh . '" width="80px" height="80px" alt="product">
                                    </a>

                                    <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                </figure>
                            </td>
                            <td class="product-col">
                                <h5 class="product-title">
                                    <a href="product.html">' . $cart[1] . '</a>
                                </h5>
                            </td>
                            <td>' . $cart[3] . '</td>
                            <td>
                                <div class="product-single-qty">
                                    <td>' . $cart[4] . '</td>
                                </div><!-- End .product-single-qty -->
                            </td>
                            <td><span class="subtotal-price">' . $cart[5] . '</span></td>
                            <td>' . $xoasp . '</td>
                        </tr>';
                                $i += 1;
                            }
                        }
                        echo '<tr>
                                      <td>Tong tien</td>
                                      <td>'.$tong.'</td>
                                 </tr>';
                        ?>
                        </tbody>


                        <tfoot>
                        <tr>
                            <td colspan="5" class="clearfix">
                                <div class="float-left">
                                    <div class="cart-discount">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm"
                                                       placeholder="Coupon Code" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-sm" type="submit">Apply
                                                        Coupon</button>
                                                </div>
                                            </div><!-- End .input-group -->
                                        </form>
                                    </div>
                                </div><!-- End .float-left -->

                                <div class="float-right">
                                    <a href="index.php?act=bill"><input type="submit" class="btn btn-shop btn-update-cart" value="Tiep tuc dat hang"></a>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- End .cart-table-container -->
            </div><!-- End .col-lg-8 -->

        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main>