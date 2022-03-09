<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="../../assets/jquery-3.1.1.min.js"></script>
  <script src="../../assets/ckeditor/ckeditor.js"></script>
  <script src="../../assets/ckfinder/ckfinder.js"></script>
  <link rel="stylesheet" href="../assets/css/sidebar.css">
</head>
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
  </style>
<body>
  <div id="themsp" class="themsanpham">
   <h1>Thêm sản phẩm</h1>
   <form action="san-pham/them-san-pham-process.php" method="post" enctype="multipart/form-data">
    Tên: <input type="text" name="ten-sp" required><br>
    Thể loại:
    <select name="ma-tl" id="" required>
      <option value="1">Điện thoại</option>
      <option value="2">Tai nghe</option>
      <option value="3">Sạc điện thoại</option>
      <option value="4">Sạc dự phòng</option>
    </select><br>
    Mã nhà cung cấp::<input type="text" name="ma-nsx" required ><br>
    Giá: <input type="number" name="gia" required> <br>
    Ảnh: <input type="file" name="anh" required><br>
    Mô tả: <textarea name="mo-ta" id="mo-ta" cols="30" rows="10" required></textarea><br>
    Số lượng: <input type="number" name="so-luong" required> <br>
    <button type="submit" name="them" >Thêm</button>
  </form>
</div>
  <script>
    CKEDITOR.replace('mo-ta', {
      filebrowserBrowseUrl: '../../assets/ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl: '../../assets/ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl: '../../assets/ckfinder/ckfinder.html?type=Flash',
      filebrowserUploadUrl: '../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl: '../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl: '../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
  </script>
</body>

</html>