<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-login">
            <div class="text-1">
                <h1>Đăng ký tài khoản</h1>
                <p>Bạn đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập tại đây</a></p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="text-2">Thông tin cá nhân</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="lastname">Họ *</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Họ" value="{{ old('lastname') }}" required>
                </div>

                <div class="form-group">
                    <label for="firstname">Tên *</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Tên" value="{{ old('firstname') }}" required>
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại *</label>
                    <input type="text" name="phone" id="phone" placeholder="Số điện thoại" value="{{ old('phone') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu *</label>
                    <input type="password" name="password" id="password" placeholder="Mật khẩu" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Xác nhận mật khẩu *</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Xác nhận mật khẩu" required>
                </div>

                <div class="button">
                    <button type="submit" class="button-login">Đăng ký</button>
                </div>
            </form>

            <div class="fb-gg">
                <p>Hoặc đăng nhập bằng</p>
                <div class="fb-gg-button">
                    <a href="{{ route('social.login', 'facebook') }}" class="fb-button">
                        <img src="{{ asset('images/icon_fb.png') }}" alt="Facebook" class="google-icon" />
                        <span class="divider">|</span>
                        Facebook
                    </a>
                    <a href="{{ route('social.login', 'google') }}" class="google-button">
                        <img src="{{ asset('images/Google__G__logo.svg.webp') }}" alt="Google" class="google-icon" />
                        <span class="divider">|</span>
                        Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>