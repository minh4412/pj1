<?php
if (isset($_GET["id"])) {
	$ma = $_GET["id"];
	include "../connect/open.php";
	$sqlKh = "SELECT * FROM user WHERE id=$ma";
	$resultKh = mysqli_query($con, $sqlKh);

	if ($resultKh != null) {
		$kh = mysqli_fetch_array($resultKh);
	}
	include "../connect/close.php";
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tài khoản cá nhân </title>
		<link rel="shortcut icon" href="../img/icon.png">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<style type="text/css">
			#nd {
				width: 80%;
				height: 800px;
				text-align: center;
				margin:auto;
				margin-top: 200px;
				/*background: #9C8181;*/
			}

			#nd {
				background-image: url("../img/banner.png");
				background-repeat: no-repeat;
				background-size: 1200px 900px;
				background-position: center;
			}
		</style>
	</head>

	<body>
		<div id="all">
			<div id="top">
				<?php
				include "header.php";
				?>
			</div>
			<div id="nd">
				<form action="sua-kh-pro.php" method="get" >
					<input type="hidden" name="ma" value="<?php echo $ma; ?>">
					<h2 align="center">Tài khoản cá nhân</h2>
					<table border="1px" width="500px" height="500px" style=" margin:auto">
						<tr>
							<td>Họ và tên </td>
							<td><input type="text" name="ten" value="<?php echo $kh["tenkh"] ?>"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" value="<?php echo $kh["email"] ?>"></td>
						</tr>
						<tr>
							<td>Số điện thoại</td>
							<td><input type="text" name="sdt" value="<?php echo $kh["phone"]  ?>"></td>
						</tr>						
						<tr>
							<td>Password</td>
							<td><input type="text" name="pass" value="<?php echo $kh["password"]  ?>"></td>
						</tr>
						
					</table>


				</form>
			</div>
			<div id="bottom">
				<?php
				include "footer.php";
				?>
			</div>
		</div>
	</body>

	</html>
<?php
}
?>