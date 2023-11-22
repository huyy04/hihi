<div class="main-content">
    <form class="addPro" action="index.php?act=sanphamadd" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFile">Ảnh sản phẩm</label>
            <div class="custom-file">
                <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
            </div>
        </div>
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="tensp" id="name" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="form-group">
            <label for="categories">Danh mục:</label>
            <select class="form-select" name="iddm">
                <?php
                   foreach ($danhmuc as $dm){
                       extract($dm);
                       echo '<option value="'.$iddm.'">'.$name.'</option>';
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
                <input type="text" name="giasp" id="gia" class="form-control" placeholder="Nhập giá">
            </div>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm mới">
        </div>
    </form>
</div>

<script>
    new DataTable('#example');
</script>