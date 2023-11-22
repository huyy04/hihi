<?php
function load_danhmuc(){
    $sql = "select * from danhmuc order by iddm";
    $listdm = pdo_query($sql);
    return $listdm;
}
function loadone_danhmuc($id){
    $sql = "select * from danhmuc order by iddm=".$id;
    $listdm = pdo_query_one($sql);
    extract($listdm);
    return $name;
}