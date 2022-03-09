
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="shortcut icon" href="../img/icon.png">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
  #thanhtoan table{
    margin: auto;
    margin-top: 30px;
    margin-bottom: 30px;
  }
  #thanhtoan input{
    width: 300px;
    height: 40px;
  }
  #thanhtoan textarea{
    width: 300px;
    height: 50px;
  }
</style>
</head>

<body>
	<?php
		include ('header.php');
    include("../connect/open.php");
    $useremail = $_SESSION['email'];
    $sql = "SELECT * FROM `user` WHERE email='$useremail'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_array($result);
    include("../connect/close.php");
	?>
	<div id="thanhtoan">
	<form action="thanh-toan-process.php" method="post" accept-charset="utf-8">
    <table border="1px" width="600px" height="400px" align="center" style="text-align: center;">
      <input type="hidden" name="id-user" value="<?php echo $user["id"] ?>">
      <tr>
        <td>Tên người nhận</td>
        <td>
          <input type="text" name="name" required>
        </td>
      </tr>
      <tr>
        <td>Điện thoại</td>
        <td><input type="text" name="phone" required></td>
      </tr>
      <tr>
       <td>Địa chỉ</td>
        <td><input type="text" name="address" required></td>
      </tr>
      <tr>
        <td>Ghi chú</td>
        <td><textarea name="note"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td><button name="giaodich">Thanh Toán</button></td>
      </tr>
    </table>
   </form>
</div>
   <?php
   		include ('footer.php');
   ?>
</body>
</html>