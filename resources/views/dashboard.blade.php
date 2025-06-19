<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <div class="card">
            <h1 class="card-title">Trang Quản Lý</h1>
            <p class="welcome-text">👋 Chào mừng <strong>{{ auth()->user()->name ?? 'Người dùng' }}</strong>!</p>

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

        

            <div class="actions">
                <a href="{{ route('login-history') }}" class="button">🔍 Xem chi tiết lịch sử logIn</a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="button logout">🚪 Đăng xuất</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
