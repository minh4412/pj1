<?php
include ('../../connect/open.php');
if (isset($_POST["them"])){
  $TENSP = $_POST["ten-sp"];
  $MATL = $_POST["ma-tl"];
  $MANSX = $_POST["ma-nsx"];
  $GIA = $_POST["gia"];
  $MOTA = $_POST["mo-ta"];
  $SOLUONG = $_POST["so-luong"];
  $anh = $_FILES["anh"];
  $tenAnh = $anh["name"];
  $duongdan="../../upload/".$tenAnh;
  move_uploaded_file($anh["tmp_name"], $duongdan);
  $sql = "INSERT INTO product(tenSanPham,maTheloai,maNhaCungcap,giatien,soluong,mota,img) values ('$TENSP','$MATL','$MANSX','$GIA','$SOLUONG','$MOTA','$tenAnh')";
  mysqli_query($con, $sql);
  include ('../../connect/close.php');
  header("Location:../index.php?cat=5");
}
