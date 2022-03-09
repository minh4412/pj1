<?php
session_start();
if (isset($_POST["gio_hang"])) {
  $gioHang = $_POST["gio_hang"];
  // echo $gioHang;
  foreach ($gioHang as $ma_sp => $so_luong) {
    $_SESSION["gio_hang"][$ma_sp] = $so_luong;
  }

  header("Location: xem-gio-hang.php");
}else{header("Location: xem-gio-hang.php?err=1");}