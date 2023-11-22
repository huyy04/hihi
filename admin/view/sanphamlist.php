
<div class="main-content">
    <h3 class="title-page">Sản phẩm</h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?act=sanphamadd" class="btn btn-primary mb-2"
        >Thêm sản phẩm</a>
    </div>
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Tháo tác</th>
        </tr>
        </thead>
        <tbody>
         <?php
         foreach ($sanphamlist as $sanpham){
             extract($sanpham);
             $hinhpath = "../img/".$img;
             $xoasp = "index.php?act=xoasp&id=".$id;
             $suasp = "index.php?act=suasp&id=".$id;
             if(is_file($hinhpath)){
                 $hinhpath="<img src ='".$hinhpath."' width='100px' height='100px'";
             }else{
                 $hinhpath="No file img";
             }

             echo '  <tr>

            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$hinhpath.'</td>
            <td>'.$price.'</td>
            <td>
                <a href="'.$suasp.'" class="btn btn-warning" ><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                <a href="'.$xoasp.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a
                >
            </td>
        </tr>';
         }
         ?>


        </tbody>
    </table>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable("#example");
</script>