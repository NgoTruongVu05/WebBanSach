<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng sách</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css">
    <!-- CSS  -->
    <link rel="stylesheet" href="../css/sanpham.css">
</head>

<body>
    <!-- Header -->
    <header class="text-white py-3">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <div class="navbar-brand logo">
                    <a href="../index.php" class="d-flex align-items-center">
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
                            <a href="../index.php" class="nav-link fw-bold text-white">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fw-bold text-white">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item">
                            <a href="sanpham.php" class="nav-link fw-bold" style="color: yellow;">SẢN PHẨM</a>
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
                                window.location.href = '../nguoidung/timkiem-nologin.php';
                            } else {
                                alert('Vui lòng nhập nội dung tìm kiếm!');
                            }
                        });
                    </script>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="../dangky/dangnhap.php" class="nav-link fw-bold text-white">ĐĂNG NHẬP</a>
                        </li>
                        <li class="nav-item">
                            <a href="../dangky/dangky.php" class="nav-link fw-bold text-white">ĐĂNG KÝ</a>
                        </li>
                    </ul>
                    <a href="../giohang/giohang.php" class="nav-link text-white">
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
    <div class="container mt-3">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachthieunhi-nologin.php">Sách thiếu nhi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachgiaokhoa-nologin.php">Sách giáo khoa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachkinhte-nologin.php">Sách kinh tế</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachlichsu-nologin.php">Sách lịch sử</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachngoaingu-nologin.php">Sách ngoại ngữ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachkhoahoc-nologin.php">Sách khoa học</a>
            </li>
        </ul>
    </div>
    <div class="container my-4">
        <div class="row mt-4">
            <!-- Sidebar -->
            <aside class="col-lg-3">
                <div class="rounded text-dark p-4"
                    style="border: 1px solid black;">
                    <h5 class="fw-bold text-center">TÌM KIẾM</h5>
                    <ul class="list-group">
                        <form>
                            <li class="list-group-item">
                                <input type="text" class="form-control" id="tensach" placeholder="Tên sách">
                            </li>
                            <li class="list-group-item">
                                <input type="text" class="form-control" id="tentacgia" placeholder="Tên tác giả">
                            </li>
                            <li class="list-group-item">
                                <input type="text" class="form-control" id="nxb" placeholder="Nhà xuất bản">
                            </li>
                            <li class="list-group-item">
                                <input type="text" class="form-control" id="theloai" placeholder="Thể loại">
                            </li>
                            <li class="list-group-item">
                                <div class="input-group">
                                    <input class="form-control" type="number" id="minPrice" placeholder="Từ (VNĐ)"
                                        min="0">
                                    <input class="form-control" type="number" id="maxPrice" placeholder="Đến (VNĐ)"
                                        min="0">
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-grid justify-content-md-end d-md-flex gap-2">
                                    <button type="button" class="btn btn-outline-dark" id="resetFilter">Xóa bộ
                                        lọc</button>
                                    <button type="submit" class="btn btn-outline-dark">Tìm</button>
                                </div> 
                            </li>
                        </form>
                    </ul>
                </div>
            </aside>
            <!-- Main content -->
            <div class="col-lg-9">
                <div class="border p-5">
                    <div class="container my-4">
                        <div class="listProduct row">
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="chitietsanpham.php">
                                        <img src="../Images/tutotdenvidai.jpg" alt="Ảnh 28" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Từ Tốt Đến Vĩ Đại</h5>
                                        <p class="card-text">Kinh tế</p>
                                        <p class="card-text text-danger fw-bold">130.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="chitietsanpham.php">
                                        <img src="../Images/hanhtinhcua1kenghinhieu.jpg" alt="Ảnh 29"
                                            class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Hành Tinh Của Một Kẻ Nghĩ Nhiều</h5>
                                        <p class="card-text">Kỹ năng sống</p>
                                        <p class="card-text text-danger fw-bold">60.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="chitietsanpham.php">
                                        <img src="../Images/howpsychology.jpg" alt="Ảnh 30" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">How Psychology Works</h5>
                                        <p class="card-text">Tâm lý</p>
                                        <p class="card-text text-danger fw-bold">250.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="chitietsanpham.php">
                                        <img src="../Images/trenduongbang.jpg" alt="Ảnh 31" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Trên Đường Băng</h5>
                                        <p class="card-text">Kỹ năng sống</p>
                                        <p class="card-text text-danger fw-bold">65.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="chitietsanpham.php">
                                        <img src="../Images/thinkclear.jpg" alt="Ảnh 32" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Think Clear</h5>
                                        <p class="card-text">Tâm lý</p>
                                        <p class="card-text text-danger fw-bold">160.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="chitietsanpham.php">
                                        <img src="../Images/nguoiduadieu.jpg" alt="Ảnh 33" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Người Đua Diều</h5>
                                        <p class="card-text">Tiểu thuyết</p>
                                        <p class="card-text text-danger fw-bold">90.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="chitietsanpham.php">
                                        <img src="../Images/melamgicouocmo.jpg" alt="Ảnh 34" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Mẹ Làm Gì Có Ước Mơ</h5>
                                        <p class="card-text">Tản văn</p>
                                        <p class="card-text text-danger fw-bold">75.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="chitietsanpham.php">
                                        <img src="../Images/tamlihocvetien.jpg" alt="Ảnh 35" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Tâm Lý Học Về Tiền</h5>
                                        <p class="card-text">Tâm lý</p>
                                        <p class="card-text text-danger fw-bold">85.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="sanpham3.php"
                                    style="background-color: #336799; color: #ffffff;">Trước</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="sanpham2.php"
                                    style="background-color: #336799; color: #ffffff;">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="sanpham3.php"
                                    style="background-color: #336799; color: #ffffff;">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" style="background-color: #28527a; color: #ffffff;">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" style="background-color: #336799; color: #ffffff;">Sau</a>
                            </li>
                        </ul>
                    </nav>
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

    <a href="#top" id="backToTop">&#8593;</a>

    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm position-absolute" style="top: 10%; left: 10%;">
            <div class="modal-content bg-success text-white">
                <div class="modal-body text-center">
                    <p class="m-0">Đã thêm vào giỏ hàng!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/sanpham.js"></script>
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
