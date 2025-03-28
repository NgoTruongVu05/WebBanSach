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
    <link rel="stylesheet" href="../css/chitietsanpham.css">
</head>

<body>
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
                            <a href="../sanpham/sanpham.php" class="nav-link fw-bold text-white">SẢN PHẨM</a>
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
    <section class="product-detail py-5">
        <div class="container">
            <div class="listProduct row">
                <div class="Picture col-lg-6 col-md-12 col-sm-12">
                    <img src="../Images/harrypotter.jpg" alt="mat hinh" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2 class="product-name">Harry Potter và hòn đá phù thủy</h2>
                    <h6>Tác giả: J.K. Rowling</h3>
                        <p class="product-price">Giá: <strong>100.000đ</strong></p>
                        <div class="ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(4.5/5 đánh giá)</span>
                        </div>
                        <p class="product-description">
                            "Harry Potter và Hòn Đá Phù Thủy" là cuốn sách đầu tiên trong loạt truyện nổi tiếng về cậu
                            bé
                            phù thủy Harry Potter, viết bởi nhà văn người Anh J.K. Rowling. Đây là một tác phẩm kỳ diệu,
                            đưa
                            người đọc vào thế giới phép thuật, nơi mà điều kỳ diệu có thể xảy ra bất cứ lúc nào. Cuốn
                            sách
                            mở ra một cuộc phiêu lưu kỳ thú, nơi Harry Potter, một cậu bé mồ côi, phát hiện ra rằng mình
                            là
                            một phù thủy và bước vào học tại trường Hogwarts, nơi dạy phép thuật và phù thủy.

                            Cuốn sách không chỉ kể về cuộc sống và cuộc chiến của Harry trong một thế giới phép thuật mà
                            còn
                            là một câu chuyện đầy cảm hứng về tình bạn, lòng dũng cảm và sự trưởng thành. "Harry Potter
                            và
                            Hòn Đá Phù Thủy" đã trở thành một hiện tượng toàn cầu, gây ảnh hưởng lớn không chỉ trong
                            lĩnh
                            vực văn học mà còn trong điện ảnh, với bộ phim chuyển thể thành công.
                        </p>
                        <ul class="product-features">
                            <li>Các nhân vật trong sách, đặc biệt là Harry, Ron, và Hermione, có những đặc điểm riêng
                                biệt
                                nhưng cũng rất dễ gần và tạo được sự đồng cảm với người đọc. Tình bạn giữa ba nhân vật
                                chính
                                là một yếu tố quan trọng, thể hiện sức mạnh của tình bạn trong việc vượt qua khó khăn.
                            </li>
                            <li>Câu chuyện không chỉ tập trung vào cuộc phiêu lưu kỳ thú mà còn chứa đựng những thông
                                điệp
                                sâu sắc về lòng dũng cảm, tình yêu thương và sự đấu tranh giữa cái thiện và cái ác.</li>
                            <li>Cuốn sách đã trở thành một biểu tượng văn hóa toàn cầu, được dịch ra hàng trăm ngôn ngữ
                                và
                                chuyển thể thành bộ phim điện ảnh nổi tiếng, gây tiếng vang lớn trên toàn thế giới.</li>
                        </ul>
                        <div class="quantity mt-3">
                            <label for="quantity">Số lượng:</label>
                            <input type="number" id="quantity" min="1" value="1"
                                class="form-control w-25 d-inline-block">
                        </div>
                        <div class="btn-box mt-4">
                            <button class="btn btn-warning me-3">Thêm vào giỏ hàng</button>
                        </div>
                </div>
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
                        <a href="../nguoidung/indexuser.php" class="d-flex align-items-center">
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
    <script src="../js/chitietsanpham.js"></script>
</body>

</html>