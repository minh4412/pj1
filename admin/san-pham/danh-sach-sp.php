<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/sidebar.css">
</head>

<body>
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
      }
      #user-info h1{
        text-align: center;
      }
    </style>
    <div id="user-info">
      <h1>Danh sách sản phẩm</h1>
      <form action="" method="get">
              <input type="text" name="search" placeholder="Tìm kiếm">
              <input type="hidden" name="cat" value="5">
              <button>Tìm kiếm
      </button>

      </form>
      <?php
    $con = mysqli_connect("localhost", "root", "", "pj1");
      $search="";
      if(isset($_GET['search'])){
        $search=$_GET['search'];
      }
      $sql = "SELECT * FROM `product` WHERE tenSanPham LIKE '%$search%'";
      // echo $sql;
      $result = mysqli_query($con, $sql);
    ?>
      <table id="user-listing" border="0">
        <tr>
          <th>Mã</th>
          <th>Tên</th>
          <th>Mã thể loại</th>
          <th>Mã Nxs</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Ảnh</th>
          <th>Mô tả</th>
        </tr>
        <?php
        while ($sanpham = mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td><?php echo $sanpham["maSanPham"] ?></td> 
          <td><?php echo $sanpham["tenSanPham"] ?></td>
          <td><?php echo $sanpham["maTheloai"] ?></td>
          <td><?php echo $sanpham["maNhaCungcap"] ?></td>
          <td><?php echo $sanpham["giatien"] ?>VND</td>
          <td><?php echo $sanpham["soluong"] ?></td>
          <td><img src="../upload/<?php echo $sanpham["img"] ?>" alt="" width="120px" height="120px"></td>
          <td><?php echo $sanpham["mota"] ?></td>
          <td><a href="index.php?cat=10&masp=<?php echo $sanpham["maSanPham"] ?>">Sửa</a></td>
          <td><a href="san-pham/xoa-san-pham.php?masp=<?php echo $sanpham["maSanPham"] ?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này khỏi danh sách không?')">Xóa</a></td>
        </tr>
      <?php
      }
      ?><br>
    </table>
   </div> 
</body>

</html>