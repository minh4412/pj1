<?php
if (isset($_GET["hoten"]) && isset($_GET["user"]) && isset($_GET["pass"]) && isset($_GET["email"]) && isset($_GET["sdt"]) && isset($_GET["quyen"])) {
  $HOTEN = $_GET["hoten"];
  $USER = $_GET["user"];
  $PASS = $_GET["pass"];
  $EMAIL = $_GET["email"];
  $SDT = $_GET["sdt"];
  $QUYEN = $_GET["quyen"];
  include ('../../../connect/open.php');
  $sql = "INSERT INTO admin(name,username,password,email,phone,role) values ('$HOTEN','$USER','$PASS','$EMAIL','$SDT','$QUYEN')";
  mysqli_query($con, $sql);
  include ('../../../connect/close.php');
  header("Location: ../../index.php?cat=1");
} else {
  header("Location: ../../index.php?cat=2");
}