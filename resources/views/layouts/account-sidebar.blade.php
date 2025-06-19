<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/account-sidebar.css') }}">
</head>

<body>
    <h3 class="sidebar-title">Trang tài khoản</h3>
    <p class="sidebar-welcome"><strong>Xin chào, Rô Trần!</strong></p>
    <ul class="sidebar-menu">
        <li>
            <a href="{{ route('account.info') }}" class="{{ request()->routeIs('account.info') ? 'active' : '' }}">
                Thông tin tài khoản
            </a>
        </li>
        <li><a href="{{ route('account.orders') }}"
                class="{{ request()->routeIs('account.orders') ? 'active' : '' }}">Đơn hàng của bạn</a></li>
        <li><a href="{{ route('account.password') }}"
                class="{{ request()->routeIs('account.password') ? 'active' : '' }}">Đổi mật khẩu</a></li>
        <li><a href="{{ route('account.address') }}"
                class="{{ request()->routeIs('account.address') ? 'active' : '' }}">Sổ địa chỉ (1)</a></li>
        <li><a href="" class="logout">Đăng xuất</a></li>
    </ul>

</body>

</html>