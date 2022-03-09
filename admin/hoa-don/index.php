<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      table, tr, td{
        border: 1px solid black;
        text-align: center;
      }
      #user-info{
        border: 1px solid #000;
        margin: auto;
        padding: 25px;
      }
      #user-info table {
        margin: 10 auto 0 auto;
        text-align: center;
      }
      #user-info h1{
        text-align: center;
      }
      </style>
</head>

<body>
  <h1>Hóa đơn</h1>
    <?php
    $con = mysqli_connect("localhost", "root", "", "pj1");
    $sql = "SELECT * FROM `donhang`";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    ?>
  <table border="1">
    <tr>
      <th>Mã</th>
      <th>Tên</th>
      <th>Sđt</th>
      <th>Địa Chỉ</th>
      <th>Ngày Đặt</th>
      <th>Ghi chú</th>
      <th>Chi tiết đơn hàng</th>
      <th>Trạng Thái</th>
      <th colspan="2">Thao tác</th>
    </tr>
    <?php
    while ($hoaDon = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td><?php echo $hoaDon["ma_don_hang"]; ?></td>
        <td><?php echo $hoaDon["hotennguoinhan"]; ?></td>
        <td><?php echo $hoaDon["sdtnguoinhan"]; ?></td>
        <td><?php echo $hoaDon["diachi"]; ?></td>
        <td><?php echo $hoaDon["thoi_gian"]; ?></td>
        <td><?php echo $hoaDon["ghi_chu"]; ?></td>
        <td><a href="index.php?cat=12&ma_don_hang=<?php echo $hoaDon["ma_don_hang"];?>">Xem</a></td>
        <td><?php
            if ($hoaDon["trangthai"] == "") {
              echo "Chưa duyệt";
            } else if ($hoaDon["trangthai"] == 1) {
              echo "Đã duyệt";
            } else {
              echo "Đã hủy";
            }
            ?></td>
        <?php
        if ($hoaDon["trangthai"] == "") {
        ?>
          <td><a href="hoa-don/duyet-hoa-don.php?ma_don_hang=<?php echo $hoaDon["ma_don_hang"]; ?>">Duyệt</a></td>
          <td><a href="hoa-don/huy-hoa-don.php?ma_don_hang=<?php echo $hoaDon["ma_don_hang"]; ?>">Hủy</a></td>
        <?php
        } else {
        ?>
          <td colspan="2"></td>
        <?php
        }
        ?>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>