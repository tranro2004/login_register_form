<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
   <link rel="stylesheet" href="assets/css/login.css">
    
</head>

<body>
    <div class="container">
        <div class="form-login">
            <div class="text-1">
                <h1>Đăng nhập tài khoản</h1>
                <p>Bạn chưa có tài khoản? <a href="register">Đăng ký tại đây</a></p>
            </div>

            <div class="email">
                <label for="email">Email *</label>
                <input type="text" placeholder="Email" id="email">
            </div>

            <div class="password">
                <label for="password">Mật khẩu *</label>
                <input type="password" placeholder="Mật khẩu" id="password">
            </div>

            <div class="text-2">
                <p>Quên mật khẩu? <a href="forgot_password">Nhấn vào đây</a></p>
            </div>
            <div class="button">
                <button class="button-login">Đăng nhập</button>
            </div>
            <div class="fb-gg">
                <p>Hoặc đăng nhập bằng</p>
                <div class="fb-gg-button">
                    <a href="#" class="fb-button">                       
                            <img src="images/icon_fb.png" alt="Facebook" class="google-icon" />
                             <span class="divider">|</span>
                            Facebook                       
                    </a>
                    <a href="#" class="google-button">                        
                            <img src="images/Google__G__logo.svg.webp" alt="Google" class="google-icon" />
                            <span class="divider">|</span>
                            Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>