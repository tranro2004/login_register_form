
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Trang tài khoản</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/account-orders.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/account-password.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/account-address.css') }}">
    <script src="{{ asset('assets/js/address.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
</head>

<body>
    <div class="account-container">
        <div class="sidebar">
            @include('layouts.account-sidebar')
        </div>

        <div class="content">
            @yield('account-info')
            @yield('account-orders')
            @yield('account-password')
            @yield('account-address')
        </div>
    </div>
</body>

</html>