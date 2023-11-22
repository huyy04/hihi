<main class="main">
    <div class="page-header">
            <h1>My Account</h1>
    </div>

    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                     <div class="col-md-6" style="margin: 0 auto">
                        <div class="heading mb-1">
                            <h2 class="title">Login</h2>
                        </div>
                        <form action="index.php?act=login" method="post">
                            <label for="login-email">
                                Username or email address
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input form-wide" name="name" >

                            <label for="login-password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" name="pass" required />
                                <?php
                                if (isset($checklogin) && $checklogin != ""){
                                    echo $checklogin;
                                }else{
                                    echo "";
                                }
                                ?>
                            <div class="form-footer">
                                <div class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" id="lost-password" />
                                    <a href="index.php?act=dangky" class="forget-password text-dark form-footer-right">Đăng ký</a>
                                </div>
                                <a href="forgot-password.html" class="forget-password text-dark form-footer-right">Forgot Password?</a>
                            </div>
                            <input type="submit" class="btn btn-dark btn-md w-100" name="login" value="LOGIN">
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>