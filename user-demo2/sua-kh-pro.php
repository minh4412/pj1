<?php
if (
	isset($_GET['ma']) && isset($_GET['ten']) && isset($_GET['email']) && isset($_GET['sdt'])
	&& isset($_GET['dia_chi']) && isset($_GET['username']) && isset($_GET['pass'])

) {
	$ten = ($_GET['ten']);

	$email = ($_GET['email']);

	$dia_chi = ($_GET['dia_chi']);

	$sdt = ($_GET['sdt']);

	$name = ($_GET['username']);

	$mat_khau = ($_GET['pass']);

	$ma = $_GET['ma'];
include('../connect/open.php');

$sql = "UPDATE user SET tenkh = '$ten', email = '$email', phone = '$sdt', diachi = '$dia_chi', username = '$name', password = '$mat_khau' WHERE id = '$ma'";

mysqli_query($con, $sql);
}
header("Location:trangchu.php");

