<?php
if (isset($_GET["dong"])) {
  $MSP = $_GET["maSp"];
  $TSP = $_GET["tenSp"];
  $MTL = $_GET["maTl"];
  $MNSX = $_GET["maNsx"];
  $GT = $_GET["giatien"];
  $SLSP = $_GET["slsp"];
  $MOTA = $_GET["MoTa"];
  include ('../../connect/open.php');
  $sql = "UPDATE product SET tenSanPham='$TSP', maTheloai='$MTL' , maNhaCungcap='$MNSX', giatien='$GT', soluong='$SLSP', mota='$MOTA' WHERE maSanPham=$MSP";
  mysqli_query($con, $sql);
  include ('../../connect/close.php');
  header("Location: ../index.php?cat=5");
  // echo  $sql ;
} else {
  header("Location: ../index.php?cat=5");
  // echo "haha";
}