<?php
session_start();

require '../config/config.php';
require '../handlers/admin_handle.php';

if (isset($_SESSION['usernameadmin']) && (isset($_SESSION['roleadmin']) && $_SESSION['roleadmin'] == true)) {
    $username = $_SESSION['usernameadmin'];
} else {
    echo "<script>alert('Bạn chưa đăng nhập!'); window.location.href='../index.php';</script>";
    exit();
}

$admin = getAdminInfoByUsername($database, $username);
if ($admin['trangThai'] == false) {
    echo "<script>alert('Tài khoản của bạn đã bị khóa!'); window.location.href='dangxuat.php';</script>";
    exit();
}

$stmt = $database->prepare("SELECT * FROM b01_theLoai");
$stmt->execute();
$result = $stmt->get_result();
$danhSachTheLoai = [];
while ($row = $result->fetch_assoc()) {
    $danhSachTheLoai[] = $row;
}
$result->close();
$stmt->close();

$stmt = $database->prepare("SELECT DISTINCT tl.maTheLoai ,tl.tenTheLoai FROM b01_sanPham sp
JOIN b01_theLoai tl ON sp.maTheLoai = tl.maTheLoai");
$stmt->execute();
$result = $stmt->get_result();
$danhSachTheLoaiTonTai = [];
while ($row = $result->fetch_assoc()) {
    $danhSachTheLoaiTonTai[] = $row;
}
$result->close();
$stmt->close();

$stmt = $database->prepare("SELECT * FROM b01_nhaXuatBan");
$stmt->execute();
$result = $stmt->get_result();
$danhSachNhaXuatBan = [];
while ($row = $result->fetch_assoc()) {
    $danhSachNhaXuatBan[] = $row;
}
$result->close();
$stmt->close();

$stmt = $database->prepare("SELECT DISTINCT nxb.maNhaXuatBan, nxb.tenNhaXuatBan FROM b01_sanPham sp
JOIN b01_nhaXuatBan nxb ON nxb.maNhaXuatBan = sp.maNhaXuatBan");
$stmt->execute();
$result = $stmt->get_result();
$danhSachNhaXuatBanTonTai = [];
while ($row = $result->fetch_assoc()) {
    $danhSachNhaXuatBanTonTai[] = $row;
}
$result->close();
$stmt->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="../asset/css/function.css">
    <link rel="stylesheet" href="../vender/css/fontawesome-free/css/all.min.css">
    <title>Sản phẩm</title>
</head>



<body>
    <div class="container">

        <!--Sidebar Section-->
        <aside>
            <div class="sidebar">
                <a href="thongke.php">
                    <i class="fas fa-chart-line"></i>
                    <h3>Thống kê</h3>
                </a>
                <a href="nguoidung.php">
                    <i class="fas fa-user"></i>
                    <h3>Người dùng</h3>
                </a>
                <div class="active">
                    <i class="fas fa-archive"></i>
                    <h3>Sản phẩm</h3>
                </div>
                <a href="donhang.php">
                    <i class="fas fa-clipboard-list"></i>
                    <h3>Đơn hàng</h3>
                </a>
                <a href="dangxuat.php" class="last-child">
                    <i class="fas fa-sign-out-alt"></i>
                    <h3>Đăng xuất</h3>
                </a>
            </div>
        </aside>
        <!--End of Sidebar Section-->

        <!--Header-->
        <div class="header">
            <div class="toggle">
                <div class="logo">
                    <a href="thongke.php">
                        <img src="../image/LogoSach.png">
                        <h2><?php echo $admin['tenNguoiDung'];?></h2>
                    </a>
                </div>
            </div>
            <button type="button" class="close" id="closeHeaderButton">
                <i class="fas fa-times"></i>
            </button>
            <button type="button" class="menuHeader" id="menuHeaderButton">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <!--End of Header-->

        <!-- Content Section -->
        <div class="container-content">
            <div class="content">
                <div class="grid-header-product">
                    <span>Mã Sách</span>
                    <span>Tên Sách</span>
                    <span>Tác Giả</span>
                    <span>Thể Loại</span>
                    <span>Nhà Xuất Bản</span>
                    <span>Giá Tiền</span>
                    <span>Hình ảnh</span>
                </div>
                <div class="grid-body" id="dataProducts">
                    <!-- JSON -->
                </div>
            </div>


            <div class="menuFilter" style="display: none;">
                <div class="addressFilter">
                    <label for="authorSearch">Tác giả</label>
                    <span>:</span>
                    <input type="text" name="authorSearch" id="authorSearch" placeholder="Nhập tên tác giả">
                    <label for="categorySearch">Thể loại</label>
                    <span>:</span>
                    <select name="categorySearch" id="categorySearch">
                        <option value="">Lựa chọn</option>
                        <?php
                        foreach ($danhSachTheLoaiTonTai as $theLoai) {
                            echo "<option value='" . $theLoai['maTheLoai'] . "'>" . $theLoai['tenTheLoai'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="nxbSearch">Nhà xuất bản</label>
                    <span>:</span>
                    <select name="nxbSearch" id="nxbSearch">
                        <option value="">Lựa chọn</option>
                        <?php
                        foreach ($danhSachNhaXuatBanTonTai as $nhaXuatBan) {
                            echo "<option value='" . $nhaXuatBan['maNhaXuatBan'] . "'>" . $nhaXuatBan['tenNhaXuatBan'] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="authorSearch">Giá tiền</label>
                    <span>:</span>
                    <div>
                        <div class="timeFilter">
                            <div class="part">
                                <label for="priceStart">Từ</label>
                                <input type="text" name="priceStart" id="priceStart">
                            </div>
                            <div class="part">
                                <label for="priceEnd">Đến</label>
                                <input type="text" name="priceEnd" id="priceEnd">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button type="button" class="clearFilter" id="clearButton" onclick="clearFilter()">Bỏ lọc</button>
                    <button type="button" class="acceptFilter" onclick="handleFilter(authorSearch.value,categorySearch.value,nxbSearch.value,priceStart.value,priceEnd.value)">Lọc</button>
                </div>
                
            </div>

            <!-- Tool Section -->
            <div class="tool">
                <div class="buttons">
                    <button type="button" class="add" id="addBtnProduct" onclick="openToolMenu('')">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="filterBtnTool" id="filterBtnProduct">
                            <i class="fas fa-filter"></i>
                    </button>
                </div>
                <div class="search">
                    <select name="productFilter" id="productFilter" onchange="productFilter()">
                        <option value="allProducts">Tất cả sản phẩm</option>
                        <option value="activeProducts">Sản phẩm hoạt động</option>
                        <option value="hiddenProducts">Sản phẩm bị ẩn</option>
                    </select>
                    <input type="text" name="search" placeholder="Tìm kiếm tên sách..." id="searchInput">
                    <button type="button" id="searchButton" onclick="searchButton()">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Tool Menu -->

        <div class="tool-menu" style="display: none;" id="tool-menu">
            <button type="button" class="menu-close" id="closeToolMenuButton">
                <i class="fas fa-times"></i>
            </button>
            <div class="menu-add">
                <h2>Thêm Sản Phẩm</h2>
                <form class="form" id="form-add" method="POST" action="../handlers/them/themsanpham.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="hinhAnh">Hình ảnh:</label>
                        <input type="file" name="hinhAnh" id="hinhAnh" placeholder="Chọn ảnh" onchange="previewImage(this, 'previewImg', '.form-message')">
                        <span class="form-message"></span>
                        <img id="previewImg" style="display:none;"/>
                    </div>
                    <div class="form-group">
                        <label for="tenSach">Tên sách:</label>
                        <input type="text" name="tenSach" id="tenSach" placeholder="Nhập tên sách">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="tacGia">Tác giả:</label>
                        <input type="text" name="tacGia" id="tacGia" placeholder="Nhập tác giả">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="theLoai">Thể loại:</label>
                        <select name="theLoai" id="theLoai">
                            <option value="">Lựa chọn:</option>
                            <?php
                            foreach ($danhSachTheLoai as $theLoai) {
                                echo "<option value='" . $theLoai['maTheLoai'] . "'>" . $theLoai['tenTheLoai'] . "</option>";
                            }
                            ?>
                        </select>
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="nhaXuatBan">Nhà xuất bản:</label>
                        <select name="nhaXuatBan" id="nhaXuatBan">
                            <option value="">Lựa chọn:</option>
                            <?php
                            foreach ($danhSachNhaXuatBan as $nhaXuatBan) {
                                echo "<option value='" . $nhaXuatBan['maNhaXuatBan'] . "'>" . $nhaXuatBan['tenNhaXuatBan'] . "</option>";
                            }
                            ?>
                        </select>
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="giaBan">Giá bán:</label>
                        <input type="text" name="giaBan" id="giaBan" placeholder="Nhập giá tiền">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="soTrang">Số trang:</label>
                        <input type="text" name="soTrang" id="soTrang" placeholder="Nhập số trang">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <label for="moTa">Mô tả:</label>
                        <textarea name="moTa" id="moTa"></textarea>
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Thêm" class="btn-submit">
                    </div>
                </form>
            </div>
        </div>

        <!--End of Content-Tool-->
    </div>

    <script src="../asset/js/function.js"></script>
    <script src="../asset/js/validator.js"></script>
    <script src="../asset/js/inputDataProduct.js"></script>
    <script src="../asset/js/admin.js"></script>

    <script>
        messageRequired = 'Vui lòng nhập thông tin.';
        Validator({
            form: '#form-add',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#tenSach', messageRequired),
                Validator.isRequired('#tacGia', messageRequired),
                Validator.isRequired('#theLoai', 'Vui lòng chọn thể loại'),
                Validator.isRequired('#nhaXuatBan', 'Vui lòng chọn nhà xuất bản'),
                Validator.isRequired('#giaBan', messageRequired),
                Validator.isRequired('#soTrang', messageRequired),
                Validator.isRequired('#hinhAnh', 'Vui lòng chọn hình ảnh'),
                Validator.isRequired('#moTa', messageRequired),
                Validator.isNumber('#giaBan', 'Giá tiền không hợp lệ'),
                Validator.isNumber('#soTrang', 'Số trang không hợp lệ'),
                Validator.min('#giaBan', 1000, 'Giá tiền tối thiểu là 1000 VNĐ'),
                Validator.min('#soTrang', 1, 'Số trang tối thiểu là 1 trang'),
            ]
        });
    </script>

    <?php
        if (isset($_SESSION["thongBaoThem"])){
            echo "<script>createAlert('".$_SESSION["thongBaoThem"]."');</script>";
            unset($_SESSION["thongBaoThem"]);
        }
        if (isset($_SESSION["liDo"])){
            echo "<script>createAlert('".$_SESSION["liDo"]."');</script>";
            unset($_SESSION["liDo"]);
        }
        if (isset($_SESSION["thongBaoSua"])){
            echo "<script>createAlert('".$_SESSION["thongBaoSua"]."');</script>";
            unset($_SESSION["thongBaoSua"]);
        }
    ?>
</body>

</html>

<?php
$database->close();
?>
