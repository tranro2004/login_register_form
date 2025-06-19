<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/forgot_password.css') }}">
</head>
<body>
    <div class="container">
        <h1>Đăng nhập tài khoản</h1>
        <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký tại đây</a></p>

        <h2>Đặt lại mật khẩu</h2>
        <p>Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.</p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
            <button type="submit" class="button">Lấy lại mật khẩu</button>
        </form>

        <a class="back-link" href="{{ route('login') }}">Quay lại</a>

        <div class="fb-gg">
            <p>Hoặc đăng nhập bằng</p>
            <div class="social-buttons">
                <a href="{{ route('social.login', 'facebook') }}" class="social-button facebook">
                    <img src="{{ asset('images/icon_fb.png') }}" alt="Facebook" />
                    <span class="divider">|</span>
                    Facebook
                </a>
                <a href="{{ route('social.login', 'google') }}" class="social-button google">
                    <img src="{{ asset('images/Google__G__logo.svg.webp') }}" alt="Google" />
                    <span class="divider">|</span>
                    Google
                </a>
            </div>
        </div>
    </div>
</body>
</html>