<?php
if (isset($_GET["masp"])) {
  $delete = $_GET["masp"];
  $con = mysqli_connect("localhost", "root", "", "pj1");
  $sql = "DELETE FROM product WHERE maSanPham=$delete";
  mysqli_query($con, $sql);
  mysqli_close($con);
  header("Location: ../index.php?cat=5");
}	