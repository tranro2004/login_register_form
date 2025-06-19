function openAddressForm(isEdit = false) {
    const modal = document.getElementById('addressForm');
    modal.style.display = 'flex';
    if (isEdit) {
        modal.querySelector('.form-header h3').innerText = 'CHỈNH SỬA ĐỊA CHỈ';
        modal.querySelector('.save-btn').innerText = 'Lưu địa chỉ';
    } else {
        modal.querySelector('.form-header h3').innerText = 'THÊM ĐỊA CHỈ MỚI';
        modal.querySelector('.save-btn').innerText = 'Thêm địa chỉ';
    }
}

function closeAddressForm() {
    document.getElementById('addressForm').style.display = 'none';
}
