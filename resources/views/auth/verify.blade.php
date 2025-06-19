<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác thực Email</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/forgot_password.css') }}"> <!-- Tái sử dụng CSS -->
</head>
<body>
    <div class="container">
        <h1>Xác thực Email</h1>
        <p>Vui lòng kiểm tra email của bạn để xác thực tài khoản.</p>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <p>Chưa nhận được email? <button type="submit" class="button">Gửi lại email</button></p>
        </form>

        <a class="back-link" href="{{ route('login') }}">Quay lại đăng nhập</a>
    </div>
</body>
</html>