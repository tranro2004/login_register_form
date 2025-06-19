<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-login">
            <div class="text-1">
                <h1>Đăng nhập tài khoản</h1>
                <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký tại đây</a></p>
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

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="email">
                    <label for="email">Email *</label>
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>

                <div class="password">
                    <label for="password">Mật khẩu *</label>
                    <input type="password" name="password" id="password" placeholder="Mật khẩu" required>
                </div>

                <div class="text-2">
                    <p>Quên mật khẩu? <a href="{{ route('password.request') }}">Nhấn vào đây</a></p>
                </div>

                <div class="button">
                    <button type="submit" class="button-login">Đăng nhập</button>
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