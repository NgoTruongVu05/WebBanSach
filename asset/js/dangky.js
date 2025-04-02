document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("signupform");
    const username = document.getElementById("username");
    const addr = document.getElementById("address");
    const email = document.getElementById("email");
    const phone = document.getElementById("phone");
    const province = document.getElementById("province");
    const district = document.getElementById("district");
    const ward = document.getElementById("ward");
    const passwd = document.getElementById("pass");
    const passwdconf = document.getElementById("pass-confirm");
    const terms = document.getElementById("terms");
    const modal = document.getElementById("successModal");
    const closeModal = document.getElementById("closeModal");

    // Hiển thị thông báo lỗi
    function showError(input, message) {
        const parent = input.parentElement;
        let error = parent.querySelector(".error-message");
        if (!error) {
            error = document.createElement("small");
            error.className = "error-message text-danger";
            parent.appendChild(error);
        }
        error.textContent = message;
    }

    // Xóa thông báo lỗi
    function hideError(input) {
        const parent = input.parentElement;
        const error = parent.querySelector(".error-message");
        if (error) {
            error.remove();
        }
    }

    form.addEventListener("submit", function (event) {
        let valid = true; // Mặc định là hợp lệ

        // Kiểm tra tên đăng nhập
        if (username.value.trim() === "") {
            showError(username, "Tên đăng nhập không được để trống");
            valid = false;
        } else if (!/^[a-zA-Z0-9_ ]+$/.test(username.value)) {
            showError(username, "Tên đăng nhập không được chứa các kí tự đặc biệt");
            valid = false;
        } else if (username.value.length < 5) {
            showError(username, "Tên đăng nhập phải có ít nhất 5 kí tự");
            valid = false;
        } else {
            hideError(username);
        }

        // Kiểm tra email
        if (email.value.trim() === "") {
            showError(email, "Email không được để trống");
            valid = false;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
            showError(email, "Email không hợp lệ");
            valid = false;
        } else {
            hideError(email);
        }

        // Kiểm tra địa chỉ
        if (addr.value.trim() === "") {
            showError(addr, "Địa chỉ không được để trống");
            valid = false;
        } else if (/[^a-zA-Z0-9À-ỹ\s,-\.\/]/.test(addr.value)) {
            showError(addr, "Địa chỉ không hợp lệ");
            valid = false;
        } else {
            hideError(addr);
        }

        // Kiểm tra số điện thoại
        if (phone.value.trim() === "") {
            showError(phone, "Số điện thoại không được để trống");
            valid = false;
        } else if (!/(03|05|07|08|09)+(\d{8})\b/.test(phone.value)) {
            showError(phone, "Số điện thoại phải gồm 10 số với đầu số hợp lệ");
            valid = false;
        } else {
            hideError(phone);
        }

        // Kiểm tra tỉnh/thành phố, quận/huyện, phường/xã
        if (province.value === "") {
            showError(province, "Vui lòng chọn tỉnh/thành");
            valid = false;
        } else {
            hideError(province);
        }

        if (district.value === "") {
            showError(district, "Vui lòng chọn quận/huyện");
            valid = false;
        } else {
            hideError(district);
        }

        if (ward.value === "") {
            showError(ward, "Vui lòng chọn phường/xã");
            valid = false;
        } else {
            hideError(ward);
        }

        // Kiểm tra mật khẩu
        if (passwd.value.trim() === "") {
            showError(passwd, "Mật khẩu không được để trống");
            valid = false;
        } else if (passwd.value.length < 8) {
            showError(passwd, "Mật khẩu phải có ít nhất 8 kí tự");
            valid = false;
        } else {
            hideError(passwd);
        }

        // Kiểm tra xác nhận mật khẩu
        if (passwdconf.value.trim() === "") {
            showError(passwdconf, "Xác nhận mật khẩu không được để trống");
            valid = false;
        } else if (passwdconf.value !== passwd.value) {
            showError(passwdconf, "Mật khẩu xác nhận phải khớp với mật khẩu");
            valid = false;
        } else {
            hideError(passwdconf);
        }

        // Kiểm tra điều khoản
        if (!terms.checked) {
            showError(terms, "Bạn phải đồng ý với điều khoản");
            valid = false;
        } else {
            hideError(terms);
        }

        // Nếu có lỗi, chặn form gửi đi
        if (!valid) {
            event.preventDefault();
        } else {
            // Hiện modal và tự động gửi form sau 2 giây
            modal.classList.add("active");
            setTimeout(() => {
                form.submit();
            }, 2000);
        }
    });

    // Khi nhấn đóng modal, gửi form
    closeModal.addEventListener("click", function () {
        modal.classList.remove("active");
        form.submit();
    });

    // ===== TẢI DỮ LIỆU TỈNH/THÀNH, QUẬN/HUYỆN, PHƯỜNG/XÃ =====
    let provinces = {};
    let districts = {};
    let wards = {};

    async function loadData() {
        try {
            provinces = await fetch("../vender/apiAddress/province.json").then(res => res.json());
            districts = await fetch("../vender/apiAddress/district.json").then(res => res.json());
            wards = await fetch("../vender/apiAddress/ward.json").then(res => res.json());

            let provinceSelect = document.getElementById("province");
            provinces.forEach(province => {
                let option = new Option(province.name, province.code);
                provinceSelect.add(option);
            });

            console.log("Dữ liệu tỉnh/thành đã tải xong");
        } catch (error) {
            console.error("Lỗi tải dữ liệu:", error);
        }
    }

    function loadDistricts() {
        let provinceCode = document.getElementById("province").value;
        let districtSelect = document.getElementById("district");
        districtSelect.innerHTML = '<option value="">Chọn quận/huyện</option>';

        let filteredDistricts = districts.filter(d => d.province_code == provinceCode);
        if (filteredDistricts.length === 0) {
            console.error("Không tìm thấy quận/huyện cho mã tỉnh:", provinceCode);
            return;
        }

        filteredDistricts.forEach(district => {
            let option = new Option(district.name, district.code);
            districtSelect.add(option);
        });
    }

    function loadWards() {
        let districtCode = document.getElementById("district").value;
        let wardSelect = document.getElementById("ward");
        wardSelect.innerHTML = '<option value="">Chọn phường/xã</option>';

        let filteredWards = wards.filter(w => w.district_code == districtCode);
        if (filteredWards.length === 0) {
            console.error("Không tìm thấy phường/xã cho mã quận:", districtCode);
            return;
        }

        filteredWards.forEach(ward => {
            let option = new Option(ward.name, ward.code);
            wardSelect.add(option);
        });
    }

    window.onload = loadData;
});
