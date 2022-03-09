<?php
	include ("../../connect/open.php");
if (isset($_GET["ma-user"]) && isset($_GET["user-user"])&& isset($_GET["email-user"]) && isset($_GET["sdt-user"])) {
  $MaUser = $_GET["ma-user"];
  $UserUser = $_GET["user-user"];
  $EmailUser = $_GET["email-user"];
  $SdtUser = $_GET["sdt-user"];
  $con = mysqli_connect("localhost", "root", "", "pj1");
  $sql = "UPDATE user SET username='$UserUser' , email='$EmailUser' , phone='$SdtUser'  WHERE id=$MaUser";
  mysqli_query($con, $sql);
	
  mysqli_close($con);
  header("Location: ../index.php?cat=8");
  // echo $sql;
}else{
	// echo "haha";
}