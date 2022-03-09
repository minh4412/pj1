<?php
  if(isset($_GET['id'])){
  $id = $_GET['id'];
  $con = mysqli_connect("localhost", "root", "", "pj1");
  $sql1 = "SELECT * FROM `admin` WHERE id=$id";
 $run=mysqli_query($con,$sql1);
 $admin=mysqli_fetch_assoc($run);

  mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      width: 100px;
    }
  </style>
</head>

<body>
  <div id="themsp" class="themsanpham">
    <h1>Sửa Thông Tin Nhân Viên</h1>
  <form action="admin/quanlyadmin/sua-admin-process.php" method="get">
    <input type="hidden" name="ma-admin" value="<?php echo $id; ?>">
    <table border="0">
      <tr>
        <td class="cot">Tên:  </td>
        <td><input type="text" name="ten-admin" value="<?php echo $admin['name']; ?>" required ></td>
      </tr>
      <tr>
        <td class="cot">Username:  </td>
        <td><input type="text" name="user-admin" value='<?php echo $admin["username"]; ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Passworrd:  </td>
        <td><input type="text" name="pass-admin" value='<?php echo $admin["password"]; ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Email:  </td>
        <td><input type="text" name="email-admin" value='<?php echo $admin["email"]; ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Sđt:  </td>
        <td><input type="text" name="sdt-admin" value='<?php echo $admin["phone"]; ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Quyền:  </td>
        <td><input type="text" name="quyen-admin" value='<?php echo $admin["role"]; ?>' required></td>
      </tr>
      <tr>
        <td class="cot"></td>
        <td><button>Thêm</button></td>
      </tr>
  </table>
  </form>
</div>
</body>

</html>
<?php } ?>