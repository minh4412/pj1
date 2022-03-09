
<!DOCTYPE html>
<html>
<head>
	<title>Shop Điện Thoại</title>
	<link rel="stylesheet" href="process.css">
	<link rel="shortcut icon" href="../img/icon.png">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
</head>

<body>
	<?php 
		$con = mysqli_connect("localhost","root","","pj1");
		$search= "";
		if(isset($_GET["search"])){
			$search = $_GET["search"];
		}
		$sql= "SELECT * FROM admin WHERE name LIKE '%$search%'" ;
		$result = mysqli_query($con,$sql);
		?>
		<table id="user-listing" border="1">
        <tr>
          <th>Mã</th>
          <th>Họ tên</th>
          <th>Email</th>
          <th>Sđt</th>
          <th>Quyền</th>
        </tr>
		<?php
		while ($row=mysqli_fetch_array($result)) { 
		?>
		  <tr>
            <td><?php echo $row["id"]; ?></td> 
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["role"]; ?></td>
            <td><a href="admin/quanlyadmin/sua-admin.php?id=<?php echo $row["id"] ?>">Sửa</a></td>
            <td><a href="admin/quanlyadmin/xoa-admin.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Bạn có chắc muốn xóa người ngày khỏi danh sách không?')">Xóa</a></td>
          </tr>
		<?php } ?>
		</table>
		<?php
  		mysqli_close($con);
		?>
</body>
</html>