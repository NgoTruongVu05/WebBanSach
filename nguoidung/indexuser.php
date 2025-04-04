<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Bạn chưa đăng nhập!'); window.location.href='../dangky/dangnhap.php';</script>";
    exit();
} else {
    echo "Xin chào, " . $_SESSION['username'] . "!";
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$sdt = $_SESSION['sdt'];
$diachi = $_SESSION['diachi'];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng sách</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vender/css/bootstrap.min.css">
    <!-- FONT AWESOME  -->
    <link rel="stylesheet" href="../vender/css/bootstrap.min.css">
    <!-- CSS  -->
    <link rel="stylesheet" href="../asset/css/index-user.css">
</head>

<body>
<div class="container mt-5">
        <h2>Thông tin tài khoản</h2>
        <table class="table table-bordered">
            <tr>
                <th>Tên đăng nhập:</th>
                <td><?php echo $username; ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Số điện thoại:</th>
                <td><?php echo $sdt; ?></td>
            </tr>
            <tr>
                <th>Địa chỉ:</th>
                <td><?php echo $diachi; ?></td>
            </tr>
        </table>
        <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
    </div>
    <!-- Header -->
    <header class="text-white py-3" id="top">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <div class="navbar-brand logo">
                    <a href="indexuser.php" class="d-flex align-items-center">
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
                            <a href="indexuser.php" class="nav-link fw-bold" style="color: yellow;">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fw-bold text-white">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item">
                            <a href="../sanpham/sanpham-user.php" class="nav-link fw-bold text-white">SẢN PHẨM</a>
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
                                window.location.href = 'timkiem.php';
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
                                <a href="user.php"><i class="fas fa-user" id="avatar" style="color: black;"></i></a>
                                <span id="profile-name" style="top: 20px; padding: 2px; display: none;">Nguyễn Văn
                                    A</span>
                            </div>
                        </li>
                    </ul>
                    <a href="../giohang/giohangnguoidung.php" class="nav-link text-white">
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
                <a class="nav-link" href="../danhmuc/sachthieunhi.php">Sách thiếu nhi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachgiaokhoa.php">Sách giáo khoa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachkinhte.php">Sách kinh tế</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachlichsu.php">Sách lịch sử</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachngoaingu.php">Sách ngoại ngữ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../danhmuc/sachkhoahoc.php">Sách khoa học</a>
            </li>
        </ul>
    </div>
    <div class="container my-4">
        <div class="slider">
            <div class="slide">
                <h3 class="pt-2" style="text-align: center;"><strong>Sách Mới</strong></h3>
                <div class="f-grid">
                    <div class="f-grid-col">
                        <a href="../sanpham/chitietsanpham-user.php">
                            <img src="../Images/tuduynguoc.jpg" alt="Ảnh 1" class=".f-grid-col">
                        </a>  
                    </div>
                    <div class="f-grid-col">
                        <a href="../sanpham/chitietsanpham-user.php">
                            <img src="../Images/stopoverthinking.jpg" alt="Ảnh 1" class=".f-grid-col">
                        </a>         
                    </div>
                    <div class="f-grid-col">
                        <a href="../sanpham/chitietsanpham-user.php">
                            <img src="../Images/tuduymo.jpg" alt="Ảnh 1" class=".f-grid-col">
                        </a>   
                    </div>
                </div>
            </div>
            <div class="slide">
                <h3 class="pt-2" style="text-align: center;"><strong>Sách Nên Đọc</strong></h3>
                <div class="f-grid">
                    <div class="f-grid-col">
                        <a href="../sanpham/chitietsanpham-user.php">
                            <img src="../Images/conduongchangmayaidi.jpg" alt="Ảnh 1" class=".f-grid-col">
                        </a>   
                    </div>
                    <div class="f-grid-col">
                        <a href="../sanpham/chitietsanpham-user.php">
                            <img src="../Images/saochungtalaingu.jpg" alt="Ảnh 1" class=".f-grid-col">
                        </a>
                    </div>
                    <div class="f-grid-col">
                        <a href="../sanpham/chitietsanpham-user.php">
                            <img src="../Images/muonkiepnhansinh.jpg" alt="Ảnh 1" class=".f-grid-col">
                        </a>
                    </div>
                </div>
            </div>
            <div class="slide">
                <h3 class="pt-2" style="text-align: center;"><strong>Sách Hot</strong></h3>
                <div class="f-grid">
                    <div class="f-grid-col">
                        <a href="../sanpham/chitietsanpham-user.php">
                            <img src="../Images/cuoccachmangglucose.jpg" alt="Ảnh 1" class=".f-grid-col">
                        </a>
                    </div>
                    <div class="f-grid-col">
                        <a href="../sanpham/chitietsanpham-user.php">
                            <img src="../Images/100kinangsinhton.jpg" alt="Ảnh 1" class=".f-grid-col">
                        </a>
                    </div>
                    <div class="f-grid-col">
                        <a href="../sanpham/chitietsanpham-user.php">
                            <img src="../Images/ghichepphapy.jpg" alt="Ảnh 1" class=".f-grid-col">
                        </a> 
                    </div>
                </div>
            </div>
        </div>
        <script>
            let slideIndex = 1;
            showSlides();

            function showSlides() {
                let slides = document.getElementsByClassName("slide");
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  // Ẩn tất cả các slide
                }
                if (slideIndex > slides.length) { slideIndex = 1 } // Quay lại slide đầu tiên khi đạt cuối
                slides[slideIndex - 1].style.display = "block"; // Hiển thị slide hiện tại
                slideIndex++; // Tăng chỉ số slide
                setTimeout(showSlides, 4000); // Thay đổi slide mỗi 4 giây
            }
        </script>
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
                            <!--Benner-->
                            <div class="benner" style="background-image: url(../Images/background.jpg);">
                                <ul>
                                    <li>
                                        <p>"Tư duy mở không chỉ là sự thay đổi trong cách nhìn nhận mà còn là sự dám thử
                                            nghiệm những điều mới mẻ, dám đối mặt với những thách thức chưa từng gặp."
                                            <br> Nguyễn Anh Dũng
                                        </p>
                                    </li>
                                    <li>
                                        <img src="../Images/tuduymo.jpg" alt="Ảnh 1" class="benner img">
                                    </li>
                                </ul>
                            </div>
                            <div class="benner" style="background-image: url(../Images/background\(1\).jpg);">
                                <ul>
                                    <li>
                                        <p>"Tâm trí của bạn là công cụ mạnh mẽ nhất của bạn; đừng để nó trở thành kẻ thù
                                            lớn nhất." <br> Chase Hill, Scott Sharp</p>
                                    </li>
                                    <li>
                                        <img src="../Images/stopoverthinking.jpg" alt="Ảnh 1" class="benner img">
                                    </li>
                                </ul>
                            </div>
                            <div class="benner" style="background-image: url(../Images/background\(2\).jpg);">
                                <ul>
                                    <li>
                                        <p>"Không có chiến lược sinh tồn nào là hoàn hảo, nhưng có những nguyên tắc cơ
                                            bản có thể giúp bạn vượt qua hầu hết các tình huống." <br> Clint Emerson</p>
                                    </li>
                                    <li>
                                        <img src="../Images/100kinangsinhton.jpg" alt="Ảnh 1" class="benner img">
                                    </li>
                                </ul>
                            </div>
                            <h3><a href="#" class="fw-bold text-dark" style="text-decoration: none;">Sách Bán Chạy: </a>
                            </h3>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham-user.php">
                                        <img src="../Images/tuduynguoc.jpg" alt="Ảnh 1" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Tư duy ngược</h5>
                                        <p class="card-text">Tác giả: Nguyễn Anh Dũng</p>
                                        <p class="card-text text-danger fw-bold">80.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham-user.php">
                                        <img src="../Images/stopoverthinking.jpg" alt="Ảnh 2" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Stop Overthinking</h5>
                                        <p class="card-text">Tác giả: Chase Hill, Scott Sharp</p>
                                        <p class="card-text text-danger fw-bold">85.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham-user.php">
                                        <img src="../Images/tuduymo.jpg" alt="Ảnh 3" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Tư duy mở</h5>
                                        <p class="card-text">Tác giả: Nguyễn Anh Dũng</p>
                                        <p class="card-text text-danger fw-bold">80.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham-user.php">
                                        <img src="../Images/conduongchangmayaidi.jpg" alt="Ảnh 4" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Con đường chẳng mấy ai đi</h5>
                                        <p class="card-text">Tác giả: M. Scott Peck</p>
                                        <p class="card-text text-danger fw-bold">90.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham-user.php">
                                        <img src="../Images/saochungtalaingu.jpg" alt="Ảnh 5" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Sao chúng ta lại ngủ</h5>
                                        <p class="card-text">Tác giả: Matthew Walker</p>
                                        <p class="card-text text-danger fw-bold">195.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham-user.php">
                                        <img src="../Images/muonkiepnhansinh.jpg" alt="Ảnh 6" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Muôn kiếp nhân sinh</h5>
                                        <p class="card-text">Tác giả: Nguyên Phong</p>
                                        <p class="card-text text-danger fw-bold">125.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#" class="fw-bold text-dark" style="text-decoration: none;">Sách Ưu Đãi: </a>
                            </h3>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham-user.php">
                                        <img src="../Images/cuoccachmangglucose.jpg" alt="Ảnh 2" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Cuộc cách mạng Glucose</h5>
                                        <p class="card-text">Tác giả: Jessie Inchauspé</p>
                                        <p class="card-text text-danger fw-bold">120.000 đ</p>
                                        <button class="btn" style="background-color: #336799; color: #ffffff;">Thêm
                                            vào giỏ hàng</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham-user.php">
                                        <img src="../Images/100kinangsinhton.jpg" alt="Ảnh 3" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">100 kĩ năng sinh tồn</h5>
                                        <p class="card-text">Tác giả: Clint Emerson</p>
                                        <p class="card-text text-danger fw-bold">70.000 đ</p>
                                        <a href="#" class="btn" style="background-color: #336799; color: #ffffff; ">Thêm
                                            vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="width: 100%;">
                                    <a href="../sanpham/chitietsanpham-user.php">
                                        <img src="../Images/ghichepphapy.jpg" alt="Ảnh 4" class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">Ghi chép pháp y</h5>
                                        <p class="card-text">Tác giả: Lưu Bát Bách</p>
                                        <p class="card-text text-danger fw-bold">95.000 đ</p>
                                        <a href="#" class="btn" style="background-color: #336799; color: #ffffff; ">Thêm
                                            vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
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
                        <a href="indexuser.php" class="d-flex align-items-center">
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
