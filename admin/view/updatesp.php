<?php
  if (is_array($sanpham)){
       extract($sanpham);
   }
  $hinh = "../img/".$img;
  if (is_file($hinh)){
      $hinh = "<img src='".$hinh."' width='100px' height='100px'>";
  }else{
      $hinh = "no file";
  }
?>
<div class="main-content">
    <form class="addPro" action="index.php?act=update" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFile">Ảnh sản phẩm</label>
            <div class="custom-file">
                <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
                <?php echo $hinh ?>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="tensp" id="name" value="<?php echo $name ?>">
        </div>
        <div class="form-group">
            <label for="categories">Danh mục:</label>
            <select class="form-select" name="iddm">
                <option value="'.$iddm.'">Tat ca</option>
                <?php
                foreach ($danhmuc as $key => $value){
                    if ($iddm == $value['id']){
                        echo "<option value='".$value['id']."'>".$value['name']."</option>";
                    }else{
                        echo "<option value='".$value['id']."'>".$value['name']."</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Giá:</label>
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" name="giasp" id="gia" class="form-control" value="<?php echo $price ?>">
            </div>
        </div>
        <div class="form-group">
            <label>Mô tả </label>
            <textarea class="form-control"  name="detail" rows="3"  style="height: 78px;"></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật">
        </div>
    </form>
</div>

<script>
    new DataTable('#example');
</script>