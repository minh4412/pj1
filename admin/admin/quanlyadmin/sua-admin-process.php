<?php
if (isset($_GET["ma-admin"]) && isset($_GET["ten-admin"]) && isset($_GET["user-admin"]) && isset($_GET["pass-admin"]) && isset($_GET["email-admin"]) && isset($_GET["sdt-admin"]) && isset($_GET["quyen-admin"])) {
  $MaAdmin = $_GET["ma-admin"];
  $tenAdmin = $_GET["ten-admin"];
  $UserAdmin = $_GET["user-admin"];
  $PassAdmin = $_GET["pass-admin"];
  $EmailAdmin = $_GET["email-admin"];
  $SdtAdmin = $_GET["sdt-admin"];
  $QuyenAdmin = $_GET["quyen-admin"];
  include ('../../../connect/open.php');
  $sql = "UPDATE admin SET name='$tenAdmin', username='$UserAdmin' , password='$PassAdmin' , email='$EmailAdmin' , phone='$SdtAdmin' , role='$QuyenAdmin'  WHERE id=$MaAdmin";
  mysqli_query($con, $sql);
  include ('../../../connect/close.php');
  header("Location: ../../index.php?cat=1");
} else {
  header("Location: ../../index.php?cat=1");
}