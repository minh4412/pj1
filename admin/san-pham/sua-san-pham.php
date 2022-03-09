<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/sidebar.css">
  <style>
    .themsanpham{
      margin: 0 auto;
      width: 800px;
      border: 1px solid #000;
      padding: 20px;
    }
    #themsp form{
      width: 350px;
      margin: auto;
      padding-top: 20px;
      padding-bottom: 20px;
    }
    #themsp form input{
      margin: 5 px 0;
    }
    h1{
      text-align: center;
    }
    .cot{
      width: 200px;
    }
  </style>
</head>

<body>
  <?php
  if(isset($_GET['masp'])){
  $masp = $_GET["masp"];
  $con = mysqli_connect("localhost", "root", "", "pj1");
  $sql = "SELECT * FROM `product` WHERE maSanPham=$masp";
  $result = mysqli_query($con, $sql);
  $sanpham = mysqli_fetch_array($result);
  mysqli_close($con);
  ?>
  <div id="themsp" class="themsanpham">
    <h1>Sửa sản phẩm</h1>
  <form action="san-pham/sua-san-pham-process.php" method="get">
    <input type="hidden" name="maSp" value="<?php echo $masp; ?>">
    <table border="0">
      <tr>
        <td class="cot">Tên sản phẩm:   </td>
        <td><input type="text" name="tenSp" value='<?php echo $sanpham["tenSanPham"] ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Thể loại:   </td>
        <td>
        <select name="maTl" id="" required>
      <option value="1" <?php if($sanpham["maTheloai"]=='1'){echo "selected";}?> >Điện thoại</option>
      <option value="2" <?php if($sanpham["maTheloai"]=='2'){echo "selected";}?> >Tai nghe</option>
      <option value="3" <?php if($sanpham["maTheloai"]=='3'){echo "selected";}?> >Sạc điện thoại</option>
      <option value="4" <?php if($sanpham["maTheloai"]=='4'){echo "selected";}?> >Sạc dự phòng</option>
    </select><br></td>
      </tr>
      <tr>
        <td class="cot">Mã nhà sản xuất:  </td>
        <td><input type="text" name="maNsx" value='<?php echo $sanpham["maNhaCungcap"] ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Giá tiền: </td>
        <td><input type="text" name="giatien" value='<?php echo $sanpham["giatien"] ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Số lượng sản phẩm:  </td>
        <td><input type="text" name="slsp" value='<?php echo $sanpham["soluong"] ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Mô tả:  </td>
        <td><textarea  name="MoTa"> <?php echo $sanpham["mota"] ?></textarea></td>
      </tr>
      <tr>
        <td class="cot"></td>
        <td><button type="submit" name="dong">Sửa</button></td>
      </tr>
  </table>
  </form>
</div>
<?php }?>
</body>
</html>