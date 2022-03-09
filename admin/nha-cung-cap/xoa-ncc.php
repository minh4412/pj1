<?php
if (isset($_GET["id"])) {
  $delete = $_GET["id"];
  $con = mysqli_connect("localhost", "root", "", "pj1");
  $sql = "DELETE FROM nhasx WHERE maNhaCungcap=$delete";
  mysqli_query($con, $sql);
  mysqli_close($con);
  header("Location: ../index.php?cat=3");
} else {
  header("Location: ../index.php?cat=3");
}