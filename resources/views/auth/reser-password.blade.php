<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lại mật khẩu</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/forgot_password.css') }}">
</head>
<body>
    <div class="container">
        <h1>Đặt lại mật khẩu</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email', $request->email) }}" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu mới *</label>
                <input type="password" name="password" id="password" placeholder="Mật khẩu mới" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Xác nhận mật khẩu *</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Xác nhận mật khẩu" required>
            </div>

            <button type="submit" class="button">Đặt lại mật khẩu</button>
        </form>

        <a class="back-link" href="{{ route('login') }}">Quay lại</a>
    </div>
</body>
</html>