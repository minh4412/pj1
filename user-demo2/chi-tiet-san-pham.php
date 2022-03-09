<?php
if (isset($_GET["id"])) {
  $maSp = $_GET["id"];
  include("../connect/open.php");
  $sql = "SELECT * FROM product WHERE maSanPham=$maSp";
  $result = mysqli_query($con, $sql);
  $sanPham = mysqli_fetch_array($result);
  include("../connect/close.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Điện thoại</title>
  <link rel="shortcut icon" href="../img/icon.png">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
    .chitiet{
      margin-bottom: 60px;
    }
  </style>
</head>

<body>
  <div>
    <div><?php include "header.php";?></div>
  <div class="chitiet">
    <img src="../upload/<?php echo $sanPham["img"] ?>" width="500px" height="500px">
    <h2><?php echo $sanPham["tenSanPham"]; ?></h2>
    <h3>Giá: <?php echo $sanPham["giatien"]; ?>VND</h3>
    <div>
      <?php echo $sanPham["mota"]; ?>
    </div>
    <div><button><a href="xem-gio-hang.php?maSanPham=<?php echo $maSp; ?>">Thêm vào giỏ hàng</a></button></div>
  </div>
  <div><?php include "footer.php";?></div>
  
  </div>
</body>

</html>