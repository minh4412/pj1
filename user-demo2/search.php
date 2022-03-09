
<!DOCTYPE html>
<html>
<head>
	<title>Shop Điện Thoại</title>
	<link rel="stylesheet" href="process.css">
	<link rel="shortcut icon" href="../img/icon.png">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		.thum{
			float: left;
			width: 230px;
			height: 330px;
			border: 1px solid black;
			border-radius: 5px;
			margin: 20px 5px 0px 10px;
		}
		.img{
			width: 180px;
			height: 180px;
			margin: 5px auto;
		}
		.img img{
			max-width: 180px;
			max-height: 180px;
		}
		.img img:hover{
			border:  1px solid #f2f2f2;
		}
		.caption a{
			text-decoration: none;
			color: #333333;
		}
		.caption a:hover{
			color: red;
		}
	</style>
</head>

<body>
	<div>
		<?php
			include('header.php');
		?>
		<div>
			<div>
				<?php 
					$con = mysqli_connect("localhost","root","","pj1");
					$search= "";
					if(isset($_GET["search"])){
						$search = $_GET["search"];
					}
					$sql= "SELECT * FROM product WHERE tenSanPham LIKE '%$search%'" ;
					$result = mysqli_query($con,$sql);
					while ($row=mysqli_fetch_array($result)) { ?>
						<div class="thum" style="border: solid;">
							<div class="img">
							<input type="hidden" name="id" value="<?php echo $row['maSanPham']?>">
							<a href="chi-tiet-san-pham.php?id=<?php echo $row['maSanPham'] ?>" role="button"><img src="../upload/<?php echo $row['img']?>" width="180px"></a>
							</div>
							<div class="caption">
								<h2><a href="chi-tiet-san-pham.php?id=<?php echo $row['maSanPham'] ?>" role="button"><?php echo $row['tenSanPham'] ?></a></h2>
								<a href="chi-tiet-san-pham.php?id=<?php echo $row['maSanPham'] ?>" role="button">Giá:<?=number_format($row['giatien'],0,",",".")?>VNĐ</a>

							</div>
						</div>
					<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>