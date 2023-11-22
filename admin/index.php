<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";

include "view/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case'sanphamlist':
            $sanphamlist = loadall_sanpham1("",0);
            include "view/sanphamlist.php";
            break;
        case'sanphamadd':
            if (isset($_POST['themmoi']) && $_POST['themmoi']){
                $ten = $_POST['tensp'];
                $iddm = $_POST['iddm'];
                $gia = $_POST['giasp'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../img/";
                $target_file = $target_dir.basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    echo "upload thanh cong";
                }else{
                    echo "upload k thanh cong";
                }
                insert_sanpham($ten,$iddm,$gia,$hinh);
            }
            $danhmuc = load_danhmuc();
            include "view/sanphamadd.php";
            break;

        case "suasp":
            if (isset($_GET['id']) && $_GET['id'] > 0){
                $id = $_GET['id'];
                $sanpham = loadallone_sanpham($id);
            }
            $danhmuc = load_danhmuc();
            include "view/updatesp.php";
            break;

        case "update":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                  $iddm = $_POST['iddm'];
                  $id = $_POST['id'];
                  $ten = $_POST['tensp'];
                  $gia = $_POST['giasp'];
                  $hinh = $_FILES['hinh']['name'];
                  $target_dir = "../img/";
                  $target_file = $target_dir.basename($_FILES['hinh']['name']);
                  if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                        echo "upload thanh cong";
                  }else{
                        echo "upload k thanh cong";
                  }
                updatesp($iddm,$id,$ten,$hinh,$gia);
            }
            $danhmuc = load_danhmuc();
            $sanphamlist = loadall_sanpham1("",0);
            include "view/sanphamlist.php";
            break;

        case "xoasp":
            if (isset($_GET['id']) && $_GET['id'] > 0){
                $id = $_GET['id'];
                xoasp($id);
            }
            $sanphamlist = loadall_sanpham1("",0);
            include "view/sanphamlist.php";
            break;
    }
}else{
    include "view/home.php";
}
    include "view/footer.php";
?>