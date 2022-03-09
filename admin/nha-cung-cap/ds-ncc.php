<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      table, tr, td{
        border: 1px solid black;
      }
      #user-info{
        border: 1px solid #000;
        margin: auto;
        padding: 25px;
      }
      #user-info table {
        margin: 10 auto 0 auto;
        text-align: center;
        margin-top: 20px;
      }
      #user-info h1{
        text-align: center;
      }
      </style>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "pj1");
    $sql = "SELECT * FROM `nhasx`";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    ?>
    <div id="user-info">
      <h1>Danh sách Nhà Cung Cấp</h1>
      <table id="user-listing" border="1">
        <tr>
          <th>Mã Nhà Cung Cấp</th>
          <th>Tên Nhà Cung Cấp</th>
        </tr>
        <?php
        while ($nhacc = mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td><?php echo $nhacc["maNhaCungcap"] ?></td> 
          <td><?php echo $nhacc["tenNsx"] ?></td>
          <td><a href="nha-cung-cap/xoa-ncc.php?id=<?php echo $nhacc["maNhaCungcap"] ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</a></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
</body>

</html>