@extends('app')

@section('account-info')
    <h2 class="order-title">Đơn hàng của bạn</h2>

    <table class="order-table">
        <thead>
            <tr>
                <th>Đơn hàng</th>
                <th>Ngày</th>
                <th>Địa chỉ</th>
                <th>Giá trị đơn hàng</th>
                <th>TT thanh toán</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="5" class="empty-order">Không có đơn hàng nào.</td>
            </tr>
        </tbody>
    </table>
@endsection
