<div class="col-md-6" style="margin: 0 auto">
    <div class="heading mb-1">
        <h2 class="title">Đăng ký</h2>
    </div>

    <form action="index.php?act=dangky" method="post">
        <label for="register-email">
            User name
            <span class="required">*</span>
        </label>
        <input type="text" name="name" class="form-input form-wide" id="register-email" required />


        <label for="register-email">
            Email address
            <span class="required">*</span>
        </label>
        <input type="email" name="email" class="form-input form-wide" id="register-email" required />

        <label for="register-password">
            Password
            <span class="required">*</span>
        </label>
        <input type="password" name="pass" class="form-input form-wide" id="register-password"
               required />

        <div class="form-footer mb-2">
            <input type="submit" name="dangky" class="btn btn-dark btn-md w-100 mr-0" value="Đăng ký">
        </div>
        <?php
             if (isset($thongbao) && $thongbao != ""){
                 echo $thongbao;
             }else{
                 echo "";
             }
        ?>
    </form>
</div>