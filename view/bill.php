<div class="col-lg-4" style="margin: 0 auto">
    <form action="index.php?act=billconfirm" method="post">
        <div class="cart-summary">
        <h3>Thông tin</h3>

        <table class="table table-totals">
            <tbody>
            <?php
                 if (isset($_SESSION['name'])){
                     $user = $_SESSION['name']['name'];
                     $email = $_SESSION['name']['email'];
                     $sdt = $_SESSION['name']['sdt'];
                     $diachi = $_SESSION['name']['diachi'];
                 }else{
                     $user = "";
                     $email ="";
                     $sdt = "";
                     $diachi = "";
                 }
            ?>
            <tr>
                <td colspan="2" class="text-left">
                    <div class="form-group form-group-sm">
                        <label>Họ và tên</label>
                        <div class="">
                            <input style="width: 400px" type="text" name="name" value="<?=$user?>">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label>Email</label>
                        <div class="">
                            <input style="width: 400px" type="text" name="email" value="<?=$email?>">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label>Số điện thoại</label>
                        <div class="">
                            <input style="width: 400px" type="text" name="sdt" value="<?=$sdt?>">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label>Địa chỉ nhận hàng</label>
                        <div class="">
                            <input style="width: 400px"  type="text" name="diachi" value="<?=$diachi?>">
                        </div>
                    </div>
                </td>
            </tr>

            <tr style="font-weight: bold;padding: 20px">
                <td>San pham</td>
                <td>Ten san pham</td>
                <td>Gia</td>
                <td>Sl</td>
                <td>Tong</td>
            </tr>
            <?php
            $tong  = 0;
            $i = 0;
            if (isset($_SESSION['giohang']) && $_SESSION['giohang'] > 0) {
                foreach ($_SESSION['giohang'] as $cart) {
                    $hinh = $hinh_path . $cart[2];
                    $thanhtien = $cart[3] * $cart[4];
                    $tong = $tong + $thanhtien;
                    echo '<tr>
                                              <td><img src="' . $hinh . '" alt="product" width="80px" height="80px"></td>
                                              <td>' . $cart[1] . '</td>
                                              <td>' . $cart[3] . 'đ</td>
                                              <td>' . $cart[4] . '</td>
                                              <td>' . $thanhtien . 'đ</td>
                                           </tr>';
                    echo '<tr>
                              <td></td>
                              <td>Tổng tiền : ' . $tong . ' đ</td>   
                         </tr>';
                }
                $i += 1;
            }
            ?>
            </tbody>
        </table>
        <input type="submit" name="dathang" class="btn btn-shop btn-update-cart" value="Đặt hàng">
    </div>
    </form>
</div>
