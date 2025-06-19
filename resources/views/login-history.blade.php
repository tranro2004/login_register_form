<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử đăng nhập</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login_history.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lịch sử đăng nhập</h1>
        <p>Chi tiết lịch sử đăng nhập của {{ auth()->user()->name ?? 'Người dùng' }}.</p>

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

        @if (isset($histories) && count($histories))
            <table class="login-history-table">
                <thead>
                    <tr>
                        <th>IP Address</th>
                        <th>User Agent</th>
                        <th>Thời gian đăng nhập</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($histories as $history)
                        <tr>
                            <td>{{ $history->ip_address }}</td>
                            <td>{{ $history->user_agent }}</td>
                            <td>{{ $history->login_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Không có lịch sử đăng nhập nào.</p>
        @endif

        <a href="{{ route('dashboard') }}" class="back-link">Quay lại Dashboard</a>
    </div>
</body>
</html>