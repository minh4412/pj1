<?php
session_start();
if (isset($_GET["maSanPham"])) {
  $ma_sp = $_GET["maSanPham"];
  unset($_SESSION["gio_hang"][$ma_sp]);
  header("Location: xem-gio-hang.php");
}