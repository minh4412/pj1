<?php
if (isset($_GET["ma_don_hang"])) {
  $maHoaDon = $_GET["ma_don_hang"];
  include("../../connect/open.php");
  $sql = "UPDATE donhang SET trangthai=0 WHERE ma_don_hang=$maHoaDon";
  mysqli_query($con, $sql);
  $sqlHoaDonChiTiet = "SELECT * FROM `donhangchitiet` WHERE ma_don_hang=$maHoaDon";
  $resultHoaDonChiTiet = mysqli_query($con, $sqlHoaDonChiTiet);
  while ($hoaDonChiTiet = mysqli_fetch_array($resultHoaDonChiTiet)) {
    $soLuongHoaDon = $hoaDonChiTiet["so_luong"];
    $maSanPham = $hoaDonChiTiet["ma_don_hang"];
    $sqlSanPham = "SELECT * FROM product WHERE maSanPham=$maSanPham";
    $resultSanPham = mysqli_query($con, $sqlSanPham);
    $sanPham = mysqli_fetch_array($resultSanPham);
    $soLuongBanDau = $sanPham["soluong"];
    $soLuongHienTai = $soLuongBanDau + $soLuongHoaDon;
    $sqlUpdateSanPham = "UPDATE product SET soluong=$soLuongHienTai WHERE maSanPham=$maSanPham";
    mysqli_query($con, $sqlUpdateSanPham);
  }
  include("../../connect/close.php");
  header("Location: ../index.php?cat=7");
} else {
  header("Location: ../index.php?cat=7");
}