<?php
session_start();
if (isset($_POST["email"]) && isset($_POST["passkh"])) {
  $email = $_POST["email"];
  $passkh = $_POST["passkh"];
  include("../connect/open.php");
  $sql = "SELECT * FROM user WHERE email ='$email' AND password ='$passkh'";
  $result = mysqli_query($con, $sql);
  $check = mysqli_num_rows($result);
  if ($check == 0) {
    header("Location: dang-nhap.php?err=1");
  } 
  else {
    $_SESSION["email"] = $email;
    if (isset($_POST["remember"])) {
      setcookie("email", $email, time() + 84600 * 2);
      setcookie("passkh", $passkh, time() + 84600 * 2);
    } else {
      setcookie("email", $email, time() - 100);
      setcookie("passkh", $passkh, time() - 100);
    }
    header("Location: index.php");
  }
  include("../connect/close.php");
}else{
  header("location:dang-nhap.php");
}