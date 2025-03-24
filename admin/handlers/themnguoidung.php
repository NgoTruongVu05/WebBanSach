<?php

require '../config/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tenNguoiDung = $_POST["tenNguoiDung"];
    $vaiTro = (int)((bool)$_POST["vaiTro"]);

    $stmt = $database->prepare("SELECT tenNguoiDung FROM nguoidung WHERE nguoidung.vaiTro = ?");
    $stmt->bind_param("i",$vaiTro);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $flag = true;



    while ($row = $result->fetch_assoc()) {
        if ($row['tenNguoiDung'] === $tenNguoiDung){
            $flag = false;
            break;
        }
    }

    if ($flag){
        $matKhau = $_POST["matKhau"];
        $soDienThoai = $_POST["soDienThoai"];
        $tinhThanh = $_POST["tinhThanh"];
        $quanHuyen = $_POST["quanHuyen"];
        $xa = $_POST["xa"];
        $chiTiet = $_POST["chiTiet"];
        $trangThai = true;

        $stmt = $database->prepare("INSERT INTO nguoidung(tenNguoiDung, matKhau, vaiTro, trangThai) VALUES (?,?,?,?)");
        $stmt->bind_param("ssii", $tenNguoiDung, $matKhau, $vaiTro, $trangThai);
        $stmt->execute();
        $lastId = $stmt->insert_id;
        $stmt->close();

        $stmt = $database->prepare("INSERT INTO nguoidung_diachi(tinhThanh, quanHuyen, xa, chiTiet, idNguoiDung) VALUES (?,?,?,?,?)");
        $stmt->bind_param("ssssi", $tinhThanh, $quanHuyen, $xa, $chiTiet, $lastId);
        $stmt->execute();
        $stmt->close();

        $stmt = $database->prepare("INSERT INTO nguoidung_sodienthoai(soDienThoai, idNguoiDung) VALUES (?,?)");
        $stmt->bind_param("si", $soDienThoai, $lastId);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "Bị trùng tên người dùng rồi.";
    }




    $database->close();


    if ($flag){
        $_SESSION["ketQuaThem"]=true;
    } else{
        $_SESSION["ketQuaThem"]=false;
    }
    print_r($_SESSION);
    // header('Location: ../page/nguoidung.php');
    
    // exit(); // = break


}
