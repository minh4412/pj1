<?php
session_start();
if (isset($_POST["user"]) && isset($_POST["pass"])) {
  $user = $_POST["user"];
  $pass = $_POST["pass"];
  include("../connect/open.php");
  $sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
  $result = mysqli_query($con, $sql);
  $admin = mysqli_fetch_array($result);
  $check = mysqli_num_rows($result);
  if ($check == 0) {
    header("Location: dang-nhap.php?err=1");
  } 
  else {
    if($admin["quyen"] == 0){
        $_SESSION["admin"] = $user;
        $_SESSION["role"] = $admin["role"];
        if (isset($_POST["remember"])) {
          setcookie("user", $user, time() + 84600 * 2);
          setcookie("pass", $pass, time() + 84600 * 2);
        } else {
          setcookie("user", $user, time() - 100);
          setcookie("pass", $pass, time() - 100);
        }
    }else if($admin["quyen"] == 1){
        $_SESSION["Sadmin"] = $user;
        if (isset($_POST["remember"])) {
          setcookie("user", $user, time() + 84600 * 2);
          setcookie("pass", $pass, time() + 84600 * 2);
        } else {
          setcookie("user", $user, time() - 100);
          setcookie("pass", $pass, time() - 100);
        }
    }    
    header("Location: index.php");
  }
  include("../connect/close.php");
}