<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $name = $_POST['name-user'];
    $phone = $_POST['phone-user'];
    $address = $_POST['payment--adr'];
    $note = $_POST['payment--note'];

    if (empty($name) || empty($phone) || empty($address)) {
        echo "Vui lòng điền đầy đủ thông tin.";
        exit;
    }

    if (!preg_match("/^\+84\d{9,10}$/", $phone)) {
        echo "Số điện thoại không hợp lệ.";
        exit;
    }

    include('../admin/config/config.php');

    $sql = "INSERT INTO orders (name, phone, address, note) VALUES ('$name', '$phone', '$address', '$note')";
    if (mysqli_query($conn, $sql)) {
        header("Location: confirm_order.php?status=success");
        exit;
    } else {
        echo "Lỗi khi lưu đơn hàng: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đặt hàng</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../vender/css/bootstrap.min.css">
  <!-- FONT AWESOME  -->
  <link rel="stylesheet" href="../vender/css/fontawesome-free/css/all.min.css">
  <!-- CSS  -->
  <link rel="stylesheet" href="../asset/css/sanpham.css">
  <link rel="stylesheet" href="../asset/css/hoaDon.css">
</head>

<body>
  <!-- Header -->
  <header class="text-white py-3">
    <div class="container">
      <nav class="navbar navbar-expand-md">
        <div class="navbar-brand logo">
          <a href="../nguoidung/indexuser.php" class="d-flex align-items-center">
            <img src="../Images/LogoSach.png" alt="logo" style="width: 100px; height: 57px;">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a href="../nguoidung/indexuser.php" class="nav-link fw-bold text-white">TRANG CHỦ</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link fw-bold text-white">GIỚI THIỆU</a>
            </li>
            <li class="nav-item">
              <a href="../sanpham/sanpham-user.php" class="nav-link fw-bold text-white">SẢN PHẨM</a>
            </li>
          </ul>
          <form class="d-flex me-auto">
            <input class="form-control me-2" type="text" id="timkiem" placeholder="Tìm sách">
            <button class="btn btn-outline-light" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a href="../index.php" class="nav-link fw-bold text-white">ĐĂNG XUẤT</a>
            </li>
            <li class="nav-item">
              <div>
                <a href="../nguoidung/user.php"><i class="fas fa-user" id="avatar" style="color: black;"></i></a>
                <span id="profile-name" style="top: 20px; padding: 2px; display: none;">Nguyễn Văn A</span>
              </div>
            </li>
          </ul>
          <a href="/giohang/giohangnguoidung.php" class="nav-link text-white">
            <div class="cart-icon">
              <i class="fas fa-shopping-basket" style="color: yellow;"></i>
              <span class="">0</span>
            </div>
          </a>
        </div>
      </nav>
    </div>
  </header>

  <!-- PHẦN NHẬP THÔNG TIN ĐẶT HÀNG (GIAO HÀNG) -->
  <section class="payment_container my-4">
    <div class="payment__content row justify-content-center">
      <div class="payment__content__left col-12 col-md-8 col-lg-6 d-flex flex-column">
        <h3>Thông tin giao hàng</h3>
        <form class="payment--form d-flex flex-column gap-3" id="form-add" method="post"
          onsubmit="return validateForm()">
          <fieldset>
            <legend>Thông tin giao hàng</legend>
            <!-- Sử dụng thông tin mặc định -->
            <div class="d-flex flex-row">
              <input type="checkbox" id="default-info-checkbox" style="width: fit-content;" checked
                onchange="toggleDefaultInfo()">
              <label for="default-info-checkbox" style="width: fit-content;">Sử dụng thông tin mặc định</label>
            </div>
            <!-- Họ tên -->
            <div>
              <label for="name-user"><i class="fas fa-user"></i> Họ tên <span style="color: red;">*</span></label>
              <input type="text" id="name-user" name="name-user" value="Nguyễn Văn A" placeholder="Tên người nhận hàng"
                required>
              <span class="form-message"></span>
            </div>
            <!-- Điện thoại -->
            <div>
              <label for="phone-user"><i class="fas fa-phone-volume"></i> Điện thoại <span
                  style="color: red;">*</span></label>
              <input type="tel" id="phone-user" name="phone-user" value="+84 912 345 678"
                placeholder="Số điện thoại người nhận hàng" required>
              <span class="form-message"></span>
            </div>
            <!-- Địa chỉ -->
            <div>
              <label for="payment--adr"><i class="far fa-address-card"></i> Địa chỉ <span
                  style="color: red;">*</span></label>
              <input type="text" id="payment--adr" value="123 lê Lợi, Quận 1, TP Hồ Chí Minh" name="payment--adr"
                placeholder="Địa chỉ nhận hàng" required>
              <span class="form-message"></span>
            </div>
            <!-- Ghi chú -->
            <div>
              <label for="payment--note"><i class="far fa-comment"></i> Ghi chú</label>
              <textarea id="payment--note" name="payment--note" rows="3"
                placeholder="Ghi yêu cầu của bạn tại đây."></textarea>
              <span class="form-message"></span>
            </div>
          </fieldset>
          <!-- Nút xác nhận thông tin đặt hàng -->
          <button class="payment--button btn btn-primary" type="submit">Tiếp tục</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-white py-4">
    <div class="container">
      <div class="row pb-4 footer__bar">
        <div class="col-md-12 d-flex justify-content-between fw-bold align-items-center footer__connect">
          <p>Thời gian mở cửa: <span>07h30 - 21h30 mỗi ngày</span></p>
          <div class="d-flex">
            <p>Kết nối với chúng tôi:</p>
            <a href="#" class="text-white ms-3">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#" class="text-white ms-3">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row d-flex justify-content-center align-items-center footer__bar">
        <div class="col-md-4">
          <div class="logo">
            <a href="../index.php" class="d-flex align-items-center">
              <img src="../Images/LogoSach.png" alt="logo" width="100" height="57">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <p class="mb-1">Hotline: 1900 0000</p>
            <p class="mb-1">Email: nhasach@gmail.com</p>
            <p>&copy; 2024 Công ty TNHH Nhà sách</p>
          </div>
        </div>
        <div class="col-md-4">
          <ul class="list list-unstyled">
            <li class="list-item">
              <a href="#" class="text-white">Tuyển dụng</a>
            </li>
            <li class="list-item">
              <a href="#" class="text-white">Chính sách giao hàng</a>
            </li>
            <li class="list-item">
              <a href="#" class="text-white">Điều khoản và điều kiện</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row footer__bar">
        <div class="col-md-12">
          <ul class="list-unstyled">
            <li>Chi nhánh 1: 273 An Dương Vương, Phường 3, Quận 5, TP. Hồ Chí Minh</li>
            <li>Chi nhánh 2: 105 Bà Huyện Thanh Quan, Phường Võ Thị Sáu, Quận 3, TP. Hồ Chí Minh</li>
            <li>Chi nhánh 3: 4 Tôn Đức Thắng, Phường Bến Nghé, Quận 1, TP. Hồ Chí Minh</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Liên kết file JS riêng -->
  <script src="../asset/js/thanhtoan.js"></script>
  <script src="../vender/js/bootstrap.bundle.min.js"></script>
</body>

</html>