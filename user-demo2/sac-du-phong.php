<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sạc dự phòng</title>
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
			height:auto;
			margin-bottom: 30px;
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
			display: inline-block;
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
		.pagination{
		float: right;
	}
	.pagination a {
		color: black;
		float: left;
		padding: 8px 16px;
		text-decoration: none;
		transition: background-color .3s;
	}

	.pagination a:active {
		background-color: dodgerblue;
		color: white;
	}
	.pagination a:hover{background-color: #ddd;}

	.div3 {
	  clear: right;
	}
	</style>
</head>
<body>
	<?php $con = mysqli_connect("localhost", "root", "", "pj1");
	    			$key=15;
	    			$trang=1;
	    			if(isset($_GET['page'])){
	    				$trang=$_GET['page'];
	    			}$con = mysqli_connect("localhost", "root", "", "pj1");

	    			$ka=( $trang-1)*15;
	    			$totalrecords = mysqli_query($con, "SELECT * FROM `product` WHERE  maTheloai='1'");
	    			$ha=mysqli_num_rows($totalrecords);
	    			$totalpages = ceil($ha/$key);
	    			
	    			$sql = "SELECT * FROM `product` WHERE maTheloai=4 ORDER BY 'maSanPham' ASC LIMIT $ka,$key";
	    			$result = mysqli_query($con, $sql);
					mysqli_close($con); ?>
	<div class="allcontent">
		<?php
			include ('header.php');
		?>			
		<div id="dienthoai">
			<div id="dttop">
				<ul><li>Sạc dự phòng</li></ul>
			</div>
				<?php
						while ($row=mysqli_fetch_array($result)) { ?>
							<div class="thum" >
								<div class="img">
								<input type="hidden" name="id" value="<?php echo $row['maSanPham']?>">
								<a href="chi-tiet-san-pham.php?id=<?php echo $row['maSanPham'] ?>" role="button"><img src="../upload/<?php echo $row['img']?>" width="180px"></a>
								</div>
								<div class="caption">
									<h3><a href="chi-tiet-san-pham.php?id=<?php echo $row['maSanPham'] ?>" role="button"><?php echo $row['tenSanPham'] ?></a></h3>
									<a href="chi-tiet-san-pham.php?id=<?php echo $row['maSanPham'] ?>" role="button">Giá:<?=number_format($row['giatien'],0,",",".")?>VNĐ</a>
								</div>
							</div>
				<?php } ?>
		</div>
		<div class="pagination">
		<?php for ($num = 1 ; $num <= $totalpages ; $num++) { ?>
			<a class="page-item" href="?page=<?php echo $num?>"><?php echo $num ?></a>
		<?php } ?>
		</div>
		<div class="div3"></div>
		<div>
			<?php
				include("footer.php");
			?>
		</div>	
	</div>
</body>
</html>