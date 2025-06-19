@extends('app')

@section('account-info')
<div class="password-container">
    <div class="password-header">
        <h3>Đổi mật khẩu</h3>
        <p>Để đảm bảo tính bảo mật vui lòng đặt mật khẩu với ít nhất 8 kí tự</p>
    </div>

    <form action="" method="POST" class="password-form">
        @csrf
        <div class="form-group">
            <label for="old_password">Mật khẩu cũ *</label>
            <input type="password" id="old_password" name="old_password" required>
        </div>

        <div class="form-group">
            <label for="new_password">Mật khẩu mới *</label>
            <input type="password" id="new_password" name="new_password" required>
        </div>

        <div class="form-group">
            <label for="confirm_password">Xác nhận lại mật khẩu *</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>

        <button type="submit" class="submit-btn">Đặt lại mật khẩu</button>
    </form>
</div>
@endsection
