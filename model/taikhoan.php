<?php
function insert_taikhoan($user,$email,$pass){
    $sql = "insert into user (name,email,pass) values ('$user','$email','$pass')";
    pdo_execute($sql);
}
function dangnhap($user,$pass){
    $sql = "select * from user where name='$user' and pass='$pass' ";
    $taikhoan = pdo_query_one($sql);
    if ($taikhoan != false){
        $_SESSION['name'] = $user;
        echo '<script>window.location.href="index.php";</script>';
    }else{
        return "<p style='color:red'>Thông tin tài khoản không chính xác</p>";
    }
}