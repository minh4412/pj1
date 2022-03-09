<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <?php 
    if(isset($_GET["ma_don_hang"])){
      $madonhang=$_GET["ma_don_hang"];
    }
  
    include ('../connect/open.php');
    $sql="SELECT * FROM donhangchitiet WHERE ma_don_hang=$madonhang";
    $result = mysqli_query($con,$sql);
   ?>
   <h1>Chi tiết hóa đơn</h1>
   <table border="1">
     <tr>
       <th>Mã Sản Phẩm</th>
       <th>Số Lượng</th>
       <th>Tổng tiền</th>
     </tr>
     <?php 
      while ( $row=mysqli_fetch_array($result)){  
      ?>
     <tr>
       <td><?php echo $row["ma_san_pham"] ?></td>
       <td><?php echo $row["so_luong"] ?></td>
       <td><?php echo $row["gia_tien"] ?></td>
     </tr>
   <?php } ?>
   </table>
   <?php
      mysqli_close($con);
    ?>
</body>
</html>