<?php
if (isset($_GET["ma_don_hang"])) {
  $maHoaDon = $_GET["ma_don_hang"];
  include("../../connect/open.php");
  $sql = "UPDATE donhang SET trangthai=1 WHERE ma_don_hang=$maHoaDon";
  mysqli_query($con, $sql);
  include("../../connect/close.php");
  header("Location: ../index.php?cat=7");
} else {
  header("Location: ../index.php?cat=7");
}