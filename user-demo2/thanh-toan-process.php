<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_POST["id-user"]) && isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["address"]) && isset($_POST["note"])) {
  $idUser = $_POST["id-user"];
  $hoTen = $_POST["name"];
  $sdt = $_POST["phone"];
  $diaChi = $_POST["address"];
  $ghichu = $_POST["note"];
  $ngayDat = date("Y-m-d H:i:s");
  include("../connect/open.php");
  $sqlThemHoaDon = "INSERT INTO donhang(hotennguoinhan,sdtnguoinhan,diachi,thoi_gian,id_user,ghi_chu) VALUES('$hoTen','$sdt','$diaChi','$ngayDat','$idUser','$ghichu')";
  mysqli_query($con, $sqlThemHoaDon);
  $sqlMaxMaHd = "SELECT MAX(ma_don_hang) as maxMa FROM `donhang`";
  $resultMaxMaHd = mysqli_query($con, $sqlMaxMaHd);
  $maxMaHd = mysqli_fetch_array($resultMaxMaHd);
  $maHd = $maxMaHd["maxMa"];
  $gioHang = $_SESSION["gio_hang"];
  foreach ($gioHang as $ma_sp => $so_luong) {
    $sqlSanPham = "SELECT * FROM product WHERE maSanPham=$ma_sp";
    $resultSanPham = mysqli_query($con, $sqlSanPham);
    $sanPham = mysqli_fetch_array($resultSanPham);
    $giaTien = $sanPham["giatien"];
    $sqlHoaDonChiTiet = "INSERT INTO donhangchitiet(ma_don_hang,ma_san_pham,so_luong,gia_tien) values ($maHd,$ma_sp,$so_luong,$giaTien)";
    mysqli_query($con, $sqlHoaDonChiTiet);
    $soLuongBanDau = $sanPham["soluong"];
    $soLuongConLai = $soLuongBanDau - $so_luong;
    $sqlUpdateSanPham = "UPDATE product SET soluong=$soLuongConLai WHERE maSanPham=$ma_sp";
    mysqli_query($con, $sqlUpdateSanPham);
  }
  unset($_SESSION["gio_hang"]);
  header("Location: index.php");
  include("../connect/close.php");
}