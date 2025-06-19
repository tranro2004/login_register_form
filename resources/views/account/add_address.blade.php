<div class="address-modal">
    <div class="modal-header">
        <h4>THÊM ĐỊA CHỈ MỚI</h4>
        <button class="close-btn">&times;</button>
    </div>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Họ tên">
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="Số điện thoại">
        </div>
        <div class="form-group">
            <input type="text" name="company" placeholder="Công ty">
        </div>
        <div class="form-group">
            <input type="text" name="address" placeholder="Địa chỉ">
        </div>
        <div class="form-group">
            <select name="country">
                <option>Vietnam</option>
            </select>
        </div>

        <div class="form-group location-select">
            <select name="province">
                <option>---</option>
            </select>
            <select name="district">
                <option disabled selected>Quận huyện</option>
            </select>
            <select name="ward">
                <option disabled selected>Phường xã</option>
            </select>
        </div>

        <div class="form-group">
            <input type="text" name="zip" placeholder="Mã Zip">
        </div>

        <div class="form-group checkbox">
            <input type="checkbox" name="is_default" id="is_default">
            <label for="is_default">Đặt là địa chỉ mặc định?</label>
        </div>

        <div class="form-footer">
            <button type="button" class="cancel-btn">Hủy</button>
            <button type="submit" class="submit-btn">Thêm địa chỉ</button>
        </div>
    </form>
</div>
