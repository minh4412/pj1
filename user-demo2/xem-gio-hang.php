
<!DOCTYPE html>
<html>
<head>
  <title>Giỏ hàng</title>
  <link rel="shortcut icon" href="../img/icon.png">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style type="text/css">
    .nd{
      width: 80%;
    }
    .product-number{
      width: 40px;
    }
    .product-name{
      width: 250px;
    }
    .product-image{
      width: 170px;
    }
    .product-price{
      width: 120px;
    }
    .product-quantity{
      width: 50px;
    }
    .product-money{
      width: 70px;
    }
    .product-delete{
      width: 40px;
    }
    .nd{
      padding-bottom: 60px;
    }
    .nd a{
      text-decoration:none;
    }
    .nd a:hover{
      color: red;
    }
    #capnhap{
      padding-top: 20px;
    }
    .nd button{
      border: none;
      border-radius: 5px ;
      background-color: #202020;
      color: white;
      font-weight: bold;
    }
    .nd button:hover{
      color: red;
    }
    .cn{
      width: 300px;
      height: 40px;
      margin-top: 20px;
    }
    .cn a{
      color: white;
    }
  </style>
</head>
<body>

  <div>
    <div>
      <?php 
      include( "header.php");
      
      if (isset($_SESSION["email"])) {
        if(isset($_GET['maSanPham'])){
          $ma_sp = $_GET['maSanPham'];
        if (isset($_SESSION["gio_hang"][$ma_sp])) {
          $_SESSION["gio_hang"][$ma_sp]++;
        } else {
          $_SESSION["gio_hang"][$ma_sp] = 1;
        }
      }}
      //  else {
      //   header("Location: dang-nhap.php");
      // }
      $gioHang='';
        if(!empty($_SESSION["gio_hang"])){
        $gioHang = $_SESSION["gio_hang"];
      }


      $tongTien = 0;
      
      ?>
    </div>
    <?php if(isset($_SESSION["email"])) { ?>
    <div class="nd">
      <form action="sua-gio-hang.php" method="post">
        <h1>Giỏ hàng</h1>
        <table border="1px" width="1200px" height="100px" align="center" style="text-align: center;">
          <tr>
            <th class="product-number">Stt</th>
            <th class="product-name">Tên sp</th>
            <th class="product-image">Ảnh sp</th>
            <th class="product-price">Đơn giá</th>
            <th class="product-quantity">Số lượng</th>
            <th class="product-money">Thành tiền</th>
            <th class="product-delete">Xoá</th>
          </tr>
          
          <?php
          include("../connect/open.php");
          $index=1;
          if($gioHang != null){
          foreach ($gioHang as $ma_sp => $so_luong) {
            $sql = "SELECT * FROM product WHERE maSanPham='$ma_sp'";
            $result = mysqli_query($con, $sql);
            $sanPham = mysqli_fetch_array($result);
            ?>
            <tr>
              <td><?php echo $index++;?></td>
              <td><?php echo $sanPham["tenSanPham"]; ?></td>
              <td><img src="../upload/<?php echo $sanPham["img"]; ?>" width=100px></td>
              <td><?php echo $sanPham["giatien"]; ?></td>
              <td>
                <input type="number" style="text-align: center;" name="gio_hang[<?php echo $ma_sp ?>]" value=<?php echo $so_luong; ?>>
              </td>
              <td><?php $thanhTien = $so_luong * $sanPham["giatien"];
              echo $thanhTien; ?></td>
              <td><a href="xoa-gio-hang.php?maSanPham=<?php echo $ma_sp; ?>">Xóa</a></td>
            </tr>

            <?php 
            $tongTien = $tongTien + $thanhTien;
          }}else{ ?>
            <h1><a href="index.php">Bạn chưa đặt cái nào .Quay lại trang chủ </a></h1>
            <?php } ?>

            <?php 
          include("../connect/open.php");
          ?>
            <tr>
              <th class="product-number">Tổng tiền</th>
              <th class="product-name"></th>
              <th class="product-image"></th>
              <th class="product-price"></th>
              <th class="product-quantity"></th>
              <th class="product-money"><?php echo $tongTien;?></th>
              <th class="product-delete"></th>
            </tr>
        </table>
        <div id="capnhap">
          <button class="cn">Cập nhật</button>
        </div>
      </form>
          <button class="cn"><a href="thanh-toan.php">Đặt hàng</a></button>
    </div>
  <?php }else{ ?>
    <div class="nd"><button class="cn"><a href="dang-nhap.php">Đăng Nhập</a></button></div>
  <?php } ?>
    <div>
      <?php include "footer.php" ?></div>
    </div>
  </body>
  </html>
  <?php if(isset($_GET['err'])&&$_GET['err']==1){ ?>
  <script>
    window.alert("Bạn không có sản phẩm nào trong giỏ hàng!!");
  </script>
 <?php } ?>