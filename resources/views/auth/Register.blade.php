<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng ký</title>
     <link rel="stylesheet" href="assets/css/register.css">
</head>

<body>
    <div class="container">
        <div class="form-login">
            <div class="text-1">
                <h1>Đăng ký tài khoản</h1>
                <p>Bạn đã có tài khoản? <a href="login">Đăng nhập tại đây</a></p>
            </div>

            <div class="text-2">Thông tin cá nhân</div>

            <div class="form-group">
                <label for="lastname">Họ *</label>
                <input type="text" placeholder="Họ" id="lastname">
            </div>

            <div class="form-group">
                <label for="firstname">Tên *</label>
                <input type="text" placeholder="Tên" id="firstname">
            </div>

            <div class="form-group">
                <label for="phone">Số điện thoại *</label>
                <input type="text" placeholder="Số điện thoại" id="phone">
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" placeholder="Email" id="email">
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu *</label>
                <input type="password" placeholder="Mật khẩu" id="password">
            </div>
            <div class="button">
                <button class="button-login">Đăng ký</button>
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