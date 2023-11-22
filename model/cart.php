<?php
function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['giohang'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tong = $tong + $thanhtien;
    }
    return $tong;
}

function insert_bill($name,$email,$diachi,$sdt,$tongdonhang){
    $sql = "insert into bill (name,email,diachi,sdt,tongdonhang) values ('$name','$email','$diachi','$sdt','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($idbill,$idsp,$name,$img,$price,$soluong,$thanhtien){
     $sql = "insert into cart (idbill,idsp,name,img,price,soluong,thanhtien) 
              values ('$idbill','$idsp','$name','$img','$price','$soluong','$thanhtien')";
     pdo_query_one($sql);
}