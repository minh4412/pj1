<?php
if (
   isset($_POST['ten_kh']) && isset($_POST['email_kh']) && isset($_POST['sdt']) && isset($_POST['username']) && isset($_POST['pass'])

) {
  $ten = ($_POST['ten_kh']);

  $email = ($_POST['email_kh']);

  $sdt = ($_POST['sdt']);

  $tai_khoan = ($_POST['username']);

  $mat_khau = ($_POST['pass']);
}
include('../connect/open.php');

$sql = "INSERT INTO user ( tenkh, email, phone, username, password) VALUES ( '$ten', '$email', '$sdt', '$tai_khoan', '$mat_khau')";

$result = mysqli_query($con, $sql);


header("Location:dang-nhap.php");


include('../connect/close.php');
?>