<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vender/css/bootstrap.min.css">
    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="../vender/css/bootstrap.min.css">
    <!-- CSS  -->
    <link rel="stylesheet" href="../asset/css/index-user.css">
</head>

<body>
    <!-- Header -->
    <header class="text-white py-3" id="top">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <div class="navbar-brand logo">
                    <a href="../nguoidung/indexuser.php" class="d-flex align-items-center">
                        <img src="../Images/LogoSach.png" alt="logo" width="100" height="57">
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
                            <a href="../sanpham/sanpham-user.php" class="nav-link fw-bold text-white">SẢN
                                PHẨM</a>
                        </li>
                    </ul>
                    <form id="searchForm" class="d-flex me-auto">
                        <input class="form-control me-2" type="text" id="timkiem" placeholder="Tìm sách">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                    <script>
                        document.getElementById('searchForm').addEventListener('submit', function (event) {
                            event.preventDefault();
                            const inputValue = document.getElementById('timkiem').value.trim();

                            if (inputValue) {
                                window.location.href = '../nguoidung/timkiem.php';
                            } else {
                                alert('Vui lòng nhập nội dung tìm kiếm!');
                            }
                        });
                    </script>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link fw-bold text-white">ĐĂNG XUẤT</a>
                        </li>
                        <li class="nav-item">
                            <div>
                                <a href="../nguoidung/user.php"><i class="fas fa-user" id="avatar"
                                        style="color: black;"></i></a>
                                <span id="profile-name" style="top: 20px; padding: 2px; display: none;">Nguyễn Văn
                                    A</span>
                            </div>
                        </li>
                    </ul>
                    <a href="/giohang/giohangnguoidung.php" class="nav-link text-white">
                        <div class="cart-icon">
                            <i class="fas fa-shopping-basket"></i>
                            <span class="">0</span>
                        </div>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main -->
    <div class="container my-4">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-lg-3">
                <div class="rounded text-dark p-4"
                    style="border: 1px solid black; box-shadow: 5px 5px 5px rgba(50, 50, 50, 0.75);">
                    <h5 class="fw-bold text-center">DANH MỤC</h5>
                    <ul class="list-group" style="border: 1px solid;">
                        <li class="list-group-item" style="border: none;">
                            <a href="../danhmuc/sachthieunhi-nologin.php" class="fw-bold text-dark">Sách thiếu nhi</a>
                        </li>
                        <li class="list-group-item" style="border: none;">
                            <a href="../danhmuc/sachgiaokhoa-nologin.php" class="fw-bold text-dark">Sách giáo khoa</a>
                        </li>
                        <li class="list-group-item" style="border: none;">
                            <a href="../danhmuc/sachkinhte-nologin.php" class="fw-bold text-dark">Sách kinh tế</a>
                        </li>
                        <li class="list-group-item" style="border: none;">
                            <a href="../danhmuc/sachlichsu-nologin.php" class="fw-bold text-dark">Sách lịch sử</a>
                        </li>
                        <li class="list-group-item" style="border: none;">
                            <a href="../danhmuc/sachngoaingu-nologin.php" class="fw-bold text-dark">Sách ngoại ngữ</a>
                        </li>
                        <li class="list-group-item" style="border: none;">
                            <a href="../danhmuc/sachkhoahoc-nologin.php" class="fw-bold text-dark">Sách khoa học</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- Main content -->
            <div class="col-lg-9">
                <h2 class="text-dark">Kết quả tìm kiếm</h2>
                <div class="border p-5">
                    <div class="container my-4">
                        <div class="listProduct row">
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham.php">
                                        <img src="../Images/harrypotter.jpg" alt="Ảnh 1" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Harry Potter Và Hòn Đá Phù Thủy</h5>
                                        <p class="card-text">Tiểu thuyết</p>
                                        <p class="card-text text-danger fw-bold">120.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham.php">
                                        <img src="../Images/tuduynguoc.jpg" alt="Ảnh 2" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Tư Duy Ngược</h5>
                                        <p class="card-text">Kỹ năng sống</p>
                                        <p class="card-text text-danger fw-bold">80.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham.php">
                                        <img src="../Images/bonmuacuocsong.jpg" alt="Ảnh 3" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Bốn Mùa Cuộc Sống</h5>
                                        <p class="card-text">Truyền Cảm Hứng</p>
                                        <p class="card-text text-danger fw-bold">50.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham.php">
                                        <img src="../Images/canhdongbattan.jpg" alt="Ảnh 4" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Cánh Đồng Bất Tận</h5>
                                        <p class="card-text">Văn học</p>
                                        <p class="card-text text-danger fw-bold">60.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham.php">
                                        <img src="../Images/khihoithohoathinhkhong.webp" alt="Ảnh 5"
                                            class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Khi Hơi Thở Hóa Thinh Không</h5>
                                        <p class="card-text">Hồi Ký</p>
                                        <p class="card-text text-danger fw-bold">75.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham.php">
                                        <img src="../Images/sachcuasutinhlang.jpg" alt="Ảnh 6" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Sách Của Sự Tĩnh Lặng</h5>
                                        <p class="card-text">Kỹ năng sống</p>
                                        <p class="card-text text-danger fw-bold">90.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham.php">
                                        <img src="../Images/stopoverthinking.jpg" alt="Ảnh 7" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Stop Overthinking</h5>
                                        <p class="card-text">Tâm lý</p>
                                        <p class="card-text text-danger fw-bold">85.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham.php">
                                        <img src="../Images/conchimxanhbiecbayve.jpg" alt="Ảnh 8" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Con Chim Xanh Biếc Bay Về</h5>
                                        <p class="card-text">Văn học</p>
                                        <p class="card-text text-danger fw-bold">100.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham.php">
                                        <img src="../Images/baigiangcuoicung.jpg" alt="Ảnh 9" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Bài Giảng Cuối Cùng</h5>
                                        <p class="card-text">Truyền cảm hứng</p>
                                        <p class="card-text text-danger fw-bold">70.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <nav class="pagination-container mt-4">
                                <ul class="pagination justify-content-center">

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-white py-4">
        <div class="container">
            <div class="row pb-4 footer__bar">
                <div class="col-md-12 d-flex justify-content-between fw-bold align-items-center footer__connect">
                    <p>Thời gian mở cửa: <span>07h30 - 21h30 mỗi ngày</span></p>
                    <div class="d-flex">
                        <p>Kết nối với chúng tôi:</p>
                        <a href="https://www.facebook.com/" target="_blank" class="text-white ms-3">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="text-white ms-3">
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

    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" inert>
        <div class="modal-dialog modal-sm position-absolute" style="top: 10%; left: 10%;">
            <div class="modal-content bg-success text-white">
                <div class="modal-body text-center">
                    <p class="m-0">Đã thêm vào giỏ hàng!</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#top" id="backToTop">&#8593;</a>

    <!-- Bootstrap JS -->
    <script src="../vender/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/js/sanpham.js"></script>
    <script src="../asset/js/timkiem.js"></script>

    <script>
        function adjustSidebar() {  // Hàm điều khiển sidebar khi cuộn
            const sidebar = document.querySelector("aside");
            if (window.innerWidth > 991) {
                sidebar.style.position = "sticky";
                sidebar.style.top = "20px";
            } else {
                sidebar.style.position = "static";
            }
        }

        // Gọi hàm khi tải trang và khi thay đổi kích thước
        window.addEventListener("load", adjustSidebar);
        window.addEventListener("resize", adjustSidebar);
    </script>
</body>

</html>