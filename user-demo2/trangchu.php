<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="">
	<style>
		.allcontent{
			width: 100%;
			height: auto;
		}
		.allcontent ul{
			list-style: none;
		}
		#dienthoai{
			width: 100%;
			height:400px;
		}
		#tainghe{
			width: 100%;
			height:400px;
		}
		#sac{
			width: 100%;
			height:400px;			
		}
		#sacdp{
			width: 100%;
			height:400px;
		}
		.thum{
			float: left;
			width: 230px;
			height: 330px;
			border: 1px solid black;
			border-radius: 5px;
			margin: 20px 5px 0px 10px;
		}
		.caption a{
			text-decoration: none;
			color: #333333;
		}
		.caption a:hover{
			color: red;
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
		#dttop{
			width: 200px;
			height: 40px;
			background-color: #CC9900;
		}
		#dttop ul li{
			display:block;
			text-align: center;
			float: left;
			margin-top: 10px;
			font-size: 15px;
			font-weight: bold;
			color: black;
		}
		#tntop{
			width: 200px;
			height: 40px;
			background-color: #CC9900;
		}
		#tntop ul li{
			display:block;
			text-align: center;
			float: left;
			margin-top: 10px;
			font-size: 15px;
			font-weight: bold;
			color: black;
		}
		#stop{
			width: 200px;
			height: 40px;
			background-color: #CC9900;
		}
		#stop ul li{
			display:block;
			text-align: center;
			float: left;
			margin-top: 10px;
			font-size: 15px;
			font-weight: bold;
			color: black;
		}
		#sdptop{
			width: 200px;
			height: 40px;
			background-color: #CC9900;
		}
		#sdptop ul li{
			display:block;
			text-align: center;
			float: left;
			margin-top: 10px;
			font-size: 15px;
			font-weight: bold;
			color: black;
		}
	</style>
</head>
<body>
	<div class="allcontent">
		<?php
			include ('header.php');
		?>			
		<div id="dienthoai">
			<div id="dttop">
				<ul><li>Điện Thoại</li></ul>
			</div>
				<?php
	    			$con = mysqli_connect("localhost", "root", "", "pj1");
	    			$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
	    			$current_page = !empty($_GET['page'])?$_GET['page']:1;
	    			$offset = ($current_page - 1) * $item_per_page;
	    			$sql = "SELECT * FROM `product` WHERE maTheloai=1 ORDER BY 'maSanPham' ASC LIMIT ".$item_per_page." OFFSET ".$offset." ";
	    			$result1 = mysqli_query($con, $sql);
	    			$totalrecords = mysqli_query($con, "SELECT * FROM 'product' WHERE maTheloai=1");
	    			$totalrecords = $totalrecords;
	    			$totalpages = ceil($totalrecords / $item_per_page);
						while ($row1=mysqli_fetch_array($result1)) { ?>
							<div class="thum" >
								<div class="img">
								<input type="hidden" name="id" value="<?php echo $row1['maSanPham']?>">
								<a href="chi-tiet-san-pham.php?id=<?php echo $row1['maSanPham'] ?>" role="button"><img src="../upload/<?php echo $row1['img']?>" width="180px"></a>
								</div>
								<div class="caption">
									<h3><a href="chi-tiet-san-pham.php?id=<?php echo $row1['maSanPham'] ?>" role="button"><?php echo $row1['tenSanPham'] ?></a></h3>
									<a href="chi-tiet-san-pham.php?id=<?php echo $row1['maSanPham'] ?>" role="button">Giá:<?=number_format($row1['giatien'],0,",",".")?>VNĐ</a>
								</div>
							</div>
					
				<?php } ?>
		</div>

		<div id="tainghe">
			<div id="tntop"><ul><li>Tai Nghe</li></ul></div>
				<?php
	    			$con = mysqli_connect("localhost", "root", "", "pj1");
	    			$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
	    			$current_page = !empty($_GET['page'])?$_GET['page']:1;
	    			$offset = ($current_page - 1) * $item_per_page;
	    			$sql = "SELECT * FROM `product` WHERE maTheloai=2 ORDER BY 'maSanPham' ASC LIMIT ".$item_per_page." OFFSET ".$offset." ";
	    			$result2 = mysqli_query($con, $sql);
	    			$totalrecords = mysqli_query($con, "SELECT * FROM 'product' WHERE maTheloai=2");
	    			$totalrecords = $totalrecords;
	    			$totalpages = ceil($totalrecords / $item_per_page);
					mysqli_close($con);
						while ($row2=mysqli_fetch_array($result2)) { ?>
							<div class="thum" >
								<div class="img">
								<input type="hidden" name="id" value="<?php echo $row2['maSanPham']?>">
								<a href="chi-tiet-san-pham.php?id=<?php echo $row2['maSanPham'] ?>" role="button"><img src="../upload/<?php echo $row2['img']?>" width="180px"></a>
								</div>
								<div class="caption">
									<h3><a href="chi-tiet-san-pham.php?id=<?php echo $row2['maSanPham'] ?>" role="button"><?php echo $row2['tenSanPham'] ?></a></h3>
									<a href="chi-tiet-san-pham.php?id=<?php echo $row2['maSanPham'] ?>" role="button">Giá:<?=number_format($row2['giatien'],0,",",".")?>VNĐ</a>
								</div>
							</div>
				<?php } ?>				
		</div>
		<div id="sac">
			<div id="stop"><ul><li>Sạc Điện Thoại</li></ul></div>
				<?php
	    			$con = mysqli_connect("localhost", "root", "", "pj1");
	    			$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
	    			$current_page = !empty($_GET['page'])?$_GET['page']:1;
	    			$offset = ($current_page - 1) * $item_per_page;
	    			$sql = "SELECT * FROM `product` WHERE maTheloai=3 ORDER BY 'maSanPham' ASC LIMIT ".$item_per_page." OFFSET ".$offset." ";
	    			$result3 = mysqli_query($con, $sql);
	    			$totalrecords = mysqli_query($con, "SELECT * FROM 'product' WHERE maTheloai=3");
	    			$totalrecords = $totalrecords;
	    			$totalpages = ceil($totalrecords / $item_per_page);
					mysqli_close($con);
						while ($row3=mysqli_fetch_array($result3)) { ?>
							<div class="thum" >
								<div class="img">
								<input type="hidden" name="id" value="<?php echo $row3['maSanPham']?>">
								<a href="chi-tiet-san-pham.php?id=<?php echo $row3['maSanPham'] ?>" role="button"><img src="../upload/<?php echo $row3['img']?>" width="180px"></a>
								</div>
								<div class="caption">
									<h3><a href="chi-tiet-san-pham.php?id=<?php echo $row3['maSanPham'] ?>" role="button"><?php echo $row3['tenSanPham'] ?></a></h3>
									<a href="chi-tiet-san-pham.php?id=<?php echo $row3['maSanPham'] ?>" role="button">Giá:<?=number_format($row3['giatien'],0,",",".")?>VNĐ</a>
								</div>
							</div>
				<?php } ?>				
		</div>
		<div id="sacdp">
			<div id="sdptop"><ul><li>Sạc Dự Phòng</li></ul></div>
				<?php
	    			$con = mysqli_connect("localhost", "root", "", "pj1");
	    			$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
	    			$current_page = !empty($_GET['page'])?$_GET['page']:1;
	    			$offset = ($current_page - 1) * $item_per_page;
	    			$sql = "SELECT * FROM `product` WHERE maTheloai=4 ORDER BY 'maSanPham' ASC LIMIT ".$item_per_page." OFFSET ".$offset." ";
	    			$result4 = mysqli_query($con, $sql);
	    			$totalrecords = mysqli_query($con, "SELECT * FROM 'product' WHERE maTheloai=4");
	    			$totalrecords = $totalrecords;
	    			$totalpages = ceil($totalrecords / $item_per_page);
					mysqli_close($con);
						while ($row4=mysqli_fetch_array($result4)) { ?>
							<div class="thum" >
								<div class="img">
								<input type="hidden" name="id" value="<?php echo $row4['maSanPham']?>">
								<a href="chi-tiet-san-pham.php?id=<?php echo $row4['maSanPham'] ?>" role="button"><img src="../upload/<?php echo $row4['img']?>" width="180px"></a>
								</div>
								<div class="caption">
									<h3><a href="chi-tiet-san-pham.php?id=<?php echo $row4['maSanPham'] ?>" role="button"><?php echo $row4['tenSanPham'] ?></a></h3>
									<a href="chi-tiet-san-pham.php?id=<?php echo $row4['maSanPham'] ?>" role="button">Giá:<?=number_format($row4['giatien'],0,",",".")?>VNĐ</a>
								</div>
							</div>
				<?php } ?>				
		</div>
		<div>
				<?php
					include("footer.php");
				?>
			</div>	
	</div>
</body>
</html>