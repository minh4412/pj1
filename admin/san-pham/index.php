<?php
session_start();
if(isset($_SESSION["admin"]) || isset($_SESSION["Sadmin"])){
	
}else{
	header("Location: ../dang-nhap.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  include("../side-bar.php");
  ?>
  
  <br><button><a href="../dang-xuat.php">Đăng Xuất</a></button>
</body>

</html>