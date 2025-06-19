@extends('app')

@section('account-info')
<div class="account-address">
    <div class="address-header">
        <h2>Địa chỉ của bạn</h2>
        <a href="#" class="add-address-btn" onclick="openAddressForm()">+ Thêm địa chỉ</a>
    </div>
    <hr>
    <div class="address-info">
        <p><strong>Họ tên:</strong> Rô rrr <span class="default-label">Địa chỉ mặc định</span></p>
        <p><strong>Địa chỉ:</strong> Số 2, Đường Công Xã Paris, Phường Bến Nghé, Quận 1, TP Hồ Chí Minh, Vietnam</p>
        <p><strong>Số điện thoại:</strong> 1234567890</p>
        <p><strong>Công ty:</strong> hhh</p>
        <a href="#" class="edit-address-link" onclick="openAddressForm(true)">Chỉnh sửa địa chỉ</a>
    </div>
</div>
@endsection


{{-- PHẦN FORM Ở NGOÀI SECTION --}}
<div class="address-form-modal" id="addressForm" style="display: none">
    <div class="address-form-content">
        <div class="form-header">
            <h3>THÊM ĐỊA CHỈ MỚI</h3>
            <button class="close-btn" onclick="closeAddressForm()">✕</button>
        </div>
        <form>
            <div class="form-group-address">
                <input type="text" id="fullname" name="fullname" required placeholder=" ">
                <label for="fullname">Họ tên</label>
            </div>

            <div class="form-group-address">
                <input type="text" id="phone" name="phone" required placeholder=" ">
                <label for="phone">Số điện thoại</label>
            </div>

            <div class="form-group-address">
                <input type="text" id="company" name="company" required placeholder=" ">
                <label for="company">Công ty</label>
            </div>

            <div class="form-group-address">
                <input type="text" id="address" name="address" required placeholder=" ">
                <label for="address">Địa chỉ</label>
            </div>

            <div class="form-group-address">
                <select id="country" name="country" required>
                    <option value="" disabled selected hidden></option>
                    <option value="Vietnam">Vietnam</option>
                </select>
                <label for="country">Quốc gia</label>
            </div>

            <div class="address-row">
                <div class="form-group-address">
                    <select id="province" name="province" required>
                        <option value="" disabled selected hidden></option>
                        <option value="TPHCM">TP Hồ Chí Minh</option>
                    </select>
                    <label for="province">Tỉnh thành</label>
                </div>

                <div class="form-group-address">
                    <select id="district" name="district" required>
                        <option value="" disabled selected hidden></option>
                        <option value="quan1">Quận 1</option>
                    </select>
                    <label for="district">Quận huyện</label>
                </div>

                <div class="form-group-address">
                    <select id="ward" name="ward" required>
                        <option value="" disabled selected hidden></option>
                        <option value="bennghe">Phường Bến Nghé</option>
                    </select>
                    <label for="ward">Phường xã</label>
                </div>
            </div>

            <div class="form-group-address">
                <input type="text" id="zip" name="zip" required placeholder=" ">
                <label for="zip">Mã Zip</label>
            </div>

            <label class="checkbox">
                <input type="checkbox" name="default_address"> Đặt là địa chỉ mặc định?
            </label>

            <div class="form-actions">
                <button type="button" class="cancel-btn" onclick="closeAddressForm()">Hủy</button>
                <button type="submit" class="save-btn">Thêm địa chỉ</button>
            </div>
        </form>
    </div>
</div>

