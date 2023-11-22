<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/cart.php";
include "model/global.php";
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

$sanpham = loadall_sanpham();
$danhmuc = load_danhmuc();
include "view/header.php";
if (isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case "ctsp":
            if (isset($_GET['id']) && $_GET['id'] > 0){
                $id = $_GET['id'];
                $sp = loadallone_sanpham($id);
                $sp_cungloai = load_sp_cungloai($id , $sp['iddm']);
                include "view/chitietsp.php";
            }
            break;

        case "dangky":
            if (isset($_POST['dangky']) && $_POST['dangky']){
                $user = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($user,$email,$pass);
                $thongbao = "Đăng ký thành công";
            }
            include "view/user/dangky.php";
            break;

        case "login":
            if (isset($_POST['login']) && $_POST['login']){
                  $user = $_POST['name'];
                  $pass = $_POST['pass'];
                  $checklogin = dangnhap($user,$pass);
            }
               include "view/user/login.php";
               break;

        case "addcart":
            if (isset($_POST['addcart']) && $_POST['addcart']){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong'];
                $thanhtien = $soluong * $price;
                $spadd = [$id,$name,$img,$price,$soluong,$thanhtien];
                array_push($_SESSION['giohang'], $spadd);
            }
            include "view/cart.php";
            break;

        case "delcart":
            if (isset($_GET['idcart'])){
                array_splice($_SESSION['giohang'],$_GET['idcart'],1);
            }else{
                $_SESSION['giohang'] = [];
            }
             include "view/cart.php";
            break;

        case "bill":
            include "view/bill.php";
            break;

        case "billconfirm":
            if (isset($_POST['dathang']) && $_POST['dathang']){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($name,$email,$diachi,$sdt,$tongdonhang);
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
                    foreach ($_SESSION['giohang'] as $cart) {
                        insert_cart($_SESSION['name']['id'], $cart[0], $cart[1], $cart[2], $cart[3], $cart[4], $cart[5],$idbill);
                    }
                }
            }
            include "view/billconfirm.php";
            break;
    }
}else {
    include "view/home.php";
}
include "view/footer.php";