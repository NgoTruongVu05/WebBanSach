<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="vender/css/bootstrap.min.css">
        <!-- FONT AWESOME  -->
        <link rel="stylesheet" href="vender/css/fontawesome-free/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="asset/css/admin.css">
    </head>
    <body>
        <div class="blur-overlay"></div>
        <div class="container-fluid text-dark">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="d-flex justify-content-center p-3 text-white">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="card-header d-flex justify-content-center text-white">
                            <h4 class="fw-bold my-1">ĐĂNG NHẬP</h4>
                        </div>
                        <div class="card-body">
                            <form action="" name="signinform" id="signinform">
                                <div class="mb-3">
                                    <label class="form-label text-white" for="username">Tên đăng nhập</label>
                                    <input class="form-control" type="text" name="username" id="username" placeholder="Nhập tên đăng nhập">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-white" for="pass">Mật khẩu</label>
                                    <input class="form-control" type="password" name="pass" id="pass" placeholder="Nhập mật khẩu">
                                </div>
                                <button type="submit" class="btn text-white w-100">Đăng Nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <script src="vender/js/bootstrap.bundle.min.js"></script>
        <script src="asset/js/login.js"></script>   
    </body>
</html>